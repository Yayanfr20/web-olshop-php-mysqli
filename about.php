<?php

require 'asset/sistem/koneksi.php';

$allkategori = query("SELECT * FROM kategori");

$aboutas = query("SELECT * FROM about");
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


<!-- about Yanz shop -->
<div class="container text-center " >


<h1 class="fs-3 text-danger" style="text-decoration:underline;">ABOUT YANZ SHOP</h1>
<br>
<?php foreach($aboutas as $about) : ?>
<h2><span class="fs-5"><?= $about['information']; ?></span></h2>
<br>
<h2>Metode Pembayaran <br><span><?= $about['pembayaran']; ?></span><br><img src="asset/img/<?= $about['img_pembayaran']; ?>" alt=""></h2>
<br>
<h2>Jasa Pengiriman <br><span><?= $about['pengiriman']; ?></span><br><img src="asset/img/<?= $about['img_pengiriman']; ?>" alt=""></h2>

<?php  endforeach; ?>
<!-- end Yanz shop -->
</div>
<!-- bootstrap js -->
<script src="asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>