<?php

include('connect_db.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$error = false;

//if any of them are black, send error


//check if username is already in table -- also email??

if($password != $confirmPassword) {
	$error = true;
	echo "Please confirm password <br>";
	//then go back to register page
} 

$getUsers = "SELECT * FROM users WHERE username = $username" ;


$resultUsers = mysqli_query($connection,$getUsers);

if($resultUsers->field_count > 0){
	$error = true;
	echo "Username already taken <br>";
	//then go back to register page
}


mysqli_free_result($resultUsers);

if(!$error){

$query = "INSERT INTO `users` (`firstName`, `lastName`, `username`, `password`, `email`, `gender`) VALUES ('$firstName', '$lastName', '$username', '$password','$email',  '1')";

$result = mysqli_query($connection,$query);

if(!$result)
{
    die("database query fail");
} 
//else {
//	echo("Success");
//}


mysqli_free_result($result);
	
}
mysqli_close($connection);

//header('Location:login_portal.html');

?>