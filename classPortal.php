<?php
session_start();
$course = $_GET['course'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $course; ?></title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
				<li><a href="logoutProcess.php" target='_self'>Log Out</a></li>
			
			</ul>
		
		</div><!--end nav-->
		
	</header>
	<div id="content">
	
		<h1 class="w3-container"><?php echo $course; ?><br></h1>
	
	
		<div class="w3-bar w3-black">
			<button class="w3-bar-item w3-button" onclick="openTab('Files')">Files</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Lectures')">Lectures</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Videos')">Videos</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Problem_Sets')">Problem Sets</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Tutoring')">Tutoring</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Settings'">Settings</button>
		</div>
		
		<div id="Files" class="w3-container class" >
			<p>Info here</p>

		</div>
		
		<div id="Lectures" class="w3-container class" style="display:none">
			<p>More Info here</p>
			
		</div>
		
		<div id="Videos" class="w3-container class" style="display:none">
			<p>Info here</p>
			
		</div>
		
		<div id="Problem_Sets" class="w3-container class" style="display:none">
			<p>More Info here</p>
			
		</div>
		
		<div id ="Tutoring" class="w3-container class" style="display:none">
			<p>Insert Info here</p>
			
		</div>
		
		<div id="Settings" class="w3-container class" style="display:none">
			<p>Information here</p>
		</div>
		
		<p><a href="login_portal.html" target="_self">Return to My Classes</a></p>
		
		<script>
			function openTab(tabName) {
				var i;
				var x = document.getElementsByClassName("class");
				for (i = 0; i < x.length; i++) {
  					x[i].style.display = "none";  
  				}
  				document.getElementById(tabName).style.display = "block";  
			}
		</script>
	
	
		
	</div><!--end content-->
	<br><br><br><!-- delete later-->
	<footer>
		<div id="footer">
			<h3>Disruptive Labs</h3>
	
			<p>Contact info / navigation links <br>
			   Address <br>
			   Number <br>
			   Email
			
			</p>
		</div><!--end footer-->
	</footer> 
	
</body>
</html>
