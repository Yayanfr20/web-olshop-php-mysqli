<?php 
session_start();
require 'asset/sistem/koneksi.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}


}

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yanz shop | Login Admin Panel</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

	<!-- goole font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <style>
    	body input {
    		width: 300px;
    		height: 30px;
    		border-radius: 10px;
    		margin-top: 20px;
    	}
    </style>
</head>
<body style="font-family: 'Inter', sans-serif;" class="bg-danger">
<form action="" method="post">
<div class="container d-flex flex-column justify-content-center align-items-center text-center" style="margin-top: 10%;">
	<h1 class="text-white">Yanzshop</h1>
	<h3 class="text-white">Login admin panel</h3>
	<input type="text" name="username" placeholder="username"  class="text-center">
	<input type="password" name="password" placeholder="password"  class="text-center">		
	<input type="checkbox" name="remember" id="remember">
	<label for="remember">Remember me</label>
	<button type="submit" class="btn btn-secondary mt-4" name="login">Login</button>
</div>
</form>
<!-- bootstrap js -->
<script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>