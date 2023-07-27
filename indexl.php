<?php
include 'connect.php';

if(isset($_POST['submit'])){
  
  $godown = $_POST['godown'];
  $rate = $_POST['rate'];
  $status = $_POST['status'];
 
  $insertquery = "INSERT INTO location(godown,rate,status) VALUES('$godown','$rate','$status')";

  $res = mysqli_query($con,$insertquery);

  if($res){
  ?>
  <?php
}



}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styll.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inventory Information</title><br><br>
  </head>
  <body>
    <div class="box">
    <div class="container">
    <form class="" action="" method="post" autocomplete="off">
      <div class="top">
            <span>Enter the Cargo Details</span><br><br>
        </div>

    <div class="input-field">
      <label for="godown"></label>
      <input type="text" class="input" placeholder="Location" name="godown" id = "godown" required value=""> <br>
      <i class='bx bx-location-plus'></i>
    </div>

    <div class="input-field">
      <label for="rate"></label>
      <input type="text" class="input" placeholder="Cargo Stock" name="rate" id = "rate" required value=""> <br>
      <i class='bx bx-id-card'></i>
    </div>

    <div class="input-field">
      <label for="status"></label>
      <input type="text" class="input" placeholder="Status" name="status" id = "status" required value=""> <br>
      <i class='bx bx-calendar'></i>
    </div>

      <div class="input-field">
      <button type="submit" class="submit" name="submit">Save</button>
    </div>

    <div class="top">
          <span><a href="displayl.php">Check Details</a></span>
    </div>
</form>
</div>
</div>
  </body>
</html>