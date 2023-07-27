<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM ub_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: logc.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cargo Management</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
</head>
<body>

	<nav class="navbar">
		<h1 class="logo">FLEET</h1>
		<ul class="nav-links">
			<li class="active"><a href="#home"></a>Home</li>
			<li><a href="displayl.php">Location</a></li>
			<li><a href="displayc.php">Employee</a></li>
			<li><a href="displayct.php">Track</a></li>
			<li><a href="logoutc.php">Logout</a></li>
		</ul>
	</nav>
	<header>
		<div class="header-content">
			<h2>Manage The Cargo Company</h2>
			<div class="line"></div>
			<h1>Track Your Every Shipment</h1>
			<a href="#" class="ctn">Learn More</a>
		</div>
	</header> 
</body>
</html>
