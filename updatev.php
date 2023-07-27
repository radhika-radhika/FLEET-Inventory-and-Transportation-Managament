

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
      <?php
include 'connection.php';

$ids = $_GET['id'];

$showquery= "select * from vehicle where id = {$ids}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
  
  $idu = $_GET['id'];
  $number = $_POST['number'];
  $model = $_POST['model'];
  $capacity = $_POST['capacity'];
  $reg_date = $_POST['reg_date'];
  $exp_date = $_POST['exp_date'];
  

  $query = "update vehicle set number='$number', model='$model', capacity='$capacity', reg_date='$reg_date', exp_date='$exp_date' where id=$idu";

  $res = mysqli_query($con,$query);

  if($res){
  ?>
  <?php
}



}
?>
      <div class="top">
            <span>Enter the Vehicle Details</span><br><br>
        </div>
      <div class="input-field">
      <label for="number"></label>
      <input type="text" class="input" placeholder="Registration Number" name="number" id = "number" required value="<?php echo $arrdata['number']; ?>"> <br>
      <i class='bx bx bx-id-card' ></i>
    </div>

      <div class="input-field">
      <label for="model"></label>
      <input type="text" class="input" placeholder="Vehicle model" name="model" id = "model" required value="<?php echo $arrdata['model']; ?>"> <br>
      <i class='bx bx-user-circle' ></i>
    </div>

      <div class="input-field">
      <label for="capacity"></label>
      <input type="number" class="input" placeholder="Vehicle capacity" name="capacity" id = "capacity" required value="<?php echo $arrdata['capacity']; ?>"> <br>
      <i class='bx bx-location-plus' ></i>
    </div>

    <div class="input-field">
      <label for="reg_date"></label>
      <input type="date" class="input" placeholder="Registration Date" name="reg_date" id = "reg_date" required value="<?php echo $arrdata['reg_date']; ?>"> <br>
      <i class='bx bx-calendar'></i>
    </div>

    <div class="input-field">
      <label for="exp_date"></label>
      <input type="date" class="input" placeholder="Expiry Date" name="exp_date" id = "exp_date" required value="<?php echo $arrdata['exp_date']; ?>"> <br>
      <i class='bx bx-calendar'></i>
    </div>
      <div class="input-field">
      <button type="submit" class="submit" name="submit">Update</button>
    </div>

    <div class="top">
          <span><a href="displayv.php">Check Details</a></span>
    </div>
</form>
</div>
</div>
  </body>
</html>