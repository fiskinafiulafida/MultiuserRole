<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffHukumController extends Controller
{
    public function index()
    {
        return view('staffHukum.index');
    }
}
