<?php
	session_start();
	require_once "dbconnect.php";
	
	$fnm = time() . "_" . $_FILES["image"]["name"];
	move_uploaded_file($_FILES["image"]["tmp_name"],__DIR__."/Evidence/".$fnm);
	
	$upload = "INSERT INTO evidence(StaffID, Title, IMFileName, Description, Category, KPI, Measures,Date) VALUES
	('".$_SESSION['user']."' , '".$_POST["title"]."' , '".$fnm."' , '".$_POST["description"]."' , 
	 '".$_POST["category"]."' , '".$_POST["kpi"]."' , '".$_POST["measures"]."' , now())";
	mysqli_query ($conn,$upload) or die (mysql_error());
	
	
	header("Location:lecturerUpload.php?file=$fnm");
?>
