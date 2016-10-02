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