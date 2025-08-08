<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Halaman utama (daftar produk)
    public function home()
        {
            // Data dummy sementara
            $products = [
                [
                    'id' => 1,
                    'name' => 'Kaos Polos Hitam',
                    'price' => 75000,
                    'image' => 'https://via.placeholder.com/200x200.png?text=Kaos+Hitam'
                ],
                [
                    'id' => 2,
                    'name' => 'Kemeja Putih',
                    'price' => 125000,
                    'image' => 'https://via.placeholder.com/200x200.png?text=Kemeja+Putih'
                ],
                [
                    'id' => 3,
                    'name' => 'Jaket Hoodie',
                    'price' => 150000,
                    'image' => 'https://via.placeholder.com/200x200.png?text=Jaket+Hoodie'
                ],
            ];

            return view('home', compact('products'));
        }


    // Halaman detail produk
    public function detail($id)
    {
        // sementara dummy
        $produk = [
            'id' => $id,
            'nama' => 'Kaos Polos Putih',
            'harga' => 50000,
            'deskripsi' => 'Kaos polos putih bahan katun premium.',
            'gambar' => 'kaos_putih.jpg'
        ];
        return view('detail', compact('produk'));
    }

    // Halaman keranjang
    public function keranjang()
    {
        return view('keranjang');
    }

    // Halaman checkout
    public function checkout($id)
    {
        // Dummy data
        $product = (object) [
            'id' => $id,
            'name' => 'Nasi Goreng Spesial',
            'price' => 25000
        ];

        return view('checkout', compact('product'));
    }

}
