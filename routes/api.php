<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\PaymentController;

Route::get('/products', [ProductController::class,'index']);
Route::get('/products/{id}', [ProductController::class,'show']);

// Protected routes: gunakan sanctum/passport/jwt sesuai preferensi
Route::middleware('auth:sanctum')->group(function(){
    Route::post('/cart', [CartController::class,'add']);
    Route::get('/cart', [CartController::class,'index']);
    Route::put('/cart/{id}', [CartController::class,'update']);
    Route::delete('/cart/{id}', [CartController::class,'remove']);

    Route::post('/checkout', [OrderController::class,'checkout']);
    Route::get('/orders/{id}', [OrderController::class,'show']);
});

// Webhook endpoints (public but verify signatures)
Route::post('/webhook/payment-gateway', [PaymentController::class,'gatewayWebhook']);
Route::post('/webhook/qris', [PaymentController::class,'qrisWebhook']);
