<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('homepage', [HomepageController::class, 'index'])->name('homepage');

require __DIR__.'/auth.php';
