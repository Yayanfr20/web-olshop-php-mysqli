<?php
require 'asset/sistem/koneksi.php';

$id = $_GET['id'];
$kategori = $_GET['kategori'];

$barang = query("SELECT * FROM barang WHERE id = $id")[0];
$allkategori = query("SELECT * FROM kategori");

$allproduk = query("SELECT * FROM barang WHERE kategori_barang  LIKE '%$kategori%'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|Yanz shop</title>
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

<!-- detail barang -->
<?php include 'asset/include/detailbarang.php'; ?>
<!-- end detail barang -->
<div class="batas"></div>

<!-- satu kategori -->
<div class="garis"></div>
<?php include 'asset/include/kategorilainnya.php'; ?>
<!-- end satu kategori -->

<!-- footer -->
<?php include 'asset/include/footer.php'; ?>
<!-- end footer -->
<!-- bootstrap js -->
<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>