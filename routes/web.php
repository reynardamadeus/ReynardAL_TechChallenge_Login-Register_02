<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'show')->name('home');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerPost')->name('register.post');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginPost')->name('login.post');
    ROute::get('/logout', 'logout')->name('logout');
});
