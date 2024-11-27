<?php

namespace App\Http\Controllers\Be;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeUserController extends Controller
{
    /**
     * login
     *
     * @return View
     */
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.user.index');
        }

        return view('be.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only([
            'email',
            'password'
        ]);
        $credentials['role'] = ROLE_ADMIN;
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.home.index');
        }
        return redirect()->back()->with([
            'error' => 'Thông tin đăng nhập không chính xác',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
