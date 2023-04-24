<?php
$link = mysqli_connect("localhost", "root", "", "users");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <div id = "header">
            <h1>How to display track</h1>
        </div>
        <?php $result = mysqli_query($link,"SELECT Question FROM tracks WHERE ID = 1");  
            $row = mysqli_fetch_array($result);
            echo $row["Question"]
            ?>
        <form action="checkAnswer.php" method="post">
        <input type="text" name="answer" id="answer" required="">
        <input type="submit" value="Submit">
        <p></p>
        <?php $result = mysqli_query($link,"SELECT Question FROM tracks WHERE ID = 2");  
            $row = mysqli_fetch_array($result);
            echo "\n",$row["Question"]
            ?>
        </form>
</html>