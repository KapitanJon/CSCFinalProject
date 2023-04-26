<?php session_start();
 include('getscore.php');
 if($points<20){
    $_SESSION['message']="Uh oh looks like you don't have enough points come back when you have 20";
    header("Location:test.php");
 }
 ?>
<html>
    <head>
        <title>CLI Knowledge</title>
        <link rel="stylesheet" href="tracks.css"> 
    </head>
    <body>
        <header>
            <h1>CLI Knowledge</h1>
        </header>
        <main>
            <p>Test Basic CLI Knowledge</p>
            <a href="basicprogrammingquestions.php?n=1" class="start">Let's Go</a>
        </main>
    </body>