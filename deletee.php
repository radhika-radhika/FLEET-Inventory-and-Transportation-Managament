<?php

include 'connection.php';

$id = $_GET['idth'];

$deletequery = "delete from employee where id=$id";

$query = mysqli_query($con,$deletequery);

if($query){
	?>

	<script>
		alert("Deleted Successfully");
	</script>
	<?php
}

header('location:displaye.php');

?>