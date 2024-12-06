<?php

namespace App\Http\Controllers\Be;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
}
