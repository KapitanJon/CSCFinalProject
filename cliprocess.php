<?php include 'connect.php';?>
<?php session_start(); ?>
<?php
    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }
    $query = "SELECT * FROM `cliquestions`";

    $result = mysqli_query($link,$query);

    $total = $result->num_rows;

    if($_POST){
        $number = $_POST['number'];
        $sel_choice = $_POST['choice'];
        $next = $number+1;

        $query="SELECT * FROM `cliquestions`";

        $query = "SELECT * FROM `clichoices` WHERE question_id = $number AND is_correct = 1";
        $result = mysqli_query($link,$query);
        $row = mysqli_fetch_assoc($result);
        $correct_choice = $row['id'];
        if($correct_choice == $sel_choice){
            $_SESSION['score']++;
        }
        if($number == $total){
            echo $number;
            header("Location:clifinal.php");
        }
        else{
            header("Location:cliquestions.php?n=".$next);
        }
    }
?>