<?php

namespace App\Http\Controllers;

use App\Helpers\Upload;
use App\Http\Controllers\Be\BeProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CommonController extends Controller
{
    /**
     * @var request
     */
    protected $request;
    protected $productController;

    public function __construct(
        Request $request,
        BeProductController $productController
    ) {
        $this->request = $request;
        $this->productController = $productController;
    }

    public function destroy(Request $request)
    {
        $id = $this->request->get('id');
        $model = $this->request->get('model');
        switch ($model) {
            case 'category':
                $model = Category::class;
                break;
            case 'product':
                $model = Product::class;
                break;
            default:
                # code...
                break;
        }
        if ($this->request->has('checkAll')) {
            return $this->destroyModel($id, $model, true);
        }
        return $this->destroyModel($id, $model);
    }

    public function destroyModel($id, $model)
    {
        $model = ucfirst($model);
        try {
            $message = 'Xóa thành công';
            Session::flash('success', $message);
            $data = $model::where('id', $id)->first();
            if (isset($data->image) && !empty($data->image)) {
                Upload::deleteFile($data->image);
            }
            if (isset($data->icon) && !empty($data->icon)) {
                Upload::deleteFile($data->icon);
            }
            if ($model === Product::class) {
                $this->productController->destroySampleByProductId($id);
            }
            $data->delete();
            return response()->json([
                'status' => Response::HTTP_OK,
            ]);
        } catch (\Exception $e) {
            $message = 'Xóa thất bại';
            Session::flash('error', $message);
            return response()->json([
                'status' => Response::HTTP_BAD_REQUEST,
            ]);
        }
    }
}
