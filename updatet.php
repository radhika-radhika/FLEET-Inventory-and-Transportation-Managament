

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Transportation Information</title><br><br>
  </head>
  <body>
    <div class="box">
    <div class="container">
    <form class="" action="" method="post" autocomplete="off">
      <?php
include 'connection.php';

$ids = $_GET['id'];

$showquery= "select * from track where id = {$ids}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
  
  $idu = $_GET['id'];
  $journey = $_POST['journey'];
  $sdate = $_POST['sdate'];
  $rdate = $_POST['rdate'];
  $source = $_POST['source'];
  $dest = $_POST['dest'];
  $cargo = $_POST['cargo'];
  $number = $_POST['number'];
  $name = $_POST['name'];
  

  $query = "update employee set journey='$journey', sdate='$sdate', rdate='$rdate', source='$source',  dest='$dest', cargo='$cargo', number='$number', name='$name' where id=$idu";

  $res = mysqli_query($con,$query);

  if($res){
  ?>
  <?php
}



}
?>
      <div class="top">
            <span>Enter the Shipment Details</span><br><br>
        </div>
      <div class="input-field">
      <label for="journey"></label>
      <input type="text" class="input" placeholder="Jouney ID" name="journey" id = "journey" required value="<?php echo $arrdata['journey']; ?>"> <br>
      <i class='bx bx-user-circle' ></i>
    </div>

    <div class="input-field">
      <label for="sdate"></label>
      <input type="date" class="input" placeholder="Source Date" name="sdate" id = "sdate" required value="<?php echo $arrdata['sdate']; ?>"> <br>
      <i class='bx bx-calendar'></i>
    </div>

    <div class="input-field">
      <label for="rdate"></label>
      <input type="date" class="input" placeholder="Destination Date" name="rdate" id = "rdate" required value="<?php echo $arrdata['rdate']; ?>"> <br>
      <i class='bx bx-calendar'></i>
    </div>

    <div class="input-field">
      <label for="source"></label>
      <input type="text" class="input" placeholder="Source" name="source" id = "source" required value="<?php echo $arrdata['source']; ?>"> <br>
      <i class='bx bx-location-plus'></i>
    </div>


    <div class="input-field">
      <label for="dest"></label>
      <input type="text" class="input" placeholder="Destination" name="dest" id = "dest" required value="<?php echo $arrdata
      ['dest']; ?>"> <br>
      <i class='bx bx-location-plus'></i>
    </div>

    <div class="input-field">
      <label for="cargo"></label>
      <input type="text" class="input" placeholder="Cargo Company Name" name="cargo" id = "cargo" required value="<?php echo $arrdata['cargo']; ?>"> <br>
      <i class='bx bx-user-circle' ></i>
    </div>


    <div class="input-field">
      <label for="number"></label>
      <input type="text" class="input" placeholder="Vehicle Number" name="number" id = "number" required value="<?php echo $arrdata['number']; ?>"> <br>
      <i class='bx bx-id-card'></i>
    </div>


      <div class="input-field">
      <label for="name"></label>
      <input type="text" class="input" placeholder="Name" name="name" id = "name" required value="<?php echo $arrdata['name']; ?>"> <br>
      <i class='bx bx-user-circle' ></i>
    </div>
      <div class="input-field">
      <button type="submit" class="submit" name="submit">Update</button>
    </div>

    <div class="top">
          <span><a href="displayt.php">Check Details</a></span>
    </div>
</form>
</div>
</div>
  </body>
</html>