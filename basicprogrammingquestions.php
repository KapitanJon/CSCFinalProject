<?php include 'connect.php';?>
<?php session_start(); ?>
<?php
    $number = (int) $_GET['n'];
    /*
    * Get Questions
    */
    $query = "SELECT * FROM `pquestions` WHERE `question_ID` = $number";

    //Get Result

    $result = mysqli_query($link,$query);
    $question = mysqli_fetch_assoc($result);

    $query = "SELECT * FROM `pchoices` WHERE `question_ID` = $number";
    $choices = mysqli_query($link,$query);


?>
<html>
    <head>
        <title>Basic Programming</title>
        <link rel="stylesheet" href="tracks.css"> 
    </head>
    <body>
        <header>
            <h1>Basic Programming</h1>
        </header>
        <main>
            <div class="container">
                <p><?php echo $question['text'];?></p>
                <form method="post" action="programprocess.php">
                <?php while($row = mysqli_fetch_assoc($choices)) : ?>
                    <li><input name="choice" type="radio" value="<?php echo($row['id']);?>"/><?php echo($row['text']);?></li>
                <?php endwhile ?>
                <input type="submit" value='Submit'/>
                <input type="hidden" name="number" value="<?php echo $number; ?>"/>
                </form>
            </div>
        </main>
    </body>