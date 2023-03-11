<?php
session_start();
if(isset($_SESSION['user_name'])==""){
    header("Location: loginpage.php");
}
?>
<html>
<html>
    <head>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <div id = "header">
            <h1>Practice Tracks</h1>
            <div id = "mySidenav" class="sidenav">
            <script type="text/javascript" src="JSFiles/nav.js"></script>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
            </div>
            <span onclick="openNav()" class="Button">Menu</span>
        </div>
        <script>
    <body>
     <button id="myBtn">Test Track</button>
     <script type="text/">
     <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>This is a practice Track</p>
        </div> 
    </body>
</html>
