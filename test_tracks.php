<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "users");
if(isset($_SESSION['user_name'])==""){
    header("Location: loginpage.php");
}
?>
<html>
<html>
    <head>
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div id = "header">
            <h1>Practice Tracks</h1>
            <div id = "mySidenav" class="sidenav">
            <script type="text/javascript" src="JSFiles/nav.js"></script>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
            </div>
            <span onclick="openNav()" class="button">Menu</span>
    </div>
     <p><a href = '#' onclick='example()'>Basic Addition</a></p>
     <div id="example">
        <div>
            <p><?php $result = mysqli_query($link,"SELECT Question, Answer FROM tracks WHERE ID = 1");  
            $row = mysqli_fetch_array($result);
            $sol = $row["Answer"];
            echo $row["Question"]
            ?></p>
            <form action="" method="post">
            <input type="text" name="answer" id="answer" required="">
            <input type="submit" value="Submit">
            <?php if(isset($_POST['answer'])){
                 $answ = $_REQUEST['answer'];
                 if ($answ == $sol){
                    echo "correct";
                 }
            }?>
            <a href="#"onclick='example()'>X</a>
        </div>
        <script>
        function example() {
        el = document.getElementById("example");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
        }
        </script>
    </div>
    <p><a href = '#' onclick='example1()'>Some Algebra</a></p>
    <div id = "example1">
        <div>
            <p><?php $result = mysqli_query($link,"SELECT Question FROM tracks WHERE ID = 2");  
            $row = mysqli_fetch_array($result);
            echo $row["Question"]
            ?></p>
        </div>
        <script>
        function example1() {
        el = document.getElementById("example1");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
        }
        </script>
    </div>
    </body>
</html>
