<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard return view ke routes
    public function index(Request $request) {
        // usn dari session
        $username = $request->session()->get('username');
        
        return view('pages.dashboard', compact('username'));
    }
}
