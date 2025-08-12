<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/produk/{id}', [FrontendController::class, 'detail'])->name('produk.detail');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout/{id}', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
