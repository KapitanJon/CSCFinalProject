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
        <div id = "header">
            <h1>User Dashboard</h1>
            <div id = "Button">
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <p></p>
        <div class="selection">
        <a href="test.php">Practice</a>
        </div>
        <h2>Welcome back <?php echo $_SESSION['user_name']  ?></h2>
        <h2>You have <?php echo $points;?> points.</h2>
    </body>


    <div class="footer">
    <p>CSC 490 Senior Project for Fayetteville State University</p>
  </div>
</html>