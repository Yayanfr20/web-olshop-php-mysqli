<?php
// koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "Yanzshop";

$conn = mysqli_connect($host, $username, $password, $database);

// mengambil barang dari table
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}



function pesan($data) {
    global $conn;
    $img_pesanan = htmlspecialchars($data['img_pesanan']);
    $status = htmlspecialchars($data['status']);
    $barang_pesanan = htmlspecialchars($data['barang_pesanan']);
    $nama_penerima = htmlspecialchars($data['nama_penerima']);
    $alamat_penerima = htmlspecialchars($data['alamat_penerima']);
    $nomor_penerima = htmlspecialchars($data['nomor_penerima']);
    $jumlah_pesanan = htmlspecialchars($data['jumlah_pesanan']);
    $harga_pesanan = htmlspecialchars($data['harga_pesanan']);

    $query = "INSERT INTO pesanan VALUES('','$img_pesanan','$status','$barang_pesanan', '$nama_penerima', '$alamat_penerima', '$nomor_penerima', '$jumlah_pesanan', '$harga_pesanan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function kirimpesan($data) {
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $pesan = htmlspecialchars($data['pesan']);
    $tanggal = htmlspecialchars($data['date']);

    $query = "INSERT INTO massage VALUES('', '$nama', '$email', '$pesan', '$tanggal')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
