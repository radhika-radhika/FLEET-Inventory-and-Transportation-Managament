<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: indexc.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM ub_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: indexc.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
  </head>
  <body>
    <div class="box">
    <div class="container">
    <form class="" action="" method="post" autocomplete="off">
      <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
        </div>
      <div class="input-field">
      <label for="usernameemail"></label>
      <input type="text" class="input" placeholder="Username" name="usernameemail" id = "usernameemail" required value=""> <br>
      <i class='bx bx-user' ></i>
    </div>
      <div class="input-field">
      <label for="password"></label>
      <input type="password" class="input" placeholder="Password" name="password" id = "password" required value=""> <br>
       <i class='bx bx-lock-alt'></i>
    </div>
      <div class="input-field">
      <button type="submit" class="submit" name="submit">Login</button>
    </div>
      <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
        <div class="top">
          <span>Do not have an account?</span>
          <header><a href="regc.php">Register</a></header>
    </div>
    </form>
  </div>
</div>
  </body>
</html>