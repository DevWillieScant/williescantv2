<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

    Route::get('/', [Main::class, 'index']);
    Route::get('/login', [Main::class, 'login'])->middleware('alreadyLoggedIn');
    Route::get('/register', [Main::class, 'register'])->middleware('alreadyLoggedIn');
    Route::post('/registration', [Main::class, 'registration'])->name('registration');
    Route::post('/loginuser', [Main::class, 'loginuser'])->name('loginuser');
    Route::get('/dashboard', [Main::class, 'dashboard'])->middleware('isLoggedIn');
    Route::get('/logout', [Main::class, 'logout']);
    Route::get('/verify-email/{verification_code}', [Main::class, 'verify_email'])->name('verify_email');