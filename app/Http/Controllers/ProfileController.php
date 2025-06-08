<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        // nanti bisa kirim data user dari database
        return view('profileUser.editProfilePage');
    }

    public function destroy()
    {
        // Simulasi penghapusan akun
        // Nanti kalau sudah ada user dan database, bisa pakai:
        // Auth::user()->delete();

        return redirect('/')->with('message', 'Akun berhasil dihapus (simulasi)');
    }

}
