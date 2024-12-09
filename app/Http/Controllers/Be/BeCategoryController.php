<?php

namespace App\Http\Controllers\Be;

use App\Helpers\Upload;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeCategoryController extends Controller
{
    public function index()
    {
        $data = Category::paginate(10);
        return view('be.category.index', compact('data'));
    }

    public function create()
    {
        return view('be.category.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $params = $request->only([
                'name',
            ]);
            if ($request->hasFile('image')) {
                $params['image'] = Upload::handleUploadFile('image/category/', 'image', $request);
            }
            if ($request->hasFile('icon')) {
                $params['icon'] = Upload::handleUploadFile('image/category/', 'icon', $request);
            }
            $params['slug'] = Str::slug($params['name']);
            $params['create_by'] = Auth::guard('admin')->user()->id;
            Category::create($params);
            DB::commit();
            return redirect()->route('admin.category.index')->with(['success' => 'Thêm mới thành công']);
        } catch (Exception $e) {
            Log::error('[BeCategoryController][store] error ' . $e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => 'Thêm mới thất bại']);
        }
    }

    public function edit($id)
    {
        $data = Category::find($id);
        if ($data) {
            return view('be.category.edit', compact('data'));
        }
        abort(404);
    }

    public function update(Request $request, $id)
    {
        try {
            $data = Category::find($id);
            if (!$data) {
                abort(404);
            }
            DB::beginTransaction();
            $params = $request->only([
                'name',
            ]);
            $params['slug'] = Str::slug($params['name']);
            if ($request->hasFile('image')) {
                if (isset($data->image) && !empty($data->image)) {
                    Storage::delete($data->image);
                }
                $params['image'] = Upload::handleUploadFile('image/category/', 'image', $request);
            }
            if ($request->hasFile('icon')) {
                if (isset($data->icon) && !empty($data->icon)) {
                    Storage::delete($data->icon);
                }
                $params['icon'] = Upload::handleUploadFile('image/category/', 'icon', $request);
            }
            $params['update_by'] = Auth::guard('admin')->user()->id;
            $data->update($params);
            DB::commit();
            return redirect()->route('admin.category.edit', ['id' => $id])->with(['success' => 'Chỉnh sửa thành công']);
        } catch (Exception $e) {
            Log::error('[BeCategoryController][update] error ' . $e->getMessage());
            DB::rollBack();
            return redirect()->back()->with(['error' => 'Chỉnh sửa thất bại']);
        }
    }
}
