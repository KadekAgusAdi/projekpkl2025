<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/produk/{id}', [FrontendController::class, 'detail'])->name('produk.detail');

Route::get('/cart', [FrontendController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [FrontendController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [FrontendController::class, 'remove'])->name('cart.remove');

Route::get('/checkout/{id}', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('/checkout/process', [FrontendController::class, 'processCheckout'])->name('checkout.process');


// Prefix admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
    Route::post('/produk/store', [ProductController::class, 'store'])->name('produk.store');
    Route::get('/detail/{id}', [ProductController::class, 'show'])->name('produk.show');
});
