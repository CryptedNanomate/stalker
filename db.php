<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $dbconn = new PDO("mysql:host=$servername;dbname=super", $username, $password);
   
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>