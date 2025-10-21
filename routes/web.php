<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'login']);
Route::get('/login', [PageController::class,'handleLogin']);
Route::get('/dashboard', [PageController::class,'dashboard']);
Route::get('/profile', [PageController::class,'profile']);
Route::get('pengelolaan', [PageController::class,'pengelolaan']);
