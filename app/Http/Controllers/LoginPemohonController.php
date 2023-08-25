<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPemohonController extends Controller
{
    public function login()
    {
        return view('LogRegPemohon.login');
    }
}
