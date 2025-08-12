<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Keranjang Belanja</h2>

    @if(session('cart') && count(session('cart')) > 0)
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $grandTotal = 0; @endphp
                @foreach(session('cart') as $id => $item)
                    @php 
                        $total = $item['price'] * $item['quantity']; 
                        $grandTotal += $total;
                    @endphp
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h4>Total Belanja: Rp {{ number_format($grandTotal, 0, ',', '.') }}</h4>

        <a href="{{ route('checkout', 1) }}" class="btn btn-primary mt-3">Lanjutkan ke Checkout</a>
    @else
        <div class="alert alert-warning mt-3">Keranjang masih kosong.</div>
    @endif
</div>
</body>
</html>
