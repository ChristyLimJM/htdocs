<!DOCTYPE html>
<html >
	<head>
    <meta charset="UTF-8">
    <title>FSKTM KPI Assess Page</title>
      
	<link rel="stylesheet" href="login.css">
    
	</head>

	<body>
	
		<p class="title">Faculty of Computer Science <br>
		and Information Technology</p>
		<p class="subtitle">Key Performance Index</p> 
   
		<form>
		
		<p class = "subsubtitle">
		<?php
			session_start();
			require_once "dbconnect.php";
			$check="SELECT Name FROM staff WHERE StaffID = '".$_SESSION["user"]."'";
			$result = mysqli_query($conn,$check);
			$data = mysqli_fetch_array($result);
			echo "Welcome ";
			echo $data["Name"]; 
		?>
		</p>
			<p> <h4 style="color : #FFFFFF"> Please select the role you want to access:</h4></p>
			
			<button type = "click">
			<a href = " /KPI/deanhomepage.php" style="text-decoration: none ; color : #180000"> DEAN </a>
			</button>
	
			<br><br>
	
			<button type = "click">
			<a href = " /KPI/managementlecturerhomepage.php" style="text-decoration: none ; color : #180000"> LECTURER </a>
			</button>
			
			<br><br>
			
			<button type = "logout">
			<a href= " /KPI/logout.php?logout" style="text-decoration: none ; color : #F5FFFA">Logout</a>
			</button>
		</form>

	</body>
</html>