<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - NurGrosir</title>
</head>
<body bgcolor="#f9fafb">

  <!-- Navbar -->
  <table width="100%" bgcolor="#3f3286" cellpadding="10">
    <tr>
      <!-- Sisi Kiri: Logo Instagram dan WhatsApp -->
      <td align="left" width="20%">
        <a href="#"><img src="images/instagram.png" width="25" height="25" style="vertical-align:middle;"></a>
        <a href="#"><img src="images/wa.jpg" width="25" height="25" style="vertical-align:middle;"></a>
      </td>

      <!-- Tengah: Menu Navigasi -->
      <td align="center" width="60%">
        <a href="#" style="color:white; text-decoration:none; margin:0 15px;">Home</a>
        <a href="#" style="color:white; text-decoration:none; margin:0 15px;">Produk</a>
        <a href="#" style="color:white; text-decoration:none; margin:0 15px;">About</a>
        <a href="#" style="color:white; text-decoration:none; margin:0 15px;">Contact</a>
      </td>

      <!-- Kanan: Login dan Register -->
      <td align="right" width="20%">
        <a href="#" style="color:white; text-decoration:none; margin:0 10px;">Login</a>
        <a href="#" style="color:white; text-decoration:none; margin:0 10px;">Register</a>
      </td>
    </tr>
  </table>

  <!-- Judul -->
  <h2 align="center" style="color:#3f3286;">Contact Us</h2>

  <!-- Hero Image -->
  <div align="center">
    <img src="images/toko.jpg" alt="Toko" width="100%" height="550">
    <br><br>
  </div>
  <br>

  <!-- Contact Cards -->
  <table width="100%" cellpadding="20">
    <tr align="center">
      <td bgcolor="#e6e6fa">
        <img src="images/location.png" width="30" height="30"><br>
        Jln. Kekeran Manik Gunung<br>Marga Tabanan
      </td>
      <td bgcolor="#e6e6fa">
        <img src="images/email.png" width="30" height="30"><br>
        NurGrosir@gmail.com
      </td>
      <td bgcolor="#e6e6fa">
        <img src="images/wa.jpg" width="30" height="30"><br>
        0123456789
      </td>
    </tr>
  </table>
  <br><br>

  <!-- Order Section -->
  <div align="center">
    <h2 style="color:#3f3286;">Order Pakaian Anda Sekarang</h2>
    <form action="#" method="post" enctype="multipart/form-data">
      <table align="center" cellpadding="10" bgcolor="#e6e6fa" border="1">
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Jenis Barang</td>
          <td>
            <select name="jenis_barang">
              <option value="">Pilih Jenis Barang</option>
              <option value="baju_bordiran">Baju Bordiran</option>
              <option value="kemeja_anak">Kemeja Anak</option>
              <option value="dress">Dress</option>
              <option value="kulot">Kulot</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Jumlah Barang</td>
          <td><input type="number" name="jumlah_barang"></td>
        </tr>
        <tr>
          <td>Bukti Pembayaran</td>
          <td><input type="file" name="bukti_pembayaran"></td>
        </tr>
        <tr>
          <td colspan="2" align="right">
            <button type="submit">Pesan Sekarang</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
  <br><br>

  <!-- Footer -->
  <table width="100%" bgcolor="#3f3286" cellpadding="20">
    <tr align="center" style="color:white;">
      <td>
        <h4>NurGrosir</h4>
        Temukan Pakaian Anda dan Order Sekarang.
      </td>
      <td>
        <h4>Hubungi Kami</h4>
        abcode@gmail.com <br>
        +62 838489160514
      </td>
      <td>
        <h4>Media Sosial</h4>
        <a href="#"><img src="images/instagram.png" width="25" height="25"></a>
        <a href="#"><img src="images/wa.jpg" width="25" height="25"></a>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="center" style="color:#bbb; font-size:12px;">
        © 2025 NurGrosir. All Rights Reserved.
      </td>
    </tr>
  </table>

</body>
</html>
