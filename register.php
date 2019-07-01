<?php
include('connect_db.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
	
	<a href="index.html"><img id="logo" src="pictures/logo.png" alt="logo" width="50" height="50"/></a>
	
			<div id="nav">
		
				<ul>
		
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="courseSelection.html">Course Selection</a></li>
					<li><a href="kits.html">Kits</a></li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="about.html">About Disruptive Labs</a></li>
					<li><a href="logIn.html" class="logIn">Log In</a></li>	
			
				</ul>
			
			</div><!--end nav-->
	
	
	</header>
	<div id="content">
		
		<h3 class="heading">Register</h3>
		
			<br><br><br>
	<form action="registerProcess.php" method="POST">
	    <div>
		   <label>First Name:</label>
		   <input type='text' name ='firstName' placeholder = "Enter First Name">
		</div> 

                <br>
                <div>
                    <label>Last Name:</label> 
                    <input type='text' name ='lastName' placeholder = "Enter Last Name">
                </div> 
		
		 <br>
                <div>
                    <label>Email:</label> 
                    <input type='text' name ='email' placeholder = "Enter Email">
                </div>  <br>
                <div>
                    <label>Username:</label> 
                    <input type='text' name ='username' placeholder = "Enter Username">
                </div>  <br>
                <div>
                    <label>Password:</label> 
                    <input type='text' name ='password' placeholder = "Enter Password">
                </div>  <br>
                <div>
                    <label>Confirm Password:</label> 
                    <input type='text' name ='confirmPassword' placeholder = "Re-enter password">
                </div> 
	
	 <div>
                    <label> Gender: </label> 
                    <select name="gender"> 
					<option value="blank"></option><!--Or change to Prefer not to say-->
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
                </div>	
		<div>
                    <input type="submit" name="register" class="regButtons" value="Register">
                </div>
		
	</form>	
		
			<br><br>
		<p id="logIn">Already have an account? <a href="logIn.html">Log in</a></p>
	</div><!--end content-->
	
			<br><br><br>
			
		<div id="footer">
			
			<p>Contact info / navigation links
			Address <br>
			   Number <br>
			   Email
			</p>
	
			
		</div><!--end footer-->
	
	
	
	
</body>
</html>
