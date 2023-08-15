<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function dologin(Request $request)
    {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                // jika user operator
                return redirect()->intended('/operator');
            }
            if (auth()->user()->role_id === 1) {
                // jika user operator
                return redirect()->intended('/operator');
            }
            if (auth()->user()->role_id === 1) {
                // jika user operator
                return redirect()->intended('/operator');
            }
            if (auth()->user()->role_id === 1) {
                // jika user operator
                return redirect()->intended('/operator');
            } else {
                // jika user pegawai
                return redirect()->intended('/');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function cek()
    {
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        }
        if (auth()->user()->role_id === 1) {
            return redirect('/operator');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
