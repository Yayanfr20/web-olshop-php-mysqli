<div class="container" style="width: 70%;">

  <form action="" method="post">

    <div class="input-group mb-3">
      <img src="asset/img/<?= $barang['img_barang']; ?>" height="80%" class="mt-2">
    </div>

    <div class="input-group mb-3">
      <!-- img_pesanan -->
      <input type="hidden" class="form-control" value="<?= $barang['img_barang']; ?>" aria-label="nophone" aria-describedby="basic-addon1" name="img_pesanan">
      <p><?= $barang['nama_barang']; ?></p>
    </div>
    <div class="input-group mb-3">
      <!-- status -->
      <input type="hidden" class="form-control" value="proses" aria-label="nama" required name="status">
      <!-- barang_pesanan -->
      <input type="hidden" class="form-control" value="<?= $barang['nama_barang']; ?>" aria-label="nama" required name="barang_pesanan">
    </div>

    <div class="input-group mb-3">
      <!-- nama_penerima -->
      <input type="text" class="form-control" placeholder="nama penerima" aria-label="nama" required name="nama_penerima">
    </div>

    <div class="input-group mb-3">
      <!-- alamat_penerima -->
      <input type="text" class="form-control" placeholder="alamat lengkap penerima" aria-label="alamat" required name="alamat_penerima">
    </div>

    <!-- nomor_penerima -->
    <label for="basic-url" class="form-label">Gunakan 62 bukan 0 !!!</label>
    <div class="input-group mb-3">
      <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="nomor handphone" name="nomor_penerima" required>
    </div>

    <div class="input-group mb-3">
      <a class="btn btn-danger" type="submit" href="buy.php?id=<?= $id; ?>&jumlah=<?php $total = $jumlahProduk - 1;
                                                                                  echo $total; ?>">-</a>
      <!-- jumlah_pesanan -->
      <input type="text" class="form text-center" value="<?php echo $jumlahProduk; ?>" style="width: 50px;" name="jumlah_pesanan">
      <a class="btn btn-danger" type="submit" href="buy.php?id=<?= $id; ?>&jumlah=<?php $total = $jumlahProduk + 1;
                                                                                  echo $total; ?>">+</a>
    </div>
    <div class="input-group mb-3">
      <!-- harga_pesanan -->
      <input type="hidden" class="form-control" value="<?= $barang['hargadiskon_barang']; ?>" aria-label="alamat" required name="harga_pesanan">
    </div>

    <div class="input-group mb-3">
      <button class="btn btn-danger" name="pesan">Beli sekarang!</button>
    </div>
  </form>
</div>