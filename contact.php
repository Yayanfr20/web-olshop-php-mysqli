<?php
// koneksi
require 'asset/sistem/koneksi.php';
$allkategori = query("SELECT * FROM kategori");

if( isset($_POST['submit']) ) {
    if( kirimpesan($_POST) > 0 ) {
        echo"
        <div class='alert alert-primary' role='alert' id='alertPesan'>
          Pesan Anda Berhasil dikirim Tunggu email balasan dari Yanz!
          <button class='btn btn-primary' onclick='alertPesan();'>X</button>
        </div>
        ";
    }else {
        echo"
        <div class='alert alert-danger' role='alert' id='alertPesan'>
          Pesan anda gagal terkirim Coba Periksan koneksi anda!
          <button class='btn btn-danger' onclick='alertPesan();'>X</button>
        </div>
        ";
    }
}
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

<!-- massage -->
<span id="alertpesan" style="display:none;">
    <h1 class="text-success">Berhasil dikirim</h1>
</span>
<span id="alertpesan2" style="display:none;">
    <h1 class="text-danger">Gagal dikirim!</h1>
</span>
<?php include 'asset/include/massage.php' ?>
<!-- end massage -->
<!-- footer -->
<?php include 'asset/include/footer.php'; ?>
<!-- end footer -->
<!-- bootstrap js -->
<script src="asset/js/bootstrap.bundle.min.js"></script>

<script>
    function alertPesan() {
        let alertPesan = document.getElementById('alertPesan');

        alertPesan.setAttribute('style', 'display:none'); 
    }
</script>
</body>
</html>