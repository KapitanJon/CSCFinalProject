<?php include 'connect.php';?>
<?php session_start(); ?>
<?php
    $number = (int) $_GET['n'];
    /*
    * Get Questions
    */
    $query = "SELECT * FROM `secquestions` WHERE `question_id` = $number";

    //Get Result

    $result = mysqli_query($link,$query);
    $question = mysqli_fetch_assoc($result);

    $query="SELECT * FROM `secquestions`";
    $result = mysqli_query($link,$query);
    $total=mysqli_num_rows($result);

    $query = "SELECT * FROM `secchoices` WHERE `question_id` = $number";
    $choices = mysqli_query($link,$query);


?>
<html>
    <head>
        <title>Cyber Security</title>
        <link rel="stylesheet" href="basicprogrammingquestions_style.css"> 
    </head>
    <body>
        <header>
            <h1>Cyber Security</h1>
        </header>
        <main>
            <div class="container">
                <p>Question <?php echo $question['question_id'];?> of <?php echo $total;?>
                <p><?php echo $question['text']; ?> </p>
                <form method="post" action="secprocess.php">
                <?php while($row = mysqli_fetch_assoc($choices)) : ?>
                    <li><input name="choice" type="radio" value="<?php echo($row['id']);?>"/><?php echo($row['text']);?></li>
                <?php endwhile ?>
                <input type="submit" value='Submit'/>
                <input type="hidden" name="number" value="<?php echo $number; ?>"/>
                </form>
            </div>
        </main>
    </body>