<?php

use Illuminate\Support\Facades\Route;

// Login page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Dashboard berdasarkan role (contoh)
Route::get('/dashboard', function () {
    // Ini nanti disesuaikan dengan role user
    return view('admin.dashboard');
})->name('dashboard');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Petugas routes
Route::prefix('petugas')->group(function () {
    Route::get('/dashboard', function () {
        return view('petugas.dashboard');
    })->name('petugas.dashboard');
});

// Peminjam routes
Route::prefix('peminjam')->group(function () {
    Route::get('/dashboard', function () {
        return view('peminjam.dashboard');
    })->name('peminjam.dashboard');
});

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});