<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabunganController extends Controller
{
    private $tabungan = [
        ['hari' => 'Senin', 'nama' => 'Naveria', 'saldo' => '9000000'],
        ['hari' => 'Selasa', 'nama' => 'Liliaveria', 'saldo' => '6000000'],
        ['hari' => 'Rabu', 'nama' => 'Naveria', 'saldo' => '5000000'],
        ['hari' => 'Kamis', 'nama' => 'Liliaveria', 'saldo' => '7500000']
    ];

    // Return value ke routes
    public function index(Request $request) {
        // Ambil username dari session
        $username = $request->session()->get('username');
        
        if (!$username) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu');
        }
        
        return view('pages.pengelolaan', ['data' => $this->tabungan]);
    }
}
