<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::latest()->get();
        return view('profile.index', compact('profile'));
    }

    public function edit(User $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, User $profile)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required',
        ]);

        //get data User by ID
        $profile = User::findOrFail($profile->id);

        if ($request->file('gambarProfile') == "") {

            $profile->update([
                'name'          => $request->name,
                'email'         => $request->email,
            ]);
        } else {

            //hapus old image
            Storage::disk('local')->delete('public/image/' . $profile->gambarProfile);

            //upload new image
            $gambarProfile = $request->file('gambarProfile');
            $gambarProfile->storeAs('public/image', $gambarProfile->hashName());

            $profile->update([
                'gambarProfile'     => $gambarProfile->hashName(),
                'name'              => $request->name,
                'email'             => $request->email,
            ]);
        }

        if ($profile) {
            //redirect dengan pesan sukses
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
