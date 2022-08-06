
<?php 

require 'koneksi.php';

function deleteProduk($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
	return mysqli_affected_rows($conn);
}


 ?>