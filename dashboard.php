<?php
session_start();
if(isset($_SESSION['user_name'])==""){
    header("Location: loginpage.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id = "header">
            <h1>User Dashboard</h1>
            <div id = "Button">
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <p>Welcome back <?php echo $_SESSION['user_name']  ?>
        <p></p>
        <div class="selection">
        <a href="test_tracks.php">Practice</a>
        </div>
    </body>
</html>