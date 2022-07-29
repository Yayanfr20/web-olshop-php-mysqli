<h1 class="text-center mt-5"><?= $keyword; ?></h1>
<div class="garis bg-danger"></div>
<div class="row mt-4 justify-content-around">
<?php foreach($allproduk as $barang) : ?>
<div class="card mb-2" style="width: 14rem;">
  <a href="detail.php?id=<?= $barang['id']; ?>" style="text-decoration:none;">
    <img src="asset/img/<?= $barang['img_barang']; ?>" class="card-img-top p-2" height="150px">
    <div class="card-body">
      <h5 class="card-title text-dark">
      <?php 
            $bataskarakter = 20;
            $nama = $barang['nama_barang'];
            $namalimit = substr($nama, 0, $bataskarakter );
            echo $namalimit;?>... </h5> 
      <p class="card-text text-secondary" style="text-decoration: line-through;">Rp.<?= $barang['harga_barang']; ?></p>
      <p class="card-text fs-5 text-danger">Rp.<?= $barang['hargadiskon_barang']; ?></p>
      </a>
    </div>
</div>
<?php endforeach; ?>
</div>