<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NurGrosir Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .bg-purple-dark {
            background-color: #3f3286;
        }
        .text-purple-dark {
            color: #3f3286;
        }
        .testimonial-card {
            background-color: #f3f4f6; /* abu-abu muda */
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-purple-dark text-white py-2">
        <div class="container mx-auto flex justify-end items-center space-x-4 px-4">
            <div class="flex items-center space-x-2">
                <a href="#">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-5 h-5">
                </a>
                <a href="#">
                    <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-5 h-5">
                </a>
            </div>
            <a href="#" class="hover:text-gray-300 text-sm">Login</a>
            <span class="text-gray-400 text-sm">|</span>
            <a href="#" class="hover:text-gray-300 text-sm">Register</a>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-4">
            <h1 class="text-3xl font-bold text-purple-dark">NurGrosir</h1>
            <nav class="space-x-8">
                <a href="#" class="text-gray-700 hover:text-purple-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-purple-600">Produk</a>
                <a href="#" class="text-gray-700 hover:text-purple-600">About</a>
                <a href="#" class="text-gray-700 hover:text-purple-600">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero -->
        <section class="relative">
            <img src="{{ asset('images/toko.jpg') }}" alt="Toko NurGrosir" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-30 flex items-center justify-center">
                <div class="text-center text-white">
                    <h2 class="text-4xl font-semibold italic">Selamat Datang Di NurGrosir</h2>
                    <p class="text-2xl mt-2 italic font-light">Temukan Gaya Berpakaian Anda</p>
                    <p class="mt-4 max-w-xl mx-auto text-sm">
                        Kami menghadirkan beragam koleksi pakaian yang dirancang untuk menunjang penampilanmu dari gaya kasual harian hingga outfit spesial yang membuatmu tampil lebih percaya diri.
                    </p>
                </div>
            </div>
        </section>

        <!-- Kategori -->
        <section class="bg-purple-dark py-12">
            <div class="container mx-auto px-4 text-center">
                <h3 class="text-2xl text-white font-semibold mb-8 italic">Telusuri Berdasarkan Kategori</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="relative bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('images/kategori1.jpg') }}" alt="Baju Anak" class="w-full h-48 object-cover rounded-md">
                        <div class="absolute bottom-6 left-6 bg-white bg-opacity-70 text-purple-dark px-3 py-1 rounded-full text-xs font-bold">Baju Anak</div>
                    </div>
                    <div class="relative bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('images/kategori2.jpg') }}" alt="Dress" class="w-full h-48 object-cover rounded-md">
                        <div class="absolute bottom-6 left-6 bg-white bg-opacity-70 text-purple-dark px-3 py-1 rounded-full text-xs font-bold">Dress</div>
                    </div>
                    <div class="relative bg-white p-4 rounded-lg shadow-md">
                        <img src="{{ asset('images/kategori3.jpg') }}" alt="Kemeja Anak" class="w-full h-48 object-cover rounded-md">
                        <div class="absolute bottom-6 left-6 bg-white bg-opacity-70 text-purple-dark px-3 py-1 rounded-full text-xs font-bold">Kemeja Anak</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- History -->
        <section class="py-16 px-4">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-semibold italic text-purple-dark mb-2">History</h3>
                <p class="text-gray-500 mb-8">Ini adalah sejarah dari awal merintis toko</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/history.jpg') }}" alt="Interior Toko" class="w-full max-w-lg rounded-lg shadow-lg">
                    </div>
                    <div class="text-left space-y-4 text-gray-700">
                        <p>
                            NurGrosir berdiri pada tahun 2006 di sebuah ruko sederhana di pusat kota. Awalnya, pemiliknya, Ibu Nuranlati, hanya menjual baju bordiran, kemeja anak, dress, kulot, daster, dan kamen pantai kepada teman, tetangga, dan pelanggan sekitar.
                        </p>
                        <p>
                            Karena kualitas bahan yang nyaman dan model yang selalu mengikuti tren, NurGrosir mulai dikenal dari mulut ke mulut hingga menarik pembeli dari luar kota.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="bg-purple-dark py-16 px-4">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-semibold italic text-white mb-2">Testimonial</h3>
                <p class="text-white text-opacity-80 mb-8">Ini adalah beberapa review dari customer</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach (['testi1.jpg','testi2.jpg','testi3.jpg'] as $testi)
                    <div class="bg-white p-6 rounded-lg shadow-lg relative testimonial-card">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('images/'.$testi) }}" alt="User" class="w-10 h-10 rounded-full">
                        </div>
                        <div class="mt-4 p-4 rounded-lg bg-gray-100">
                            <p class="text-sm italic text-gray-700">
                                Belanja di sini benar-benar memuaskan. Barang datang tepat waktu, packaging rapi, bahan adem dan nyaman dipakai. Pelayanan juga sangat responsif. Saya pasti akan belanja lagi.
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Location -->
        <section class="py-16 px-4">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-semibold italic text-purple-dark mb-2">Location</h3>
                <div class="mt-8 rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15783.315102559556!2d115.17188175!3d-8.4751307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21f8a85f4f89d%3A0x7d6c62c0b0a88062!2sSelerbawak%2C%20Tabanan%2C%20Bali!5e0!3m2!1sen!2sid!4v1615367540203!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-purple-dark text-white py-12 px-4">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h4 class="text-xl font-bold mb-2">NurGrosir</h4>
                <p class="text-sm">Temukan Pakaian Anda dan Order Sekarang.</p>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-2">Hubungi Kami</h4>
                <p class="text-sm">abcode@gmail.com</p>
                <p class="text-sm">+62 838489160514</p>
            </div>
            <div>
                <h4 class="text-xl font-bold mb-2">Media Sosial</h4>
                <div class="flex justify-center md:justify-start space-x-4 mt-2">
                    <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-6 h-6"></a>
                    <a href="#"><img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-6 h-6"></a>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center text-xs text-gray-400">
            &copy; 2025 NurGrosir. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
