<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Profile return view ke routes
    public function index(Request $request) {

        $username = $request->session()->get('username');
        $nama_lengkap = $request->session()->get('nama_lengkap');
        $tanggal_lahir = $request->session()->get('tanggal_lahir');
        $nomor_telepon = $request->session()->get('nomor_telepon');
        $email = $request->session()->get('email');
        
        if (!$username) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu');
        }
        
        return view('pages.profile', compact('username', 'nama_lengkap', 'tanggal_lahir', 'nomor_telepon', 'email'));
    }
}
