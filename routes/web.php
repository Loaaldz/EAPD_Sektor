<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\VerifiedController;

Route::get('/', function () {
    return view('Layout.login');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/dashboard/detail1/{NRK}', [DashboardController::class, 'detail']);
Route::get('/sektormampang', [SektorController::class, 'sektormampang']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/verifikasi', [VerifikasiController::class, 'verifikasi']);
Route::get('/verifikasi/detail2/{nrk}', [VerifikasiController::class, 'detail']);
Route::get('/verifikasi/detail2/updatedata/{id}', [VerifikasiController::class, 'edit']);
Route::get('/verified', [VerifiedController::class, 'verified']);
Route::get('/verified/detail3/{nrk}', [VerifiedController::class, 'detail']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
