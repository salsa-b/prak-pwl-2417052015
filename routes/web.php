<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'index'])->name('profile.show');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');