<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;

// Route Default (Redirect ke halaman Kelas)
Route::get('/', function () {
    return redirect()->route('kelas.index');
});

// ==========================================
// ROUTE PROFILE (Lama - Tetap Dipertahankan)
// ==========================================
Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'index'])->name('profile.show');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// ==========================================
// ROUTE BARU: KELAS & USER
// ==========================================

// Route untuk Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create'); // <--- BARU
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');       // <--- BARU
Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show');

// Route untuk User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');