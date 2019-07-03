<?php
session_start();

include('connect_db.php');

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['username'] = $_POST['username'];

$getUsers = "SELECT * FROM users WHERE username = '$username'" ;
$resultUsers = mysqli_query($connection,$getUsers);



if(!$resultUsers->data_seek(0)){
	
	
	echo 'Invalid username';
	//then go back to login page
	
}

while($row = mysqli_fetch_assoc($resultUsers) ){
    
				if($row['password'] == $password){
					

					$_SESSION['firstName'] = $row['firstName'];

					$_SESSION['lastName'] = $row['lastName'];
						
					mysqli_close($connection);

					header('Location:login_portal.php');
				} else {
					echo "Incorrect password";
				}
	
}




?>