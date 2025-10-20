<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $user = [
        ['username' => 'naveria', 'password' => 'naver12'],
        ['username' => 'liliaveria', 'password => lixx19']
    ];

    private $tabungan = [
        ['nama' => 'Naveria', 'saldo' => '9000000'],
        ['nama' => 'Liliaveria', 'saldo' => '6000000']
    ];

    public function login() {
        return view('login');
    }
}
