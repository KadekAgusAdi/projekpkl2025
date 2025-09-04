<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NurGrosir</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6; /* Tailwind gray-100 */
        }
        .bg-purple-dark {
            background-color: #3f3286;
        }
        .text-purple-dark {
            color: #3f3286;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #ddd;
        }
        .lotus-icon {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Lotus_flower_logo.svg/1200px-Lotus_flower_logo.svg.png');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.1;
        }
    </style>
</head>
<body>

    <nav class="bg-purple-dark text-white py-2">
        <div class="container mx-auto flex justify-end items-center space-x-4 px-4">
            <div class="flex items-center space-x-2">
                <a href="#" class="hover:text-gray-300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="Instagram" class="w-5 h-5 filter invert">
                </a>
                <a href="#" class="hover:text-gray-300">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/WhatsApp_logo.svg/1200px-WhatsApp_logo.svg.png" alt="WhatsApp" class="w-5 h-5 filter invert">
                </a>
            </div>
            <a href="#" class="hover:text-gray-300 text-sm">Login</a>
            <span class="text-gray-400 text-sm">|</span>
            <a href="#" class="hover:text-gray-300 text-sm">Register</a>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-4">
            <h1 class="text-3xl font-bold text-purple-dark">NurGrosir</h1>
            <nav class="space-x-8">
                <a href="#" class="text-gray-700 hover:text-purple-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-purple-600">
                    Produk <i class="fas fa-chevron-down text-xs"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-purple-600">About</a>
                <a href="#" class="text-gray-700 hover:text-purple-600">Contact</a>
            </nav>
        </div>
    </header>

    <main class="mt-8">

        <section class="text-center px-4">
            <h2 class="text-4xl font-semibold italic text-purple-dark mb-4">Contact Us</h2>
        </section>

        <section class="relative my-8">
            <img src="https://i.imgur.com/your-image-url.png" alt="Toko NurGrosir" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-30"></div>
        </section>

        <section class="container mx-auto px-4 -mt-24 mb-16 relative">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-xl text-center flex flex-col items-center">
                    <div class="w-12 h-12 bg-purple-dark text-white rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.051 4.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L9.586 11H3a1 1 0 010-2h6.586l-4.535-4.535a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                    <p class="text-gray-700">Jln. Kekaran manik gunung Merga Tabanan</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-xl text-center flex flex-col items-center">
                    <div class="w-12 h-12 bg-purple-dark text-white rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    </div>
                    <p class="text-gray-700">NurGrosir@gmail.com</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-xl text-center flex flex-col items-center">
                    <div class="w-12 h-12 bg-purple-dark text-white rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM5 8a.5.5 0 01.5-.5h4.5a.5.5 0 010 1H6a.5.5 0 01-.5-.5zM15 8a.5.5 0 01.5-.5H11a.5.5 0 010 1h4a.5.5 0 01.5-.5zM7.5 12a.5.5 0 01.5-.5h4a.5.5 0 010 1H8a.5.5 0 01-.5-.5z" clip-rule="evenodd"></path></svg>
                    </div>
                    <p class="text-gray-700">0123456789</p>
                </div>
            </div>
        </section>

        <section class="bg-purple-dark bg-opacity-80 py-16 mt-8 relative overflow-hidden">
            <div class="absolute inset-0 lotus-icon"></div>
            <div class="container mx-auto px-4 relative">
                <div class="text-center text-white mb-8">
                    <h3 class="text-3xl font-semibold italic">Order Pakian anda Sekarang</h3>
                </div>
                <div class="flex justify-center">
                    <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-xl">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-gray-700 font-medium mb-1">Nama</label>
                            <input type="text" id="nama" name="nama" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                        <div class="mb-4">
                            <label for="jenis_barang" class="block text-gray-700 font-medium mb-1">Jenis Barang</label>
                            <select id="jenis_barang" name="jenis_barang" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                                <option>Pilih Jenis Barang</option>
                                <option>Baju Anak</option>
                                <option>Dress</option>
                                <option>Kemeja</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="jumlah_barang" class="block text-gray-700 font-medium mb-1">Jumlah Barang</label>
                            <input type="text" id="jumlah_barang" name="jumlah_barang" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                        <div class="mb-6">
                            <label for="bukti_pembayaran" class="block text-gray-700 font-medium mb-1">Bukti Pembayaran</label>
                            <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="bg-purple-600 text-white py-2 px-6 rounded-md hover:bg-purple-700 transition duration-300">
                                Pesan Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>

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
                    <a href="#" class="hover:opacity-75">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" alt="Instagram" class="w-6 h-6 filter invert">
                    </a>
                    <a href="#" class="hover:opacity-75">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/WhatsApp_logo.svg/1200px-WhatsApp_logo.svg.png" alt="WhatsApp" class="w-6 h-6 filter invert">
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center text-xs text-gray-400">
            © 2025 NurGrosir. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
