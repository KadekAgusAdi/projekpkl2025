<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - NurGrosir</title>
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
            <h2 class="text-4xl font-semibold italic text-purple-dark mb-4">About Us</h2>
        </section>

        <section class="relative my-8">
            <img src="https://i.imgur.com/your-image-url.png" alt="Toko NurGrosir" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-30"></div>
        </section>

        <section class="py-16 px-4">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-semibold italic text-purple-dark mb-2">History</h3>
                <p class="text-gray-500 mb-8">ini adalah sejarah dari awal merintis toko</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="flex justify-center">
                        <img src="https://i.imgur.com/your-image-url.png" alt="Interior Toko" class="w-full max-w-lg rounded-lg shadow-lg">
                    </div>
                    <div class="text-left space-y-4 text-gray-700">
                        <p>
                            NurGrosir berdiri pada tahun 2006 di sebuah ruko sederhana di pusat kota. Awalnya, pemiliknya, Ibu Nuranlati, hanya menjual baju bordiran, kemeja anak, dress, kulot, daster, dan kamen pantai kepada teman, tetangga, dan pelanggan sekitar. Karena kualitas bahan yang nyaman dan model yang selalu mengikuti tren, NurGrosir mulai dikenal dari mulut ke mulut hingga menarik pembeli dari luar kota.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-purple-dark text-white py-12 px-4 mt-16">
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
