<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $users = [
        [
            'username' => 'naveria',
            'password' => 'naver12',
            'nama_lengkap' => 'Naveria Anggraeni',
            'tanggal_lahir' => '2003-05-15',
            'nomor_telepon' => '081234567890',
            'email' => 'naveria@gmail.com'
        ],
        [
            'username' => 'liliaveria',
            'password' => 'lixx19',
            'nama_lengkap' => 'Liliaveria Putri',
            'tanggal_lahir' => '2002-08-20',
            'nomor_telepon' => '082345678901',
            'email' => 'liliaveria@gmail.com'
        ]
    ];

    // Login return view ke routes
    public function login() {
        return view('pages.login');
    }
    
    // Login handler
    public function handleLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        foreach($this->users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                // Simpan semua data user ke session (kecuali password)
                $request->session()->put('username', $username);
                $request->session()->put('nama_lengkap', $user['nama_lengkap']);
                $request->session()->put('tanggal_lahir', $user['tanggal_lahir']);
                $request->session()->put('nomor_telepon', $user['nomor_telepon']);
                $request->session()->put('email', $user['email']);
                return redirect('/dashboard');
            }
        }
        return back()->with('error', 'username atau password salah');
    }
    
    // Logout handler
    public function logout(Request $request) {
        $request->session()->forget('username');
        $request->session()->flush();
        return redirect('/')->with('success', 'Berhasil logout');
    }
}
