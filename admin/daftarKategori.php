<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


require 'asset/sistem/koneksi.php';
// konfigurasi pagination
$jumlahProduk = count(query("SELECT * FROM kategori"));
$jumlahDataperhalaman = 3;
$jumlahHalaman = ceil($jumlahProduk / $jumlahDataperhalaman);
if (isset($_GET['halaman'])) {
  $halamanAktif = $_GET['halaman'];
} else {
  $halamanAktif = 1;
}

$awalData = ($jumlahDataperhalaman * $halamanAktif) - $jumlahDataperhalaman;



$allkategoriname = query("SELECT * FROM kategori LIMIT $awalData, $jumlahDataperhalaman");
$allkategori = query("SELECT * FROM kategori");

if (isset($_POST['buat'])) {
  if (buatkategori($_POST) > 0) {
    echo "
    <script>
    alert('Kategori berhasil ditambahkan');
    document.location.href = 'daftarKategori.php';
  </script>";
  } else {
    echo "
    <script>
    alert('Kategori gagal ditambahkan');
    document.location.href = 'daftarKategori.php';
  </script>";
  }
}

if (isset($_POST['editKategori'])) {
  if (editKategori($_POST) > 0) {
    echo "
    <script>
    alert('edit Kategori Berhasil!!!');
    document.location.href = 'daftarKategori.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('edit Kategori Gagal!!!');
    document.location.href = 'daftarKategori.php';
    </script>
    ";
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

</head>

<body style="font-family: 'Inter', sans-serif;">
  <!-- header -->
  <?php include 'asset/include/header.php'; ?>
  <!-- end header -->

  <!-- produk -->
  <?php include 'asset/include/tabledaftarkategori.php'; ?>
  <!-- end produk -->

  <?php include 'asset/include/pagination.php'; ?>


  <!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data">
            <!-- nama kategori -->
            <div class="mb-3">
              <label for="kategori" class="col-form-label">Nama Kategori:</label>
              <input type="text" class="form-control" id="kategori" required name="namaKategori">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="buat">buat kategori</button>
            </div>
          </form>
        </div>
      </div>
    </div>



    <!-- bootstrap js -->
    <script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>