<?php 

require_once('store.php');
$mystore->login();
$mystore->signup();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My store log in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../src/css/style.css">
</head>
<body>
<div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Don't have an account?</p>
          <p>Sign up to save all your graph.</p>
          <button id="switch1">Sign Up</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Have an account?</p>
          <p>Log in to see all your collection.</p>
          <a href="index.php" id="switch2">LOG IN</a>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
    <form action="" method="POST">
      <div class="login">
        <h2>LOG IN</h2>
        <div class="inputbox">
        <small class="text-danger"><?php echo isset($_SESSION['errorMsg'])?$_SESSION['errorMsg']:"";?></small>
          <input type="text" name="username" placeholder="  EMAIL">
          <input type="password" name="password" placeholder="  PASSWORD">
        </div>
        <p>FORGET PASSWORD?</p>
       
      <center>  <button  type="submit" name="submit">LOG IN</button> </center>
    </form>
      </div>

      <div class="signup hide">
        <form method="POST">
        <h2>SIGN UP</h2>
        <div class="inputbox">
          <input type="text" name="fullname" placeholder="  FULLNAME">
          <input type="text" name="email" placeholder="  EMAIL">
          <input type="password" name="password" placeholder="  PASSWORD">
        </div>
        <button type="submit" name="signup" >SIGN UP</button>
        </form>
      </div>

    </div>
    <!-- frontbox -->
  </div>
  <script src="../src/js/login.js"></script>
</body>
</html>
