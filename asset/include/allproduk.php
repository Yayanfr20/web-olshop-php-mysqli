<h1 class="text-center mt-5">ALL PRODUK</h1>
<div class="garis bg-danger"></div>
<div class="container">
<div class="row mt-4 justify-content-center">
<?php foreach($allproduk as $barang) : ?>
<div class="card mb-3" style="width: 14rem;">
  <a href="detail.php?id=<?= $barang['id']; ?>&kategori=<?= $barang['kategori_barang']; ?>" style="text-decoration:none;">
    <img src="asset/img/<?= $barang['img_barang']; ?>" class="card-img-top p-2" height="150px">
    <div class="card-body">
      <h5 class="card-title text-dark">
      <?php 
            $bataskarakter = 20;
            $nama = $barang['nama_barang'];
            $namalimit = substr($nama, 0, $bataskarakter );
            echo $namalimit;?>... </h5> 
      <p class="card-text text-secondary" style="text-decoration: line-through;">Rp.<?= number_format($barang['harga_barang']); ?></p>
      <p class="card-text fs-5 text-danger">Rp.<?= number_format($barang['hargadiskon_barang']); ?></p>
      </a>
    </div>
</div>
<?php endforeach; ?>
</div>
</div>