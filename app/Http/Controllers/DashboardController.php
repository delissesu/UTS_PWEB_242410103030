<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard return view ke routes
    public function index(Request $request) {
        // Ambil username dari session
        $username = $request->session()->get('username');
        
        // Redirect ke login jika belum login
        if (!$username) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu');
        }
        
        return view('pages.dashboard', compact('username'));
    }
}
