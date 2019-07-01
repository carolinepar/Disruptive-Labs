<?php
//$dbhost = '0.0.0';
$dbhost = 'localhost';
$dbuser = 'admin';
$dbpass = 'x';
$dbname = 'disruptivelabs';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
    die(
        "Database connection failed:" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")"
        );
} 


?>