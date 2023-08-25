<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterPemohonController extends Controller
{
    public function index()
    {
        return view('LogRegPemohon.register');
    }
}
