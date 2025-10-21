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

    // Login return view ke routes
    public function login() {
        return view('login');
    }
    
    // Login handler
    public function handelLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        foreach($this->users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                return redirect('dashboard?=username', urlencode($username));
            }
        }
        return back()->with('error', 'username atau password salah');
    }
    
    // Dashboard return view ke routes
    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    // Profile return view ke routes
    public function profile(Request $request) {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    // Pengelolaan return value ke routes
    public function pengelolaan() {
        return view('pengelolaan', ['data' => $this->tabungan]);
    }




}
