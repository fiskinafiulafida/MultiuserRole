<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class OperatorController extends Controller
{
    public function index()
    {
        $berita = Berita::count();

        return view('operator.index', compact('berita'));
    }
}
