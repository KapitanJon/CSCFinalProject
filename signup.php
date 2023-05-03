<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "", "users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$hashed_password = password_hash($password,PASSWORD_DEFAULT);
$sql=mysqli_query($link,"SELECT * FROM users WHERE email = '$email'");
if(mysqli_num_rows($sql)>0){
    $_SESSION['message'] = "Email in use!";
    header("Location:signup.html");
    echo "Email in use";
    exit;

} 
if(!isset($name,$email,$password) || trim($name)=='' or trim($email)=='' or trim($password)==''){
    echo '<script>alert("Fill all Fields")</script>';
    header("Location: signup.html");
    
}
// Attempt insert query execution
$sql = "INSERT INTO users (Name, Email, Password,Points) VALUES ('$name', '$email', '$password',0)";
if(mysqli_query($link, $sql)){
    #echo "Records added successfully.";
    header("Location: success.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
