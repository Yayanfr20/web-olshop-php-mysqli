<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php if( $halamanAktif > 1 ) : ?>
    <li class="page-item">
      <a class="page-link" href="?halaman=<?= $halamanAktif - 1;  ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
  <?php endif; ?>
    <?php for($i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
      <?php if( $i == $halamanAktif ) : ?>
        <li class="page-item active"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
      <?php else :?>
         <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
    <?php endif; ?>
   
  <?php endfor; ?>
  <?php if($halamanAktif < $jumlahHalaman ) : ?>
    <li class="page-item">
      <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  <?php endif; ?>
  </ul>
</nav>