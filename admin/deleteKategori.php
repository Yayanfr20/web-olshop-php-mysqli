<?php 

require 'asset/sistem/deleteKategori.php';


$id = $_GET["id"];

if( deleteKategori($id) > 0 ) {
	echo "
		<script>
			alert('kategori berhasil dihapus!');
			document.location.href = 'daftarKategori.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('kategori gagal ditambahkan!');
			document.location.href = 'daftarKategori.php';
		</script>
	";
}


 ?>