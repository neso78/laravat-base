<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('layout.index');
});

Route::get('login', function (){
    return view('auth.login');
})->name('login');

Route::post('login', LoginController::class)->middleware('throttle:5,1')->name('login.post');

Route::get('dashboard', function (){
    return view('components.dashboard');
})->middleware('auth')->name('dashboard');

Route::any('logout',function (){
    Auth::guard('web')->logout(); // Izloguje korisnika
    Session::invalidate(); // Poništava sesiju
    Session::regenerateToken();// Regeneriše CSRF token

    return redirect('/');
})->name('logout');

Route::view('register', 'auth.register')->name('register');

Route::post('register', RegisterController::class)->name('register.post');
