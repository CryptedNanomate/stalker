<?php
include_once("config.php");
include_once("functions.php");
require_once('../db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
         <?php if(func::checkLoginState($dbconn))
         {
            echo '<a href = "logout.php"><h2> Logout</h2></a> <br>'; 
            echo '<a href = "admin.php">Admin</a>';
         }
      
 
         ?>

    <div class="center">
        <img class="logo" src="img/header.PNG" alt="">
    </div>
</header>
