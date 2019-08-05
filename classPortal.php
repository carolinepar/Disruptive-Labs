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
				<li><a href="login_portal.php" target='_self'>My Classes</a></li>
				<li><a href="login_portal.php" target='_self'>Enter A Code</a></li>
				<li><a href="#" target='_self'>Payment</a></li>
				<li><a href="#" target='_self'>Settings</a></li>
				<li><a href="logoutProcess.php" target='_self'>Log Out</a></li>
			
			</ul>
		
		</div><!--end nav-->
		
	</header>
	<div id="content">
	
		<h1 class="w3-container"><?php echo $course; ?><br></h1>
	
	
		<div class="w3-bar w3-black">
			
			<button class="w3-bar-item w3-button" onclick="openTab('lessonPlans')">Lesson Plans </button>
			<button class="w3-bar-item w3-button" onclick="openTab('Problem_Sets')">Problem Sets</button>
			<button class="w3-bar-item w3-button" onclick="openTab('Tutoring')">Tutoring</button>
			<button class="w3-bar-item w3-button" onclick="openTab('gradebook'">Gradebook</button>
			
		</div>
		
		<div id ="lessonPlans" class="w3-container class" style="display:none">
			
			<br>
			
			<ol>
				
			<?php
				
				$query = "SELECT * FROM " . $course;
				
				$courseFiles = mysqli_query($connection,$query);
				
				if(!$courseFiles)
					{
    					die("database query fail");
					} 
		
					$i = 0; 
					while($i<= $week){
    
						$link = 'lessonPlanPortal.php?course=' . $course . '&week=' . $i;
						
						$row = mysqli_fetch_assoc($courseFiles);
						
						
						
						//make an array of all lesson plan namesa nd they're weeks. then sort it, and if the week abailable has a anme, use it. 
						
						//if($row['fileType'] == lessonPlanName && $row['weekAvailable'] == $i){
//							echo "<li style='font-size: 20px'><a 
//						href='" . $link . "'> Week " . $i . ": " .  $row['lessonPlanName'] . "</a></li>";
//						} 
//						
//						else {
						
							echo "<li><a 
							href='" . $link . "'>Week " . $i . "</a></li>";
							
							
						//}
						
					$i++;
					}
					
			?>
				
			</ol>
			
			
		</div>
		
		<div id ="Tutoring" class="w3-container class" style="display:none">
			<p>Insert Info here</p>
			
		</div>
		
		<div id="gradebook" class="w3-container class" style="display:none">
			<p>Information here</p>
		</div>
		<br><br><br>
		<p><a href="login_portal.php" target="_self">Return to My Classes</a></p>
		
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
