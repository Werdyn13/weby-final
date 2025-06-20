<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategorieController;
use App\Models\Kategorie;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'welcome');

Route::get('dashboard', [KategorieController::class, 'index'])->name('dashboard');

Route::view('profile', 'profile')
    ->name('profile');

Route::get('homepage', [HomepageController::class, 'index'])->name('homepage');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('produkt/{id}', [App\Http\Controllers\ProduktController::class, 'show'])->name('produkt.show');
Route::get('produkt/{id}/edit', [App\Http\Controllers\ProduktController::class, 'edit'])->name('produkt.edit');
Route::put('produkt/{id}', [App\Http\Controllers\ProduktController::class, 'update'])->name('produkt.update');
Route::delete('produkt/{id}', [App\Http\Controllers\ProduktController::class, 'destroy'])->name('produkt.destroy');
Route::get('kategorie/{idkategorie}', [App\Http\Controllers\KategorieController::class, 'showProdukty'])->name('kategorie.produkty');
Route::get('/produkty', [ProduktController::class, 'index'])->name('produkty.index');
Route::redirect('/home', '/dashboard');
Route::get('produkt/search', [HomepageController::class, 'search'])->name('produkt.search');
Route::get('kategorie', function () {
    $kategorie = Kategorie::whereNull('parent')->paginate(10);
    $allKategorie = Kategorie::all();
    return view('kategorie', compact('kategorie', 'allKategorie'));
})->name('kategorie');
Route::get('/kategorie/details/{id}', [KategorieController::class, 'show'])->name('kategorie.show');
Route::get('/cart/add/{id}', [ShopController::class, 'add'])->name('cart.add');
Route::get('/cart', [ShopController::class, 'index'])->name('cart.index');
Route::delete('/cart/remove/{id}', [ShopController::class, 'remove'])->name('cart.remove');
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

require __DIR__.'/auth.php';
