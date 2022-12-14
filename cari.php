<?php
// koneksi
require 'asset/sistem/koneksi.php';
$keyword = $_GET['cari'];

$allproduk = query("SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%' OR
info_barang LIKE '%$keyword%' OR
kategori_barang LIKE '%$keyword%' OR
harga_barang LIKE '%$keyword%'
");
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
<!-- barang -->
<?php include 'asset/include/cariproduk.php';  ?>
<!-- end barang -->

<!-- footer -->
<?php include 'asset/include/footer.php'; ?>
<!-- end footer -->
<!-- bootstrap js -->
<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>