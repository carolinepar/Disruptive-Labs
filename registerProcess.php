<?php
session_start();
include('connect_db.php');


$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$error = false;

//if any of them are blacnk, send error


//check if username is already in table -- also email??

if($password != $confirmPassword) {
	$error = true;
	echo "Please confirm password <br>";
	//then go back to register page
} 

$getUsers = "SELECT * FROM users WHERE username = '$username'" ;


$resultUsers = mysqli_query($connection,$getUsers);
echo $resultUsers->data_seek(0);

if($resultUsers->data_seek(0)){
	$error = true;
	echo "Username already taken <br>";
}

mysqli_free_result($resultUsers);



//need to add what happens if there is an error

if(!$error){

$query = "INSERT INTO `users` (`firstName`, `lastName`, `username`, `password`, `email`, `gender`) VALUES ('$firstName', '$lastName', '$username', '$password','$email',  '1')";

$result = mysqli_query($connection,$query);

if(!$result)
{
    die("database query fail");
} 
	
	//now create a table to keep track of their classes
	
	$name = "courses" . $username;
	
	$query = "CREATE TABLE " . $name . " (courseID INT, courseName TEXT, PRIMARY KEY(courseID))";
	
	
$result = mysqli_query($connection,$query);

if(!$result)
{
    die("database query fail");
} 
	
	
	
	
}









mysqli_close($connection);

header('Location:login_portal.php');

?>