<?php
include 'connect.php';

if(isset($_POST['submit'])){
  
  $journey = $_POST['journey'];
  $sdate = $_POST['sdate'];
  $rdate = $_POST['rdate'];
  $source = $_POST['source'];
  $dest = $_POST['dest'];
  $cargo = $_POST['cargo'];
  $number = $_POST['number'];
  $name = $_POST['name'];
  

  $insertquery = "INSERT INTO track(journey,sdate,rdate,source,dest,cargo,number,name) VALUES('$journey','$sdate','$rdate','$source','$dest','$cargo','$number','$name')";

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
    <title>Transportation Information</title><br><br>
  </head>
  <body>
    <div class="box">
    <div class="container">
    <form class="" action="" method="post" autocomplete="off">
      <div class="top">
            <span>Enter the shipment Details</span><br><br>
        </div>
      <div class="input-field">
      <label for="journey"></label>
      <input type="text" class="input" placeholder="Shipment ID" name="journey" id = "journey" required value=""> <br>
      <i class='bx bx-user-circle' ></i>
    </div>

    <div class="input-field">
      <label for="sdate"></label>
      <input type="date" class="input" placeholder="Source Date" name="sdate" id = "sdate" required value=""> <br>
      <i class='bx bx-calendar'></i>
    </div>

    <div class="input-field">
      <label for="rdate"></label>
      <input type="date" class="input" placeholder="Destination Date" name="rdate" id = "rdate" required value=""> <br>
      <i class='bx bx-calendar'></i>
    </div>

    <div class="input-field">
      <label for="source"></label>
      <input type="text" class="input" placeholder="Source" name="source" id = "source" required value=""> <br>
      <i class='bx bx-location-plus'></i>
    </div>


    <div class="input-field">
      <label for="dest"></label>
      <input type="text" class="input" placeholder="Destination" name="dest" id = "dest" required value=""> <br>
      <i class='bx bx-location-plus'></i>
    </div>

    <div class="input-field">
      <label for="cargo"></label>
      <input type="text" class="input" placeholder="Transport Company Name" name="cargo" id = "cargo" required value=""> <br>
      <i class='bx bx-user-circle' ></i>
    </div>


    <div class="input-field">
      <label for="number"></label>
      <input type="text" class="input" placeholder="Vehicle Number" name="number" id = "number" required value=""> <br>
      <i class='bx bx-id-card'></i>
    </div>


      <div class="input-field">
      <label for="name"></label>
      <input type="text" class="input" placeholder="Name" name="name" id = "name" required value=""> <br>
      <i class='bx bx-user-circle' ></i>
    </div>


      <div class="input-field">
      <button type="submit" class="submit" name="submit">Save</button>
    </div>

    <div class="top">
          <span><a href="displayct.php">Check Details</a></span>
    </div>
</form>
</div>
</div>
  </body>
</html>