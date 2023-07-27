<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: logt.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transportation Management</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
</head>
<body>

	<nav class="navbar">
		<h1 class="logo">FLEET</h1>
		<ul class="nav-links">
			<li class="active"><a href="#home"></a>Home</li>
			<li><a href="displayv.php">Vehicle</a></li>
			<li><a href="displaye.php">Employee</a></li>
			<li><a href="displayt.php">Track</a></li>
			<li><a href="#"></a>Return</li>
			<li><a href="logoutt.php">Logout</a></li>
		</ul>
	</nav>
	<header>
		<div class="header-content">
			<h2>Manage The Transportation Company</h2>
			<div class="line"></div>
			<h1>Track Your Every Move</h1>
			<a href="#" class="ctn">Learn More</a>
		</div>
	</header> 
</body>
</html>
