<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = Berita::count();

        return view('home', compact('berita'));
    }
    public function berita()
    {
        $berita = Berita::latest()->get();

        return view('berita', compact('berita'));
    }
}
