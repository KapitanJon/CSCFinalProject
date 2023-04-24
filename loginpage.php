
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body onload="loginform.reset();">
    <embed src="/Music/DBZdokkanBattle.mp3" loop="true" autostart="true" width="2" height="0">
        <div id = "header">
            <div id = "mySidenav" class="sidenav">
            <script type="text/javascript" src="JSFiles/nav.js"></script>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="signup.html">Sign Up Page</a>
            <a href = "landing.html">Landing Page</a>
            <a href = "scoreboard.html">The Scoreboard</a>
            </div>
            <span onclick="openNav()" class="button">Menu</span>
        </div>
    <form id="loginform" action="login.php" method="post" >
        <p>Login</p>
        <p>
        <label for="Email">Email:</label>
        <input type="text" name="email" id="email" required="" onfocus="this.value=''" >
        </p>
        <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required="" onfocus="this.value=''">
        </p>
        <div class="holder">
        <input type="submit" value="Login">
        </div>

    </body>
</html>
<?php
ini_set('display_errors', 0);
if ($_GET["msg"] == 'failed'){
    echo '<script>alert("Email or Password Incorrect")</script>';
}