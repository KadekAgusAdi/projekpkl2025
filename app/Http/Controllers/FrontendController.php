<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function home()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        return view('detail', compact('product'));
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function add($id)
    {
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
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
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'payment_method' => 'required|string',
        ]);

        $product = Product::findOrFail($request->product_id);

        return redirect()->route('home')
            ->with('success', 'Pembayaran untuk ' . $product->name . ' berhasil menggunakan ' . strtoupper($request->payment_method));
    }
}
