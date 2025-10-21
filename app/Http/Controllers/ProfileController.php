<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Profile return view ke routes
    public function index(Request $request) {
        // Ambil semua data user dari session
        $username = $request->session()->get('username');
        $namaLengkap = $request->session()->get('nama_lengkap');
        $tanggalLahir = $request->session()->get('tanggal_lahir');
        $nomorTelepon = $request->session()->get('nomor_telepon');
        $email = $request->session()->get('email');


        if (!$username) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu');
        }
        
        return view('pages.profile', compact('username', 'namaLengkap', 'tanggalLahir', 'nomorTelepon', 'email'));
    }
}
