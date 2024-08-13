<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*berfungsi supaya harus melalui middleware aut terlebih dahulu untuk bisa 
lanjut ke dashboard */
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('register', [RegisterController::class, 'index'],)->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login',[LoginController::class,'proses'])->name('login.proses');
Route::get('login/keluar',[LoginController::class,'keluar'])->name('login.keluar');