
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="sign_up.css">
    </head>
    <body onload="loginform.reset();">
        <div id = "header">
            <div id = "mySidenav" class="sidenav">
                <script type="text/javascript" src="JSFiles/nav.js"></script>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="landing.html">Home</a>
                <a href = "signup.html">Sign up</a>
            </div>
            <span onclick="openNav()" class="button">Menu</span>
        </div>
    <form id="loginform" action="login.php" method="post" >
        <p>Login</p>
        <p>
        <label for="Email">Email:</label>
        <input type="text" name="email" id="email" required="" onfocus="this.value=''" value="Enter Email">
        </p>
        <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required="" onfocus="this.value=''" value="Enter Password">
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
