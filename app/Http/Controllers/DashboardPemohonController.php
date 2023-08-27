<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPemohonController extends Controller
{
    public function index()
    {
        return view('pemohon.dashboard');
    }
}
