<div class="container" style="width: 70%;">
  
<form action="" method="post">

  <div class="input-group mb-3">
  <img src="asset/img/<?= $barang['img_barang']; ?>" height="80%" class="mt-2">
</div>

<div class="input-group mb-3">
  <input type="hidden" class="form-control" value="<?= $barang['nama_barang']; ?>" aria-label="nophone" aria-describedby="basic-addon1">
  <p><?= $barang['nama_barang']; ?></p>
</div>
<div class="input-group mb-3">
  <input type="hidden" class="form-control" value="proses" aria-label="nama" required>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="nama penerima" aria-label="nama" required>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="alamat lengkap penerima" aria-label="alamat" required>
</div>


<div class="input-group mb-3">
  <input type="number" class="form-control" placeholder="nomor handphone" aria-label="nomor handphone" required>
</div>

<div class="input-group mb-3">
  <a class="btn btn-danger" type="submit" href="buy.php?id=<?= $id; ?>&jumlah=<?php $total = $jumlahProduk - 1; echo $total; ?>">-</a>
  <input type="text" class="form text-center" value="<?php echo $jumlahProduk; ?>" style="width: 50px;">
  <a class="btn btn-danger" type="submit" href="buy.php?id=<?= $id; ?>&jumlah=<?php $total = $jumlahProduk + 1; echo $total; ?>">+</a>
</div>

<div class="input-group mb-3">
  <button class="btn btn-danger">Beli sekarang!</button>
</div>    
</form>
</div>


