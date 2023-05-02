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
        <script type="text/javascript" src="JSFiles/nav.js"></script>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a
        >
        <a href="scoreboard.html">The Scoreboard</a>
        <a href="logout.php">Logout</a>
        <a href="test.php">Practice</a>
      </div>
        <h2><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>
        </h2>
        <h2>Choose what you want to practice</h2>
    </body>
</html>