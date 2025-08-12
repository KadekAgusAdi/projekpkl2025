<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Checkout</h2>
    <div class="card p-4">
        <h4>{{ $product->name }}</h4>
        <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>

        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            
            <div class="mb-3">
                <label for="payment_method" class="form-label">Metode Pembayaran</label>
                <select class="form-select" name="payment_method" required>
                    <option value="qris">QRIS</option>
                    <option value="midtrans">Payment Gateway (Midtrans)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
        </form>
    </div>
</div>
</body>
</html>
@extends('layouts.app')