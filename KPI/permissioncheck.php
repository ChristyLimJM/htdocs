 <?php
	session_start();
	require_once 'dbconnect.php';

	// if(isset($_SESSION['user'])){
		// header("Location: /KPI/permissioncheck.php");
	// }else{
		if(isset($_POST['login-btn'])){
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			// $password = mysqli_real_escape_string($conn,$_POST['password']);
			$result= mysqli_query($conn,"SELECT * FROM user WHERE Email='$email'");
			$row=mysqli_fetch_array($result);
			$password = $_POST['password'];
			if(isset($row)){
	 
				if($row['Password']==($password)){
					$_SESSION['user'] = $row['StaffID'];
					$check="SELECT * FROM staff WHERE StaffID = '".$_SESSION["user"]."'";
		$run = mysqli_query($conn,$check);
		$data = mysqli_fetch_array($run);
		$secondaryPosition = $data["SecondaryPosition"];
		if($secondaryPosition = ""){
			header("Location: /KPI/lecturerhomepage.php");
		}elseif($secondaryPosition == "KJ"){
			header("Location: /KPI/permissionPage.php");
		}
					//header("Location: /KPI/permissioncheck.php");
				}else {
					?>
					<script>alert('Incorrect password.');</script>
					<?php
				}
			}else{
				?>
				<script>alert('Email does not exist.');</script>
				<?php
			}
		// }
	}

		// $check="SELECT * FROM staff WHERE StaffID = '".$_SESSION["user"]."'";
		// $run = mysqli_query($conn,$check);
		// $data = mysqli_fetch_array($run);
		// $secondaryPosition = $data["SecondaryPosition"];
		// if($secondaryPosition = ""){
			// header("Location: /KPI/lecturerhomepage.php");
		// }elseif($secondaryPosition == "KJ"){
			// header("Location: /KPI/permissionPage.php");
		// }
	
?>