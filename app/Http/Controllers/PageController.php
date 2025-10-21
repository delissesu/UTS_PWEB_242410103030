<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class PageController extends Controller
{
    private $users = [
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

    public function handelLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        foreach($this->users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                return redirect()
            }
        }

    }
}
