<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
 
require 'asset/sistem/koneksi.php';

$jumlahProduk = count(query("SELECT * FROM barang"));
$jumlahKategori = count(query("SELECT * FROM kategori"));

$jumlahMassage = count(query("SELECT * FROM massage"));
$awalmassage = $jumlahMassage - 1;
$allmassage = query("SELECT * FROM massage LIMIT $awalmassage, 1");
$allkategori = query("SELECT * FROM kategori");

$jumlahpesanan = count(query("SELECT * FROM pesanan"));
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yanz shop | Admin panel</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

	<!-- goole font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Inter', sans-serif;">
<!-- header -->
<?php include 'asset/include/header.php'; ?>
<!-- end header -->


<!-- dashboard -->
<div class="container">
	
<?php include 'asset/include/info.php'; ?>
	
</div>

<!-- end dashboard -->

<!-- massage -->
<?php include 'asset/include/tablemassage.php'; ?>
<!-- end massage -->

<!-- bootstrap js -->
<script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>