<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'asset/sistem/koneksi.php';

$allkategori = query("SELECT * FROM kategori");

$allpesanan = query("SELECT * FROM pesanan WHERE status = 'done' ORDER BY id DESC ");

if (isset($_POST['deleteRiwayat'])) {
    if (deleteRiwayat($_POST) > 0) {
        echo "
    <script>
    alert('Riwayat pesanan DIhapus');
    document.location.href = 'riwayatPesanan.php';
  </script>";
    } else {
        echo "
    <script>
    alert('Riwayat pesanan gagal dihapus');
    document.location.href = 'riwayatPesanan.php';
  </script>";
    }
}


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
    <style>
        .pesanan {
            width: 90%;
            height: auto;
            border: 2px solid;
            border-radius: 10px;
            padding: 10px;
            box-sizing: border-box;
            margin: 10px;
        }
    </style>
</head>

<body style="font-family: 'Inter', sans-serif;">
    <!-- header -->
    <?php include 'asset/include/header.php'; ?>
    <!-- end header -->

    <!-- pesanan -->
    <br>
    <div class="container mt-5">
        <h1 class="text-center">Riwayat pesanan</h1>
        <br>
        <ul style="list-style: none;">
            <?php foreach ($allpesanan as $pesanan) : ?>
                <?php

                $jumlah = $pesanan['jumlah_pesanan'];
                $harga = $pesanan['harga_pesanan'];
                $total = number_format($harga * $jumlah);

                ?>
                <li class="pesanan text-left">
                    <ul>
                        <li>
                            <h3>Pemesan : <?= $pesanan['nama_penerima']; ?></h3>
                        </li>
                        <li>
                            <p>Barang : <?= $pesanan['barang_pesanan']; ?></p>
                        </li>
                        <li>
                            <p>Harga : Rp.<?= number_format($pesanan['harga_pesanan']); ?></p>
                        </li>
                        <li>
                            <p>Jumlah Pesanan :<?= $pesanan['jumlah_pesanan']; ?></p>
                        </li>
                        <li>
                            <p>Alamat : <?= $pesanan['alamat_penerima']; ?></p>
                        </li>
                        <li>
                            <p>Nomor : <?= $pesanan['nomor_penerima']; ?></p>
                        </li>
                        <li>
                            <p>Total pembayaran : Rp.<?= $total; ?></p>
                        </li>
                        <li>
                            <p>Status : <?= $pesanan['status']; ?></p>
                        </li>
                        <li>
                            <form action="" method="post">
                                <input type="hidden" value="<?= $pesanan['id']; ?>" name="id">
                                <button type="submit" class="btn btn-danger" name="deleteRiwayat">hapus</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <br>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- end pesanan -->


    <!-- bootstrap js -->
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>