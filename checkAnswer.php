<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "users");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['answer'])){
    echo "OK";
}