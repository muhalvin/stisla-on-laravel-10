<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('forgot', function () {
    return view('auth.forgot');
});

Route::get('dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('ecommerce-dashboard', function () {
    return view('pages.ecommerce-dashboard');
})->name('ecommerce-dashboard');