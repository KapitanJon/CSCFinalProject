<?php include 'connect.php';?>
<?php
   // $number = (int) $_GET['n'];
    //echo($number);

    /*
    * Get Questions
    */
    $query = "SELECT * FROM `questions` WHERE question_ID = 1";

    //Get Result

    $result = mysqli_query($con,$query);
    echo($result);
    //$question = mysqli_fetch_assoc($result);
?>