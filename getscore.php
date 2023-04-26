<?php
session_start(); 
include('connect.php');
$name = $_SESSION['user_name'];
$sql="SELECT Points FROM users WHERE Name='$name'";
$result = mysqli_query($link,$sql);
$score=mysqli_fetch_assoc($result);

$points = $score['Points'];

?>