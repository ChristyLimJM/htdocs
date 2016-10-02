<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>KPI Login form</title>
      
	<link rel="stylesheet" href="login.css">
    
  </head>

  <body>
  <?php
  session_start();
  require_once 'dbconnect.php';
  if(isset($_SESSION['user'])){
		$check="SELECT * FROM staff WHERE StaffID = '".$_SESSION["user"]."'";
					
					$run = mysqli_query($conn,$check);
					$data = mysqli_fetch_array($run);
					$secondaryPosition = $data["SecondaryPosition"];
			
					if($secondaryPosition == ""){
						header("Location: /KPI/lecturerhomepage.php");
					}elseif ($secondaryPosition == "KJ"){
						header("Location: /KPI/accessPageKJ.php");
					}elseif ($secondaryPosition == "Dekan"){
						header("Location: /KPI/accessPageDekan.php");
					}elseif ($secondaryPosition == "TDIT"){
						header("Location: /KPI/accessPageTDIT.php");
					}elseif ($secondaryPosition == "TDID"){
						header("Location: /KPI/accessPageTDID.php");
					}elseif ($secondaryPosition == "TDP"){
						header("Location: /KPI/accessPageTDP.php");
					}elseif ($secondaryPosition == "Pengurusan"){
						header("Location: /KPI/managementhomepage.php");
					}
	}
	?>
	<p class="title">Faculty of Computer Science <br>
	and Information Technology</p>
   <p class="subtitle">Key Performance Index</p> 
   

<form action="loginLimit.php" method="post" enctype="multipart/form-data">
    
  <label for=""></label>
  <input type="text" name="email" id="email" placeholder="email" class="email" required>
    
  <label for=""></label>
  <input type="password" name="password" id="password" placeholder="password" class="pass" required>
  
  <button type="submit" name="login-btn" >Login to your account</button>
  
  <br><br>
  
  <a class="register" href = "registration.php"> Register</a>
    
</form>

  </body>
</html>
