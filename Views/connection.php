<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "blog";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}
?>
