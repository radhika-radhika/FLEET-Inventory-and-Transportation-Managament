<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shipment Details</title>
	<link rel="stylesheet" href="sty.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

</head>
<body>
	<div class="table">
		<div class="table_header">
			<p>Shipment Details</p>
			<div>
				<input placeholder="Shipment"/>
				<button class="add_new"><a href="track.php">+ Add New</a></button>
			</div>
		</div>
		<div class="table_section">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Shipment ID</th>
						<th>Source Date</th>
						<th>Destination Date</th>
						<th>Source</th>
						<th>Destination</th>
						<th>Transport Comapany</th>
						<th>Vehicle Number</th>
						<th>Driver Name</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connect.php';

					$selectquery = "select * from track";

					$query = mysqli_query($con,$selectquery);

					$nums = mysqli_num_rows($query);

					while($res = mysqli_fetch_array($query)){

					?>


						<tr>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['journey']; ?></td>
						<td><?php echo $res['sdate']; ?></td>
						<td><?php echo $res['rdate']; ?></td>
						<td><?php echo $res['source']; ?></td>
						<td><?php echo $res['dest']; ?></td>
						<td><?php echo $res['cargo']; ?></td>
						<td><?php echo $res['number']; ?></td>
						<td><?php echo $res['name']; ?></td>
						<td><a href="updatect.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa-solid fa-pen-to-square"></i></a></td>
						<td><a href="deletect.php?idth=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
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