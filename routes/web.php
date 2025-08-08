<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/produk/{id}', [FrontendController::class, 'detail'])->name('produk.detail');
Route::get('/keranjang', [FrontendController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
