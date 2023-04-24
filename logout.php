<?php
session_start();
session_destroy();
unset($_SESSION['score']);
header('Location: loginpage.php?msg=""');
exit();
?>