<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

if(!$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName))
{
    die("failed to connect!");
}

?>