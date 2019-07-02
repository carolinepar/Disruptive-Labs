<?php
session_start();
include('connect_db.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width'> 
		<title>Disruptive Labs</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

<body>
	
	<header>
	
		<a href="index.html"><img id="logo" src="pictures/logo.png" alt="logo" width="50" height="50"/></a>
		
		
		<div id="nav">
		
			<ul>
		
				<li><a href="index.html" target='_self'>Home</a></li>
				<li><a href="#" target='_self'>My Classes</a></li>
				<li><a href="#" target='_self'>Enter A Code</a></li>
				<li><a href="#" target='_self'>Payment</a></li>
				<li><a href="#" target='_self'>Settings</a></li>
				<li><a href="#" class="logIn" target='_self'>Log Out</a></li>
			
			</ul>
		
		</div><!--end nav-->
		
	</header>
	
	<p id="welcomeName">Hello, <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']?></p>
    <div id="content">
		<h3 class="heading">Student Portal</h3> 
		<br><br><br><br>
		<div id="yourClasses">
     		<h1>Your classes:</h1>
			<br>
    
			<ul>
				<li style="font-size: 20px"><a href="classPortal.html">Class 1    Insert info about class here</a><br>
     	    			<li style="font-size: 20px"><a href="classPortal.html">Class 2    Insert info about class here</a><br>
				<li style="font-size: 20px"><a href="classPortal.html">Class 3    Insert info about class here</a><br>
			</ul>
			
			<!--might need to be changed to ul-->
			
		</div><!--end yourClasses-->
			
		<div id="code">
		
			<p>Enter your code here</p>
			<form>
				<label>Code: </label>
                <input type='code' name='code' placeholder="*********">
			</form>
			
		</div><!--end code-->
		
    </div><!--end content-->
    
 </body>
 
 </html>
	
