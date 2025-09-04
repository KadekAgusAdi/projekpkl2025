<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NurGrosir Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-purple-dark {
      background-color: #3f3286;
    }
    .text-purple-dark {
      color: #3f3286;
    }
  </style>
</head>
<body class="bg-gray-50 font-sans">

  <!-- Navbar -->
  <nav class="bg-purple-dark text-white">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">
      <!-- Kiri: Sosmed -->
      <div class="flex items-center space-x-3">
        <a href="#">
          <img src="images/instagram.png" alt="Instagram" class="w-6 h-6">
        </a>
        <a href="#">
          <img src="images/wa.jpg" alt="WhatsApp" class="w-6 h-6">
        </a>
      </div>

      <!-- Tengah: Menu -->
      <div class="space-x-6 text-sm font-medium">
        <a href="#" class="hover:text-gray-300">Home</a>
        <a href="#" class="hover:text-gray-300">Produk</a>
        <a href="#" class="hover:text-gray-300">About</a>
        <a href="#" class="hover:text-gray-300">Contact</a>
      </div>

      <!-- Kanan: Login/Register -->
      <div class="space-x-3 text-sm">
        <a href="#" class="hover:text-gray-300">Login</a>
        <span>|</span>
        <a href="#" class="hover:text-gray-300">Register</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <header class="relative">
    <img src="images/toko.jpg" alt="Toko NurGrosir" class="w-full h-[450px] object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center text-white">
      <h1 class="text-4xl font-bold">Selamat Datang di NurGrosir</h1>
      <p class="mt-2 text-lg">Temukan Pakaian Anda dan Order Sekarang</p>
    </div>
  </header>

  <!-- Contact Section -->
  <section class="py-12">
    <h2 class="text-center text-2xl font-bold text-purple-dark mb-8">Contact Us</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto px-4">
      <div class="bg-gray-100 p-6 text-center rounded shadow">
        <img src="images/location.png" alt="Lokasi" class="w-8 h-8 mx-auto mb-3">
        <p>Jln. Kekeran Manik Gunung<br>Marga Tabanan</p>
      </div>
      <div class="bg-gray-100 p-6 text-center rounded shadow">
        <img src="images/email.png" alt="Email" class="w-8 h-8 mx-auto mb-3">
        <p>NurGrosir@gmail.com</p>
      </div>
      <div class="bg-gray-100 p-6 text-center rounded shadow">
        <img src="images/wa.jpg" alt="WhatsApp" class="w-8 h-8 mx-auto mb-3">
        <p>0123456789</p>
      </div>
    </div>
  </section>

  <!-- Order Section -->
  <section class="py-12">
    <h2 class="text-center text-2xl font-bold text-purple-dark mb-6">Order Pakaian Anda Sekarang</h2>
    <form action="#" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto bg-gray-100 p-6 rounded shadow">
      <div class="mb-4">
        <label class="block mb-1">Nama</label>
        <input type="text" name="nama" class="w-full border px-3 py-2 rounded">
      </div>
      <div class="mb-4">
        <label class="block mb-1">Jenis Barang</label>
        <select name="jenis_barang" class="w-full border px-3 py-2 rounded">
          <option value="">Pilih Jenis Barang</option>
          <option value="baju_bordiran">Baju Bordiran</option>
          <option value="kemeja_anak">Kemeja Anak</option>
          <option value="dress">Dress</option>
          <option value="kulot">Kulot</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block mb-1">Jumlah Barang</label>
        <input type="number" name="jumlah_barang" class="w-full border px-3 py-2 rounded">
      </div>
      <div class="mb-4">
        <label class="block mb-1">Bukti Pembayaran</label>
        <input type="file" name="bukti_pembayaran" class="w-full">
      </div>
      <div class="text-right">
        <button type="submit" class="bg-purple-dark text-white px-4 py-2 rounded hover:bg-purple-800">Pesan Sekarang</button>
      </div>
    </form>
  </section>

  <!-- Footer -->
  <footer class="bg-purple-dark text-white py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 text-center md:text-left">
      <div>
        <h4 class="font-bold text-lg mb-2">NurGrosir</h4>
        <p>Temukan Pakaian Anda dan Order Sekarang.</p>
      </div>
      <div>
        <h4 class="font-bold text-lg mb-2">Hubungi Kami</h4>
        <p>abcode@gmail.com</p>
        <p>+62 838489160514</p>
      </div>
      <div>
        <h4 class="font-bold text-lg mb-2">Media Sosial</h4>
        <div class="flex justify-center md:justify-start space-x-4 mt-2">
          <a href="#"><img src="images/instagram.png" alt="Instagram" class="w-6 h-6"></a>
          <a href="#"><img src="images/wa.jpg" alt="WhatsApp" class="w-6 h-6"></a>
        </div>
      </div>
    </div>
    <div class="mt-6 text-center text-sm text-gray-300">
      © 2025 NurGrosir. All Rights Reserved.
    </div>
  </footer>

</body>
</html>
