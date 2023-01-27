<?php
$showAlert = false;
$shoeError = false;
$exists = false;

if($_Server["REQUEST_METHOD"] == "POST"){

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
    
    #if($)


}