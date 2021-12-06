<?php
include_once('../db.php');
include_once('functions.php');

if(!func::checkLoginState($dbconn))
{
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<h1>Images from a webcam that are taken with this software will be displayed here: <br></h1>
<?php
$dirname = "../";
$Images = glob($dirname."*.png");
 foreach($Images as $img)
{
    echo '<img width="200" src = "'.$img.'" class = "img" <br> />';
} 
?>

</body>
 

</html>