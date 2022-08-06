<?php
// koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "Yanzshop";

$conn = mysqli_connect($host, $username, $password, $database);

// mengambil barang dari table
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function buatproduk($data)
{
    global $conn;

    $nama = htmlspecialchars($data['nama']);
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $harga = htmlspecialchars($data['harga']);
    $hargadiskon = htmlspecialchars($data['hargadiskon']);
    $kategori = htmlspecialchars($data['kategori']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $query = "INSERT INTO barang VALUES('', '$nama', '$gambar', '$deskripsi', '$kategori', '$harga', '$hargadiskon')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../asset/img/' . $namaFileBaru);

    return $namaFileBaru;
}


function buatKategori($data)
{
    global $conn;

    $kategori = htmlspecialchars($data['namaKategori']);

    $query = "INSERT INTO kategori VALUES('id', '$kategori')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// editKategori 
function editKategori($data)
{
    global $conn;
    $kategori = htmlspecialchars($data["Namekategori"]);
    $id = $data["id"];

    $query = "UPDATE kategori SET kategori = '$kategori' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
