<?php
$showAlert = false;
$shoeError = false;
$exists = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'checkconn.php';

    $username = $_POST["userName"];
    $useremail = $_POST["userEmail"];
    $password = $_POST["Password"];
    $userfirstname = $_POST["User FirstName"];

    $sql = "Select * from entries where userName='$username'";
    $sql1 = "Select * from entries where userEmail='$useremail'";


    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);

    $num = mysqli_num_rows($result);
    
    if($num == 0){
        if($exists == false){
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `entries` (`userName`, `userEmail`, `Password`, `User FirstName`) VALUES ('$username', '$useremail', '$hash','$userfirstname')";

            $result = mysqli_query($conn, $sql);

                if ($result){
                    $showAlert = true;

                }
            }
    
        if($num > 0){
        $exists = "Username or Email already in use";
            }


        }
    }
?>

<!doctype html>

<head>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div id = "header">
            <h1>Sign Up</h1>
            <div id = "Button">
                <a href="login.html">Login</a>
                <a href="landing.html">Home</a>
            </div>
        </div>
    <?php

        if($showAlert){
            echo ' <div class = "green-alert" role="alert">
            
            <strong>Account Created</strong>
            
            </div>';
        }
        ?>

        <h2>Information</h2>


    </body>
    </html>