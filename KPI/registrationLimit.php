<?php
	require_once "dbconnect.php";

   
    $error = array();
       
    $passwordMatch = true;
	$goodPassLength = true;
	$newEmail = true;
	$newStaffID = true;
	$isStaff = false;
	
    if($_POST["password"] != $_POST["reconfirmPassword"]){
		?>
			<script>alert('Confirm password does not match.');</script> 
		<?php
		//$error[] = "Confirm password does not match.";
		$passwordMatch = false;
	}
        
    if(strlen($_POST["password"]) < 5){
		?>
			<script>alert('Password must be more than 5 characters.');</script> 
		<?php
		//$error[] = "Password must be more than 5 characters.";
		$goodPassLength = false;
	}
	
	$check="SELECT * FROM user WHERE Email = '".$_POST["email"]."'";
	$result = mysqli_query($conn,$check);
	$data = mysqli_fetch_array($result);
	if(isset($data)){
		?>
			<script>alert('E-mail has been used.');</script> 
		<?php
		//$error[] = "E-mail has been used.";
		$newEmail = false;
	}
	
	$check="SELECT * FROM user WHERE StaffID = '".$_POST["staffID"]."'";
	$result = mysqli_query($conn,$check);
	$data = mysqli_fetch_array($result);
	if(isset($data)){
		?>
			<script>alert('StaffID already exist.');</script> 
		<?php
		//$error[] = "StaffID already exist.";
		$newEmail = false;
	}	
		
	$check="SELECT * FROM staff WHERE StaffID = '".$_POST["staffID"]."'";
	$result = mysqli_query($conn,$check);
	$data = mysqli_fetch_array($result);
	if(isset($data)){
		$isStaff = true;
	}else{
		?>
			<script>alert('Invalid staffID.');</script> 
		<?php
		//$error[] = "Invalid StaffID.";
	}	
		
	if($passwordMatch&&$goodPassLength&&$newEmail&&$newStaffID&&$isStaff){
		$sql = "INSERT INTO user (StaffID, Email, Password)VALUES ('".$_POST["staffID"]."','".$_POST["email"]."','".$_POST["password"]."')";
		mysqli_query($conn, $sql) or die('Unable to save data.');
		header("Location: /KPI/login.php");
	}else{
		for($x = 0; $x < count($error); $x++) {
			echo $error[$x];
			echo "<br>";
		}
	}
	
		
?>   