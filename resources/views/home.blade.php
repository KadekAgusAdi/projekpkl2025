@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Produk</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                        <a href="{{ url('/detail/' . $product['id']) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
