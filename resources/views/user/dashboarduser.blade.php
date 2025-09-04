<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Layout */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background: #f4f6f8;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background: #3f3286;
            color: #fff;
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: #5a47b5;
        }

        /* Main Content */
        .main-content {
            margin-left: 220px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar {
            background: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar h3 {
            color: #3f3286;
        }

        .user-info {
            color: #555;
        }

        /* Content */
        .content {
            padding: 20px;
        }

        .content h1 {
            margin-bottom: 10px;
            color: #3f3286;
        }

        .cards {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            flex: 1;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        .card h2 {
            font-size: 28px;
            color: #3f3286;
        }

        .card p {
            margin-top: 8px;
            color: #555;
        }

        /* Table */
        .table-container {
            margin-top: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background: #3f3286;
            color: #fff;
        }

        table tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>NurGrosir</h2>
        <ul>
            <li><a href="#">🏠 Dashboard</a></li>
            <li><a href="#">📦 Produk</a></li>
            <li><a href="#">🛒 Transaksi</a></li>
            <li><a href="#">⚙️ Pengaturan</a></li>
            <li><a href="#">🚪 Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <div class="navbar">
            <h3>Dashboard User</h3>
            <div class="user-info">
                <span>👤 User</span>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h1>Selamat Datang di Dashboard</h1>
            <p>Ini adalah halaman utama untuk user.</p>

            <!-- Cards -->
            <div class="cards">
                <div class="card">
                    <h2>10</h2>
                    <p>Produk Tersedia</p>
                </div>
                <div class="card">
                    <h2>5</h2>
                    <p>Transaksi Selesai</p>
                </div>
                <div class="card">
                    <h2>2</h2>
                    <p>Pesanan Pending</p>
                </div>
            </div>

            <!-- Table -->
            <div class="table-container">
                <h2>Daftar Produk</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Kemeja Anak</td>
                            <td>Rp 50.000</td>
                            <td>Tersedia</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Dress Muslimah</td>
                            <td>Rp 120.000</td>
                            <td>Tersedia</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Kulot Casual</td>
                            <td>Rp 75.000</td>
                            <td>Habis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>
</html>
