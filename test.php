</html>
<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="test.css">
    </head>
    <body>
        <div id = "header">
        <div id="mySidenav" class="sidenav">
            <h1>Practice    </h1>
            <div id = "Button">
            </div>
        </div>
        <a href="basicmath.php">Arithmetic</a>
        <a href="basicprogramming.php">Basic Programming</a>
        <a href="clitests.php">CLI Knowledge</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
        <h2><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>
        </h2>
        <h2>Choose what you want to practice</h2>
    </body>
</html>