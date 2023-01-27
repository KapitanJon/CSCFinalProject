<?php
$servername = "localhost";
$username = "ProtoAdmin";
$password = "M3gusta@1";

$database = "usertbook";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo "connected";
}
else{
    die("Error".mysqli_connect_error());
}
?>