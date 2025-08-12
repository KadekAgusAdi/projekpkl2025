<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private $products = [
        1 => [
            'id' => 1,
            'name' => 'Kaos Polos Hitam',
            'price' => 75000,
            'image' => 'https://via.placeholder.com/200x200.png?text=Kaos+Hitam'
        ],
        2 => [
            'id' => 2,
            'name' => 'Kemeja Putih',
            'price' => 125000,
            'image' => 'https://via.placeholder.com/200x200.png?text=Kemeja+Putih'
        ],
        3 => [
            'id' => 3,
            'name' => 'Jaket Hoodie',
            'price' => 150000,
            'image' => 'https://via.placeholder.com/200x200.png?text=Jaket+Hoodie'
        ],
    ];

    public function home()
    {
        $products = $this->products;
        return view('home', compact('products'));
    }

    public function detail($id)
    {
        if (!isset($this->products[$id])) {
            abort(404);
        }
        $product = $this->products[$id];
        return view('detail', compact('product'));
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function add($id)
    {
        if (!isset($this->products[$id])) {
            abort(404);
        }

        $product = $this->products[$id];
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Produk ditambahkan ke keranjang!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Produk dihapus dari keranjang!');
    }

    public function checkout($id)
    {
        $product = Product::findOrFail($id);
        return view('checkout', compact('product'));
    }

    public function processCheckout(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'payment_method' => 'required|string',
        ]);

        // Ambil data produk
        $product = Product::findOrFail($request->product_id);

        // Simulasi proses pembayaran (dummy)
        return redirect()->route('home')->with('success', 'Pembayaran untuk ' . $product->name . ' berhasil menggunakan ' . strtoupper($request->payment_method));
    }
}

