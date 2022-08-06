<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'asset/sistem/koneksi.php';

$allkategori = query("SELECT * FROM kategori");

$allmassage = query("SELECT * FROM massage  ORDER BY id DESC ");

if (isset($_POST['hapusMassage'])) {
    if (hapusMassage($_POST) > 0) {
        echo "
    <script>
    alert('massage delete ');
    document.location.href = 'massage.php';
  </script>";
    } else {
        echo "
    <script>
    alert('massage gagal dihapus');
    document.location.href = 'massage.php';
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
        .massage {
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
        <h1 class="text-center">Daftar pesanan</h1>
        <br>
        <ul style="list-style: none;">
            <?php foreach ($allmassage as $massage) : ?>
                <li class="massage text-left">
                    <ul>
                        <li>
                            <h3>Pengirim : <?= $massage['nama']; ?></h3>
                        </li>
                        <li>
                            <p>Pesan : <?= $massage['massage']; ?></p>
                        </li>
                        <li>
                            <p>Email : <?= $massage['email']; ?></p>
                        </li>
                        <li>
                            <p>Tanggal Pengiriman : <?= $massage['tanggal']; ?></p>
                        </li>
                        <li style="display: flex;">
                            <form action="" method="post">
                                <input type="hidden" value="<?= $massage['id']; ?>" name="id">
                                <button type="submit" class="btn btn-danger m-2" name="hapusMassage">Delete</button>
                            </form> <a href="mailto:<?= $massage['email']; ?>" class="btn btn-primary m-2">chat</a>
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