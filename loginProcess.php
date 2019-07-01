<?php

include('connect_db.php');

$username = $_POST['username'];
$password = $_POST['password'];

$getUsers = "SELECT * FROM users WHERE username = '$username'" ;
$resultUsers = mysqli_query($connection,$getUsers);



if(!$resultUsers->data_seek(0)){
	
	echo 'Invalid username';
	//then go back to login page
	
}






?>