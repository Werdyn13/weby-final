<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProduktController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('homepage', [HomepageController::class, 'index'])->name('homepage');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/produkty', [ProduktController::class, 'index'])->name('produkty.index');

require __DIR__.'/auth.php';
