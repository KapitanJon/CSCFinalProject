<?php session_start(); ?>
<?php include 'connect.php'; ?>

<html>
    <head>
        <title>Cyber Security</title>
        <link rel="stylesheet" href="tracks.css"> 
    </head>
    <body>
        <header>
            <h1>Final Cyber Security</h1>
        </header>
            <div class="container">
            <p>Final Score: <?php echo $_SESSION['score']?></p>
            <a href="dashboard.php">Dashboard</a>
    </body>
</html>
<?php 
    $score=$_SESSION['score'];
    $name = $_SESSION['user_name'];
    $sql="UPDATE `users` SET Points = Points + '$score' WHERE Name='$name'";
    mysqli_query($link,$sql);
?>
<?php $_SESSION['score'] = 0; ?>