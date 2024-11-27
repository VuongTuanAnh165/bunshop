<?php

namespace App\Http\Controllers;

use App\Helpers\Upload;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CommonController extends Controller
{
    /**
     * @var request
     */
    protected $request;

    public function __construct(
        Request $request
    ) {
        $this->request = $request;
    }

    public function destroy(Request $request)
    {
        $id = $this->request->get('id');
        $model = $this->request->get('model');
        switch ($model) {
            case 'category':
                $model = Category::class;
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
            if(isset($data->image) && !empty($data->image)) {
                Upload::deleteFile($data->image);
            }
            if(isset($data->icon) && !empty($data->icon)) {
                Upload::deleteFile($data->icon);
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
