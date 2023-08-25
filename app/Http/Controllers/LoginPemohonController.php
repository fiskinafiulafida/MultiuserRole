<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LoginPemohon;

class LoginPemohonController extends Controller
{
    public function login()
    {
        return view('LogRegPemohon.login');
    }

    public function dologin(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
            return redirect()->intended('/DashboardPemohon');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/HomeHukum');
    }
}
