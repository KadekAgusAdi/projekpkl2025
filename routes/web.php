<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/produk/{id}', [FrontendController::class, 'detail'])->name('produk.detail');

Route::get('/cart', [FrontendController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [FrontendController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [FrontendController::class, 'remove'])->name('cart.remove');

Route::get('/checkout/{id}', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('/checkout/process', [FrontendController::class, 'processCheckout'])->name('checkout.process');
