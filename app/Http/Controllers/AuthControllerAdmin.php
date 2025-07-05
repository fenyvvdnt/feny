<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthControllerAdmin extends Controller
{
    // Tampilkan form login admin
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    // Proses login admin
    public function login(Request $request)
    {
        // Langsung login admin dengan ID 1 (atau ID admin yang ada)
        Auth::guard('admin')->loginUsingId(1);

        $request->session()->regenerate();
        return redirect()->route('main')->with('login_success', 'Login berhasil!');
    }

    // Logout admin
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('success', 'Logout berhasil!');
    }
}
