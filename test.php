<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id = "header">
            <h1>Practice    </h1>
            <div id = "Button">
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <h2>Choose what you want to practice</h2>
        <a href="basicmath.php">Arithmetic</a>
        <a href="basicprogramming.php">Basic Programming</a>
        <a href="clitests.php">CLI Knowledge</a>
        <p><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>
        </p>
    </body>
</html>