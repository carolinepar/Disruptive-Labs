<?php
    session_start();
    $_SESSION = array();
    session_destroy();

	header('Location:logIn.php');
	//add an alert that says you've successfully been logged out

?>