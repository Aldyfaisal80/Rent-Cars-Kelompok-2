<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


// Route::get('/', [HomeController::class,'welcome'])->name('welcome');
Route::get('/', [HomeController::class,'welcome'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses');
Route::get('login/keluar', [LoginController::class, 'keluar'])->name('login.keluar');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('users', function () {
        return view('users.index');
    })->name('users');

    Route::get('mobil', function () {
        return view('mobil.index');
    })->name('mobil');

    Route::get('transaksi', function () {
        return view('transaksi.index');
    })->name('transaksi');

    Route::get('laporan', function () {
        return view('laporan.index');
    })->name('laporan');
});

Route::get('dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::get('/about', function () {
    return view('dashboard.about');
})->name('about')->middleware('auth');
