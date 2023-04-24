<?php
include("connect.php");
$db = $con;
$db1 = $database;
$query = "SELECT * FROM users";
$result = mysqli_query($db,$query);
echo $result;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id = "header">
            <h1>Scoreboard</h1>
            <div id = "Button">
                <a href="logout.php">Logout</a>
                <a href="dashboard.php">Dashboard</a>
            </div>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Points</th>
            </tr>
            <?php
            $i = 0;
            whi
            ?>
            <tr>
                <td>
            </tr>
    </body>
</html>