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
				<li><a href="login_portal.php" target='_self'>My Classes</a></li>
				<li><a href="login_portal.php" target='_self'>Enter A Code</a></li>
				<li><a href="payment.html" target='_self'>Payment</a></li>
				<li><a href="#" target='_self'>Settings</a></li>
				<li><a href="logoutProcess.php" target='_self'>Log Out</a></li>
			
			</ul>
		
		</div><!--end nav-->
		
	</header>
	
	<p id="welcomeName">Hello, <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']?></p>
    <div id="content">
		<h3 class="heading">Student Portal</h3> 
		<br><br><br><br>
		<div id="yourClasses">
			
			<?php
	
				$query = "SELECT * FROM courses" . $_SESSION['username'];
				$courseTable = mysqli_query($connection,$query);
		
				if(!$courseTable)
					{
    					die("database query fail");
					} 
		
				$length = $courseTable->num_rows; 
	
			?>
			
			
     		<h1>Your classes:</h1>
			<br>
    		<?php 
				if($length == 0) {
					echo 'You are not currently enrolled in any classes';
				} else {
					echo "<ul>";
					while($row = mysqli_fetch_assoc($courseTable) ){
    
						$link = 'classPortal.php?course=' . $row['courseName'] . '&week=' . $row['weekNumber'];
						
						echo "<li style='font-size: 20px'><a 
						href='" . $link . "'>" . $row['courseName'] . "</a></li>";

					}
					echo "</ul>";
				}
			
				mysqli_free_result($courseTable);
				mysqli_close($connection);
			
			?>		
			
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
	
