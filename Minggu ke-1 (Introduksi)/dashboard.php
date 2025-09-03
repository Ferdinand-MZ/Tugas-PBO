<?php
// dashboard.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Universitas</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 0; background: #f5f5f5; }
    header { background: #2c3e50; color: white; padding: 15px; text-align: center; }
    nav { background: #34495e; padding: 10px; }
    nav a { color: white; margin: 0 10px; text-decoration: none; }
    .container { padding: 20px; }
    .card {
      background: white; padding: 20px; margin: 15px 0;
      border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <header>
    <h1>Dashboard Universitas</h1>
    <p>Selamat datang di Sistem Informasi Kampus</p>
  </header>

  <nav>
    <a href="#">Beranda</a>
    <a href="#">Mahasiswa</a>
    <a href="#">Dosen</a>
    <a href="#">Mata Kuliah</a>
  </nav>

  <div class="container">
    <div class="card">
      <h2>Jumlah Mahasiswa</h2>
      <p>2,345 Mahasiswa aktif</p>
    </div>
    <div class="card">
      <h2>Jumlah Dosen</h2>
      <p>120 Dosen tetap</p>
    </div>
    <div class="card">
      <h2>Kegiatan Terbaru</h2>
      <p>Seminar Nasional Teknologi Informasi - 25 Agustus 2025</p>
    </div>
  </div>
</body>
</html>
