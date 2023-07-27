<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cargo Details</title>
	<link rel="stylesheet" href="sty.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

</head>
<body>
	<div class="table">
		<div class="table_header">
			<p>Cargo Details</p>
			<div>
				<input placeholder="Shipment"/>
				<button class="add_new"><a href="indexl.php">+ Add New</a></button>
			</div>
		</div>
		<div class="table_section">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Location</th>
						<th>Stock</th>
						<th>Status</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connect.php';

					$selectquery = "select * from location";

					$query = mysqli_query($con,$selectquery);

					$nums = mysqli_num_rows($query);

					while($res = mysqli_fetch_array($query)){

					?>


						<tr>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['godown']; ?></td>
						<td><?php echo $res['rate']; ?></td>
						<td><?php echo $res['status']; ?></td>
						<td><a href="updatel.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa-solid fa-pen-to-square"></i></a></td>
						<td><a href="deletel.php?idth=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
						</tr>
					<?php

					}

					?>

				</tbody>
			</table>
		</div>
	</div>
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>