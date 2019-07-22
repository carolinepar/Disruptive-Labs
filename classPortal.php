<?php
session_start();
include('connect_db.php');
$course = $_GET['course'];
$week = $_GET['week'];

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
			
			<?php
			
			$query = "SELECT * FROM " . $course;
				//if there are available files: make the ol... else, echo unlock content by inserting your class code
				//make a processing page before this, that determines the course info so it doesn't have to do it here???
			
				
$result = mysqli_query($connection,$query);

if(!$result)
{
    die("database query fail");
} 
			
	$length = $result->num_rows; 
			if($length == 0) {
				echo "There are no files for this class.";
				
			} else {
				
				$i = 0;
				
				echo "<br><br><div id='fileList'><ol>";
				while($row = mysqli_fetch_assoc($result) ){
    					
						if($row['fileType'] == "text"){
							
							if($row['weekAvailable']<= $week) {
								echo "<li><a href='#'>" . $row['fileName'] . "</a></li>";
								$i++;
							}
							
							
						
						}
					}
				
					echo "</ol></div><br><br><!--end fileList-->";
				if($i==0){
					echo "There are no files for this class.";
				}
				
			//fetch which weekt he student is currently on, and do not show files from weeks after that
				
			}
			
			
			?>
			

		</div>
		
		<div id="Lectures" class="w3-container class" style="display:none">
			<p>More Info here</p>
			
		</div>
		
		<div id="Videos" class="w3-container class" style="display:none">
			<?php
			
			$query = "SELECT * FROM " . $course;
				//if there are available files: make the ol... else, echo unlock content by inserting your class code
				//make a processing page before this, that determines the course info so it doesn't have to do it here???
			
				
$result = mysqli_query($connection,$query);

if(!$result)
{
    die("database query fail");
} 
	$length = $result->num_rows; 
			if($length == 0) {
				echo "There are no files for this class.";
				
			} else {
				
				$i = 0;
				
				echo "<br><br><div id='fileList'><ol>";
				while($row = mysqli_fetch_assoc($result) ){
    					
						if($row['fileType'] == "video"){
							
							if($row['weekAvailable']<= $week) {
								echo "<li><a href='#'>" . $row['fileName'] . "</a></li>";
								$i++;
							}
							
							
						
						}
					}
				
					echo "</ol></div><br><br><!--end fileList-->";
				if($i==0){
					echo "There are no files for this class.";
				}
				
			//fetch which weekt he student is currently on, and do not show files from weeks after that
				
			}
			
			
			?>
			
		</div>
		
		<div id="Problem_Sets" class="w3-container class" style="display:none">
			<?php
			
			$query = "SELECT * FROM " . $course;
				//if there are available files: make the ol... else, echo unlock content by inserting your class code
				//make a processing page before this, that determines the course info so it doesn't have to do it here???
			
				
$result = mysqli_query($connection,$query);

if(!$result)
{
    die("database query fail");
} 
	$length = $result->num_rows; 
			if($length == 0) {
				echo "There are no files for this class.";
				
			} else {
				
				$i = 0;
				
				echo "<br><br><div id='fileList'><ol>";
				while($row = mysqli_fetch_assoc($result) ){
    					
						if($row['fileType'] == "problems"){
							
							if($row['weekAvailable']<= $week) {
								echo "<li><a href='#'>" . $row['fileName'] . "</a></li>";
								$i++;
							}
							
							
						
						}
					}
				
					echo "</ol></div><br><br><!--end fileList-->";
				if($i==0){
					echo "There are no files for this class.";
				}
				
			//fetch which weekt he student is currently on, and do not show files from weeks after that
				
			}
			
			
			?>
			
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
