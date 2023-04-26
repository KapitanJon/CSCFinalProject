<?php
session_start();
if(isset($_SESSION['user_name'])==""){
    header("Location: loginpage.php");
}
include('getscore.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Dashboard.css">
    </head>
    <body>
    <div id="header">
      <h1>The Hyperbolic Time Chamber</h1>
      <div id="mySidenav" class="sidenav">
        <script type="text/javascript" src="JSFiles/nav.js"></script>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a
        >
        <a href="loginpage.php">Login Page</a>
        <a href="signup.html">Sign up Page</a>
        <a href="scoreboard.html">The Scoreboard</a>
      </div>
      <span onclick="openNav()" class="button">Menu</span>
    </div>
        </div>
        <h2>Welcome back <?php echo $_SESSION['user_name']  ?></h2>
        <h2>You have <?php echo $points;?> points.</h2>
    </body>


    <div class="footer">
    <p>CSC 490 Senior Project for Fayetteville State University</p>
  </div>
</html>