<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: indexc.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM ub_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO ub_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleee.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registration</title>
  </head>
  <body>
    <div class="box">
    <div class="container">
    <form class="" action="" method="post" autocomplete="off">
      <div class="top">
            <span>Do not have an account?</span>
            <header>Register</header>
        </div>
      <div class="input-field">
      <label for="name"></label>
      <input type="text" class="input" placeholder="Name" name="name" id = "name" required value=""> <br>
      <i class='bx bx-user-circle' ></i>
    </div>

      <div class="input-field">
      <label for="username"></label>
      <input type="text" class="input" placeholder="Username" name="username" id = "username" required value=""> <br>
      <i class='bx bx-user' ></i>
    </div>

      <div class="input-field">
      <label for="email"></label>
      <input type="email" class="input" placeholder="E-Mail" name="email" id = "email" required value=""> <br>
      <i class='bx bx-mail-send' ></i>
    </div>

      <div class="input-field">
      <label for="password"></label>
      <input type="password" class="input" placeholder="Password" name="password" id = "password" required value=""> <br>
      <i class='bx bx-lock-alt'></i>
    </div>

      <div class="input-field">
      <label for="confirmpassword"></label>
      <input type="password" class="input" placeholder="Confirm Password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <i class='bx bx-lock-alt'></i>
    </div>

      <div class="input-field">
      <button type="submit" class="submit" name="submit">Register</button>
    </div>
  <div class="top">
          <span>Have an account?</span>
          <header><a href="logc.php">Login</a></header>
    </div>
</form>
</div>
</div>
  </body>
</html>