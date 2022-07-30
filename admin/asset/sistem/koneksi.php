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