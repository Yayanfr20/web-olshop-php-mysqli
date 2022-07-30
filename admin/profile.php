<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
 

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yanz shop | profile</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

	<!-- goole font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Inter', sans-serif;">
<!-- header -->
<?php include 'asset/include/header.php'; ?>
<!-- end header -->




<!-- bootstrap js -->
<script src="../asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>