<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Rute Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');