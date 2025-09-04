<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - NurGrosir</title>
</head>
<body style="margin:0; font-family: Arial, sans-serif; background-color:#f9fafb;">

    <!-- Navbar -->
    <header style="background-color:#3f3286; color:white; padding:15px 0;">
        <div style="width:90%; max-width:1100px; margin:auto; display:flex; justify-content:space-between; align-items:center;">
            <h1 style="margin:0; font-size:28px;">NurGrosir</h1>
            <nav>
                <a href="#" style="margin:0 12px; text-decoration:none; color:white;">Home</a>
                <a href="#" style="margin:0 12px; text-decoration:none; color:white;">Produk</a>
                <a href="#" style="margin:0 12px; text-decoration:none; color:white;">About</a>
                <a href="#" style="margin:0 12px; text-decoration:none; color:white;">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section style="text-align:center; padding:50px 20px;">
        <h2 style="font-size:36px; color:#3f3286; margin:0;">About Us</h2>
        <p style="color:gray; margin-top:10px;">Kenali lebih dekat NurGrosir</p>
    </section>

    <!-- About Image -->
    <div style="width:90%; max-width:1100px; margin:auto;">
        <img src="{{ asset('images/toko.jpg') }}" alt="Toko NurGrosir" style="width:100%; max-height:400px; object-fit:cover; border-radius:8px;">
    </div>

    <!-- History -->
    <section style="width:90%; max-width:1100px; margin:50px auto; display:flex; gap:30px; align-items:center;">
        <img src="{{ asset('images/interior.jpg') }}" alt="Interior Toko" style="width:50%; border-radius:8px;">
        <div>
            <h3 style="color:#3f3286; margin-top:0;">History</h3>
            <p style="margin-top:10px; line-height:1.6;">
                NurGrosir berdiri pada tahun 2006 di sebuah ruko sederhana di pusat kota.
                Awalnya, pemiliknya, Ibu Nuranlati, hanya menjual baju bordiran, kemeja anak,
                dress, kulot, daster, dan kamen pantai kepada teman, tetangga, dan pelanggan sekitar.
                Karena kualitas bahan yang nyaman dan model yang selalu mengikuti tren,
                NurGrosir mulai dikenal dari mulut ke mulut hingga menarik pembeli dari luar kota.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background-color:#3f3286; color:white; padding:40px 20px; text-align:center; margin-top:60px;">
        <div style="width:90%; max-width:1100px; margin:auto; display:flex; flex-wrap:wrap; justify-content:space-between; gap:20px; text-align:left;">
            <div style="flex:1; min-width:200px;">
                <h4 style="margin-bottom:10px;">NurGrosir</h4>
                <p style="margin:0;">Temukan Pakaian Anda dan Order Sekarang.</p>
            </div>
            <div style="flex:1; min-width:200px;">
                <h4 style="margin-bottom:10px;">Hubungi Kami</h4>
                <p style="margin:0;">abcode@gmail.com</p>
                <p style="margin:0;">+62 838489160514</p>
            </div>
            <div style="flex:1; min-width:200px;">
                <h4 style="margin-bottom:10px;">Media Sosial</h4>
                <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width:25px; height:25px; margin-right:10px;"></a>
                <a href="#"><img src="{{ asset('images/wa.jpg') }}" alt="WhatsApp" style="width:25px; height:25px;"></a>
            </div>
        </div>
        <div style="margin-top:20px; font-size:12px; color:#bbb;">
            © 2025 NurGrosir. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
