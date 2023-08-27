<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginPemohon;
use Illuminate\Support\Facades\Validator;

class LoginPemohonController extends Controller
{
    public function index()
    {
        return view('LogRegPemohon.login');
    }

    public function prosesLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/DashboardPemohon');
        }

        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/HomeHukum');
    }
}
