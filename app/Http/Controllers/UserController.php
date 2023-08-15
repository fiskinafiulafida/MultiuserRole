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
            if (auth()->user()->role_id === 2) {
                // jika user pengelolahbantuanhukum
                return redirect()->intended('/pengelolahbantuanhukum');
            }
            if (auth()->user()->role_id === 3) {
                // jika user analisishukum
                return redirect()->intended('/analisishukum');
            }
            if (auth()->user()->role_id === 4) {
                // jika user obh
                return redirect()->intended('/obh');
            }
            if (auth()->user()->role_id === 5) {
                // jika user kabag
                return redirect()->intended('/kabag');
            }
            if (auth()->user()->role_id === 6) {
                // jika user kuasahukumpemkot
                return redirect()->intended('/kuasahukumpemkot');
            }
            if (auth()->user()->role_id === 7) {
                // jika user staffdokumentasi
                return redirect()->intended('/staffdokumentasi');
            }
            if (auth()->user()->role_id === 8) {
                // jika user kasubaghukum
                return redirect()->intended('/kasubaghukum');
            }
            if (auth()->user()->role_id === 9) {
                // jika user kepalapublikasi
                return redirect()->intended('/kepalapublikasi');
            }
            if (auth()->user()->role_id === 10) {
                // jika user staffhukum
                return redirect()->intended('/staffhukum');
            } else {
                // jika user tidak memiliki role user
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
        if (auth()->user()->role_id === 2) {
            return redirect('/pengelolahbantuanhukum');
        }
        if (auth()->user()->role_id === 3) {
            return redirect('/analisishukum');
        }
        if (auth()->user()->role_id === 4) {
            return redirect('/obh');
        }
        if (auth()->user()->role_id === 5) {
            return redirect('/kabag');
        }
        if (auth()->user()->role_id === 6) {
            return redirect('/kuasahukumpemkot');
        }
        if (auth()->user()->role_id === 7) {
            return redirect('/staffdokumentasi');
        }
        if (auth()->user()->role_id === 8) {
            return redirect('/kasubaghukum');
        }
        if (auth()->user()->role_id === 9) {
            return redirect('/kepalapublikasi');
        }
        if (auth()->user()->role_id === 10) {
            return redirect('/staffhukum');
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
