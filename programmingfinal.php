<?php session_start(); ?>
<html>
    <head>
        <title>Basic Programming</title>
        <link rel="stylesheet" href="tracks.css"> 
    </head>
    <body>
        <header>
            <h1>Final Basic Programming</h1>
        </header>
        <main>
            <p>Final Score: <?php echo $_SESSION['score']?></p>
            <a href="dashboard.php">Dashboard</a>
        </main>
    </body>
<?php $_SESSION['score'] = 0 ?>