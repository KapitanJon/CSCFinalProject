<?php session_start(); ?>
<?php include 'connect.php'; ?>

<html>
    <head>
        <title>Basic Programming</title>
        <link rel="stylesheet" href="tracks.css"> 
    </head>
    <body>
        <header>
            <h1>Final Basic Programming</h1>
        </header>
            <div class="container">
            <p>Final Score: <?php echo $_SESSION['score']?></p>
            <a href="dashboard.php">Dashboard</a>
    </body>
</html>
<?php $_SESSION['score'] = 0 ?>