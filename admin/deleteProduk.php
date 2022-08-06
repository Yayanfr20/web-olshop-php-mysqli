<?php 

require 'asset/sistem/deleteProduk.php';


$id = $_GET["id"];

if( deleteProduk($id) > 0 ) {
	echo "
		<script>
			alert('Produk berhasil dihapus!');
			document.location.href = 'daftarProduk.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Produk gagal ditambahkan!');
			document.location.href = 'daftarProduk.php';
		</script>
	";
}


 ?>
