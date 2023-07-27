<?php
include 'connection.php';

if(isset($_POST['submit'])){
  
  $number = $_POST['number'];
  $model = $_POST['model'];
  $capacity = $_POST['capacity'];
  $reg_date = $_POST['reg_date'];
  $exp_date = $_POST['exp_date'];
  

  $insertquery = "INSERT INTO vehicle(number,model,capacity,reg_date,exp_date) VALUES('$number','$model','$capacity','$reg_date','$exp_date')";

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
    <link rel="stylesheet" href="styl.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Vehicle Information</title><br><br>
  </head>
  <body>
    <div class="box">
    <div class="container">
    <form class="" action="" method="post" autocomplete="off">
      <div class="top">
            <span>Enter the Vehicle Details</span><br><br>
        </div>
      <div class="input-field">
      <label for="number"></label>
      <input type="text" class="input" placeholder="Registration Number" name="number" id = "number" required value=""> <br>
      <i class='bx bx bx-id-card' ></i>
    </div>

      <div class="input-field">
      <label for="model"></label>
      <input type="text" class="input" placeholder="Vehicle model" name="model" id = "model" required value=""> <br>
      <i class='bx bx-user-circle' ></i>
    </div>

      <div class="input-field">
      <label for="capacity"></label>
      <input type="number" class="input" placeholder="Vehicle capacity" name="capacity" id = "capacity" required value=""> <br>
      <i class='bx bx-location-plus' ></i>
    </div>

    <div class="input-field">
      <label for="reg_date"></label>
      <input type="date" class="input" placeholder="Registration Date" name="reg_date" id = "reg_date" required value=""> <br>
      <i class='bx bx-calendar'></i>
    </div>

    <div class="input-field">
      <label for="exp_date"></label>
      <input type="date" class="input" placeholder="Expiry Date" name="exp_date" id = "exp_date" required value=""> <br>
      <i class='bx bx-calendar'></i>
    </div>

      <div class="input-field">
      <button type="submit" class="submit" name="submit">Save</button>
    </div>

    <div class="top">
          <span><a href="displayv.php">Check Details</a></span>
    </div>
</form>
</div>
</div>
  </body>
</html>