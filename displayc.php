<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee Details</title>
	<link rel="stylesheet" href="sty.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

</head>
<body>
	<div class="table">
		<div class="table_header">
			<p>Employee Details</p>
			<div>
				<input placeholder="Employee"/>
				<button class="add_new"><a href="indexcc.php">+ Add New</a></button>
			</div>
		</div>
		<div class="table_section">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>License No.</th>
						<th>Mobile No.</th>
						<th>Address</th>
						<th>Joining Date</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include 'connect.php';

					$selectquery = "select * from employee";

					$query = mysqli_query($con,$selectquery);

					$nums = mysqli_num_rows($query);

					while($res = mysqli_fetch_array($query)){

					?>


						<tr>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['first_name']; ?></td>
						<td><?php echo $res['last_name']; ?></td>
						<td><?php echo $res['age']; ?></td>
						<td><?php echo $res['gender']; ?></td>
						<td><?php echo $res['license_number']; ?></td>
						<td><?php echo $res['mobile_number']; ?></td>
						<td><?php echo $res['address']; ?></td>
						<td><?php echo $res['joining_date']; ?></td>
						<td><a href="updatec.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa-solid fa-pen-to-square"></i></a></td>
						<td><a href="deletec.php?idth=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
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