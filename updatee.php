

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Employee Information</title><br><br>
  </head>
  <body>
    <div class="box">
    <div class="container">
    <form class="" action="" method="post" autocomplete="off">
      <?php
include 'connection.php';

$ids = $_GET['id'];

$showquery= "select * from employee where id = {$ids}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
  
  $idu = $_GET['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $license_number = $_POST['license_number'];
  $mobile_number = $_POST['mobile_number'];
  $address = $_POST['address'];
  $joining_date = $_POST['joining_date'];
  

  $query = "update employee set first_name='$first_name', last_name='$last_name', age='$age', gender='$gender',license_number='$license_number',mobile_number='$mobile_number',address='$address', joining_date='$joining_date' where id=$idu";

  $res = mysqli_query($con,$query);

  if($res){
  ?>
  <?php
}



}
?>
      <div class="top">
            <span>Enter the Employee Details</span><br><br>
        </div>
      <div class="input-field">
      <label for="first_name"></label>
      <input type="text" class="input" placeholder="First Name" name="first_name" id = "first_name" required value="<?php echo $arrdata['first_name']; ?>"> <br>
      <i class='bx bx-user-circle' ></i>
    </div>

      <div class="input-field">
      <label for="last_name"></label>
      <input type="text" class="input" placeholder="Last Name" name="last_name" id = "last_name" required value="<?php echo $arrdata['last_name']; ?>"> <br>
      <i class='bx bx-user-circle' ></i>
    </div>

      <div class="input-field">
      <label for="age"></label>
      <input type="number" class="input" placeholder="Age" name="age" id = "age" required value="<?php echo $arrdata['age']; ?>"> <br>
      <i class='bx bx-calendar-star' ></i>
    </div>

      <div class="input-field">
      <label for="gender"></label>
      <input type="text" class="input" placeholder="Gender" name="gender" id = "gender" required value="<?php echo $arrdata['gender']; ?>"> <br>
      <i class='bx bx-male-female'></i>
    </div>

    <div class="input-field">
      <label for="license_number"></label>
      <input type="text" class="input" placeholder="License Number" name="license_number" id = "license_number" required value="<?php echo $arrdata['license_number']; ?>"> <br>
      <i class='bx bx-id-card'></i>
    </div>

      <div class="input-field">
      <label for="mobile_number"></label>
      <input type="text" class="input" placeholder="Mobile Number" name="mobile_number" id = "mobile_number" required value="<?php echo $arrdata['mobile_number']; ?>"> <br>
      <i class='bx bx-phone'></i>
    </div>

    <div class="input-field">
      <label for="address"></label>
      <input type="text" class="input" placeholder="Address" name="address" id = "address" required value="<?php echo $arrdata['address']; ?>"> <br>
      <i class='bx bx-location-plus'></i>
    </div>

    <div class="input-field">
      <label for="joining_date"></label>
      <input type="date" class="input" placeholder="Joining Date" name="joining_date" id = "joining_date" required value="<?php echo $arrdata['joining_date']; ?>"> <br>
      <i class='bx bx-calendar'></i>
    </div>

      <div class="input-field">
      <button type="submit" class="submit" name="submit">Update</button>
    </div>

    <div class="top">
          <span><a href="displaye.php">Check Details</a></span>
    </div>
</form>
</div>
</div>
  </body>
</html>