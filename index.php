<?php
// koneksi
require 'asset/sistem/koneksi.php';
$jumlahbarang = count(query("SELECT * FROM barang"));

$awalnews = $jumlahbarang - 4;
$news = query("SELECT * FROM barang LIMIT $awalnews, 4");

$allproduk = query("SELECT * FROM barang");

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
            padding:3px;
        }
    </style>
</head>
<body style="font-family: 'Inter', sans-serif;">

<!-- header -->
<?php include 'asset/include/header.php'; ?>
<!-- end header -->

<!-- courcel -->
<?php include 'asset/include/courcel.php'; ?>
<!-- end courcel -->


<!-- news -->
<?php include 'asset/include/news.php'; ?>
<!-- end news -->


<!-- all produk -->
<?php include 'asset/include/allproduk.php'; ?>
<!-- all produk -->
<!-- bootstrap js -->
<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>