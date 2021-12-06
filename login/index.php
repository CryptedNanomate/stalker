<?php
 include_once('header.php');


?>
<?php 
// $stmt = $dbconn->prepare("SELECT * FROM  admin;");
// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach($rows as $row)
// {
//     echo $row['username'];
// }
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
    <section class="parent">
        <div class="child">
            <?php
              if(!func::checkLoginState($dbconn))
              {
                  
                 header("location: login.php");
                 exit();
              }
            
            ?>
        </div>
    </section>
<?php
 include_once('footer.php');
?>
</body>
</html>