<?php

namespace App\Http\Controllers;

use App\Models\LoginPemohon;
use Illuminate\Http\Request;

class RegisterPemohonController extends Controller
{
    public function index()
    {
        return view('LogRegPemohon.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'                  => 'required|max:255',
            'jenisKelamin'          => 'required',
            'nik'                   => 'required',
            'noHp'                  => 'required',
            'alamat'                => 'required',
            'email'                 => 'required|email:dns|unique:users',
            'password'              => 'required|min:3|max:255',
            'usia'                  => 'required',
            'pekerjaan'             => 'required',
            'pendidikanTerakhir'    => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        LoginPemohon::create($validatedData);
        // untuk mengetahui registrasi berhasil 
        $request->session()->flash('Success', 'Registrasi Anda Berhasil');
        return redirect('/LoginPemohon');
    }
}
