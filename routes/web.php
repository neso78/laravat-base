<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
Route::redirect('/home', '/dashboard')->middleware('auth');

Route::get('/', function () {
    return view('layout.app');
});

Route::get('login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('login', LoginController::class)->middleware('throttle:5,1')->name('login.post');

Route::view('register', 'auth.register')->name('register');

Route::post('register', RegisterController::class)->name('register.post');

Route::any('logout',function (){
    Auth::guard('web')->logout(); // Izloguje korisnika
    Session::invalidate(); // Poništava sesiju
    Session::regenerateToken();// Regeneriše CSRF token

    return redirect('/');
})->name('logout');

Route::get('dashboard', function (){
    return view('components.dashboard');
})->middleware('auth')->name('dashboard');


Route::get('customers/create', function (){
   return view('customers.create');
})->name('customers.create');

Route::get('customers', function (){
   return view('customers.index');
})->name('customers.index');

Route::get('activities', function (){
   return view('activities.index');
})->name('activities.index');

Route::get('status', function (){
   return view('status.index');
})->name('status.index');

