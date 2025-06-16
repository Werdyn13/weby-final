<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategorieController;

Route::view('/', 'welcome');

Route::get('dashboard', [KategorieController::class, 'index'])->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('homepage', [HomepageController::class, 'index'])->name('homepage');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('produkt/{id}', [App\Http\Controllers\ProduktController::class, 'show'])->name('produkt.show');
Route::get('kategorie/{idkategorie}', [App\Http\Controllers\KategorieController::class, 'showProdukty'])->name('kategorie.produkty');
Route::redirect('/home', '/dashboard');

require __DIR__.'/auth.php';
