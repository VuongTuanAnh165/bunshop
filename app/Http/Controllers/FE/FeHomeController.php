<?php

namespace App\Http\Controllers\Fe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeHomeController extends Controller
{
    public function index()
    {
        return view('fe.home.index');
    }
}
