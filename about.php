<?php

require 'asset/sistem/koneksi.php';

$allkategori = query("SELECT * FROM kategori");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yanz shop</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <!-- goole font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <style>
        .batas {
            width:100%;
            height:30px;
            background-color:#eaeaea;
        }
        .garis {
            width:10%;
            height:5px;
            margin-left:20px;
        }
        .card:hover {
            box-shadow:3px 3px 3px grey;
        }
    </style>
</head>
<body style="font-family: 'Inter', sans-serif;">

<!-- header -->
<?php include 'asset/include/header.php'; ?>
<!-- end header -->


<!-- about Yanz shop -->
<div class="container" >
<h1 class=" fs-2 text-dark">Tentang Yanzshop</h1>
<hr>
<p style="text-align: left;">
   Yanzshop adalah toko buku online terpercaya yang menyediakan pilihan buku terbaru, terbaik, dan terlengkap dari semua penerbit di Indonesia. Jenis buku yang dimaksudkan meliputi, novel, kumpulan cerpen, kumpulan puisi, ensiklopedia, komik, board book, dan toy book. Kategorinya meliputi buku Agama & Spiritualitas, buku Bahasa, Pendidikan & Penunjang Pelajaran, buku Biografi & Memoar, buku Anak, buku Impor, buku Ekonomi, Bisnis & Keuangan, buku Fiksi, buku Hiburan, Seni & Budaya, buku Kesehatan & Kecantikan, buku Komik & Novel Grafis, buku Komputer & Teknologi, buku Kuliner, buku Non-Fiksi, buku Parenting & Keluarga, buku Perjalanan, buku Psikologi & Pengembangan Diri, buku Sains & Alam, buku Sastra & Filsafat, buku Sejarah, Sosial, Politik & Hukum, dan masih banyak yang lainnya dengan harga yang menarik.
</p>
<br>
<h1 class=" fs-2 text-dark">Komitmen Kami</h1>
<hr>
<p style="text-align: left;">
    Semua buku yang tersedia di Yanzshop rata-rata minimal lebih murah 15%  dari harga yang biasa kamu temukan di toko buku konvensional. Diskon tambahan juga dapat berlaku apabila terdapat pre order, promo dari penerbit, dan promo yang diadakan Yanzshop.
</p>
<br>
<h1 class=" fs-2 text-dark">Kemudahan Metode Pembayaran</h1>
<p style="text-align: left;">
    Yanzshop sebagai toko buku online memberikan fasilitas pelayanan terbaik dengan berbagai pilihan pembayaran terpercaya. Kamu bisa beli buku online dengan memilih satu dari enam metode pembayaran paling mudah yang tersedia di Yanzshop untuk setiap transaksi pemesananmu.
</p>
<ol>
    <li>
        Kartu kredit
    </li>
    <li>
        Internet banking
    </li>
    <li>
        Uang elektronik (Mandiri e-cash, CIMB Clicks, BCA Klik Pay)
    </li>
    <li>
        Transfer antarbank ke rekening BCA dan Mandiri
    </li>
    <li>
        Indomaret
    </li>
    <li>
        Go-Pay
    </li>
</ol>
<!-- end Yanz shop -->
</div>

<!-- footer -->
<?php include 'asset/include/footer.php'; ?>
<!-- end footer -->
<!-- bootstrap js -->
<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>