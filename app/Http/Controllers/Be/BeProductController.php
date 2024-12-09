<?php

namespace App\Http\Controllers\Be;

use App\Helpers\Upload;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sample;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeProductController extends Controller
{
    public function index()
    {
        $data = Product::paginate(10);
        return view('be.product.index', compact('data'));
    }

    public function create()
    {
        $category = Category::all();
        return view('be.product.create', compact('category'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $params = $request->only([
                'name',
                'category_id',
                'content'
            ]);
            $params['slug'] = Str::slug($params['name']);
            $params['create_by'] = Auth::guard('admin')->user()->id;
            $product = Product::create($params);
            $paramSample = self::getRequestSample($product->id, $request->samples_name, $request->samples_price, $request->image);
            Sample::insert($paramSample);
            DB::commit();
            return redirect()->route('admin.product.index')->with(['success' => 'Thêm mới thành công']);
        } catch (Exception $e) {
            Log::error('[BeProductController][store] error ' . $e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => 'Thêm mới thất bại']);
        }
    }

    public function edit($id)
    {
        $data = Product::find($id);
        if ($data) {
            $category = Category::all();
            $sample = Sample::where('product_id', $id)->get();
            return view('be.product.edit', compact('data', 'category', 'sample'));
        }
        abort(404);
    }

    public function update(Request $request, $id)
    {
        try {
            $data = Product::find($id);
            if (!$data) {
                abort(404);
            }
            DB::beginTransaction();
            $params = $request->only([
                'name',
                'category_id',
                'content'
            ]);
            $params['slug'] = Str::slug($params['name']);
            $params['update_by'] = Auth::guard('admin')->user()->id;
            $data->update($params);
            self::destroySampleByProductId($id, $request->image);
            $paramSample = self::getRequestSample($id, $request->samples_name, $request->samples_price, $request->image);
            Sample::insert($paramSample);
            DB::commit();
            return redirect()->route('admin.product.edit', ['id' => $id])->with(['success' => 'Chỉnh sửa thành công']);
        } catch (Exception $e) {
            Log::error('[BeProductController][update] error ' . $e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => 'Chỉnh sửa thất bại']);
        }
    }

    public function getRequestSample($productId, $samplesName, $samplesPrice, $image)
    {
        $paramSample = [];
        foreach ($samplesName as $key => $value) {
            if ($image[$key]->isValid()) {
                $imagePath = Upload::handleUploadFile('image/sample/', 'image', null, $image[$key]);
            }
            $paramSample[] = [
                'product_id' => $productId,
                'name' => $value,
                'price' => str_replace(",", "", $samplesPrice[$key]),
                'image' => $imagePath
            ];
        }
        return $paramSample;
    }

    public function destroySampleByProductId($id, $path = [])
    {
        $sample = Sample::where('product_id', $id)->get();
        foreach ($sample as $item) {
            if (isset($item->image) && !empty($item->image) && !in_array($item->image, $path)) {
                Storage::delete($item->image);
            }
            $item->delete();
        }
    }
}
