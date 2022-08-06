
<?php 

require 'koneksi.php';

function deleteKategori($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM kategori WHERE id = $id");
	return mysqli_affected_rows($conn);
}


 ?>