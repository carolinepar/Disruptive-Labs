<?php
include('connect_db.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log In</title>
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
			
			<h3 class="heading">Log In</h3>
	 
			<div class="logInBox">
       		    <form action="loginProcess.php" method="POST"> 
					
                	<br><br>
                
               		 <div>
                  		<label>Username: </label> 
                  		<input type='text' name='username' placeholder="Enter User Name">
              		</div> 
	
             		<br>
                
             	   <div>
            	        <label>Password: </label>
           		        <input type='password' name='password' placeholder="*********">
             	   </div>
                
             	   <br>
                
               		<div>
                   		<input type='submit' name='login' class="logRegButtons" value="Login">
               		</div>

            	</form> 
				
     	  	</div><!--END logInBox-->
			
      		<br><br><br>
			
 	       <div class="goToRegBox">
    	            <p>Are you new here?</p>
     	           <a href="register.php" class="logRegButtons">Register</a>
 	       </div><!--end goToRegBox-->
			
			<br><br><br>
			
		</div><!--end content-->
		
		<footer>
			<div id="footer">
	
				<p>Contact info / navigation links <br>
				Address <br>
			   	Number <br>
			   	Email
				</p>
	
			</div><!--end footer-->
		</footer>
	
	</body>
	
</html>
