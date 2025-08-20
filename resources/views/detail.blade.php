@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image }}" class="img-fluid rounded shadow-sm" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <p class="text-muted">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p>{{ $product->description }}</p>

            {{-- Form Tambah ke Keranjang --}}
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">
                    + Tambah ke Keranjang
                </button>
            </form>

            <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
