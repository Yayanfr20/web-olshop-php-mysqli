<h1 class="text-center text-danger" style="margin-top: 30px;">Massage terbaru</h1>
<div class="container"> 
<?php foreach($allmassage as $massage) : ?>
<a href="" style="text-decoration: none;">
<div class="card">
  <div class="card-header text-white bg-danger d-flex justify-content-between">
    <p><?= $massage['email']; ?></p>
    <p><?= $massage['tanggal']; ?></p>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?= $massage['nama']; ?></p>
      <footer class="blockquote-footer"><?= $massage['massage']; ?></footer>
    </blockquote>
  </div>
</div>
</a>
<?php endforeach; ?>
</div>