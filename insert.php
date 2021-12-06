<?php

require_once('db.php');

if(isset($_POST['log-in-button']))
{
    
}

$username =filter_var($_POST['username'],FILTER_DEFAULT);
$password =filter_var($_POST['password'],FILTER_DEFAULT);
$sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
$stmt = $dbconn->prepare($sql);
$stmt->execute(['username'=> $username,
                'password'=> $password
]);





?>