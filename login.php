<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "users");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
#$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "SELECT * FROM users WHERE Email = '".$email."' and Password ='".$password."'  ";
$result = mysqli_query($link, $sql);
if ($row = mysqli_fetch_array($result)){
    $_SESSION['user_name'] = $row['Name'];
    header("Location: dashboard.php");
}
else{
    header("Location:loginpage.php?msg=failed");
}
