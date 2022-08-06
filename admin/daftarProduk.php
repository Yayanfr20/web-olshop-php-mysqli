<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


require 'asset/sistem/koneksi.php';
// konfigurasi pagination
$jumlahProduk = count(query("SELECT * FROM barang"));
$jumlahDataperhalaman = 4;
$jumlahHalaman = ceil($jumlahProduk / $jumlahDataperhalaman);
if (isset($_GET['halaman'])) {
  $halamanAktif = $_GET['halaman'];
} else {
  $halamanAktif = 1;
}

$awalData = ($jumlahDataperhalaman * $halamanAktif) - $jumlahDataperhalaman;



$allproduk = query("SELECT * FROM barang LIMIT $awalData, $jumlahDataperhalaman");

$allkategori = query("SELECT * FROM kategori");

if (isset($_POST['buat'])) {
  if (buatproduk($_POST) > 0) {
    echo "
    <script>
    alert('produk berhasil ditambahkan');
    document.location.href = 'daftarProduk.php';
  </script>";
  } else {
    echo "
    <script>
    alert('produk gagal ditambahkan');
    document.location.href = 'daftarProduk.php';
  </script>";
  }
}


if (isset($_POST['editProduk'])) {
  if (editProduk($_POST) > 0) {
    echo "
    <script>
    alert('produk Berhasil diedit');
    document.location.href = 'daftarProduk.php';
  </script>";
  } else {
    echo "
    <script>
    alert('produk gagal diedit');
    document.location.href = 'daftarProduk.php';
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

</head>

<body style="font-family: 'Inter', sans-serif;">
  <!-- header -->
  <?php include 'asset/include/header.php'; ?>
  <!-- end header -->

  <!-- produk -->
  <?php include 'asset/include/tabledaftarproduk.php'; ?>
  <!-- end produk -->

  <?php include 'asset/include/pagination.php'; ?>


  <!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data">
            <!-- nama produk -->
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama produk:</label>
              <input type="text" class="form-control" id="recipient-name" required name="nama">
            </div>
            <!-- images produk -->
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Images produk:</label>
              <input type="file" class="form-control" id="recipient-name" required name="gambar">
            </div>
            <!-- harga sebelum diskon -->
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Harga sebelum diskon:</label>
              <input type="text" class="form-control" id="recipient-name" required name="harga">
            </div>
            <!-- harga sesudah diskon -->
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Harga sesudah diskon:</label>
              <input type="text" class="form-control" id="recipient-name" required name="hargadiskon">
            </div>
            <!-- kategori produk -->
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Kategori produk:</label>
              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="kategori">
                <?php foreach ($allkategori as $kategori) : ?>
                  <option selected><?= $kategori['kategori']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <!-- deskripsi produk -->
            <div class="mb-3">
              <label for="message-text" class="col-form-label">deskripsi produk:</label>
              <textarea class="form-control" id="message-text" required name="deskripsi"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="buat">buat produk</button>
        </div>
        </form>
      </div>
    </div>
  </div>



  <!-- bootstrap js -->
  <script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>