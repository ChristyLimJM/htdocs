<!DOCTYPE html>
<?php
	session_start();
	require_once "dbconnect.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FSKTM KPI : Lecturer</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
	
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand">Lecturer</a> 
            </div>
	<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
	
	<?php
			$check="SELECT Name FROM staff WHERE StaffID = '".$_SESSION["user"]."'";
			$result = mysqli_query($conn,$check);
			$data = mysqli_fetch_array($result);
			echo $data["Name"]; 
		?>
	
	<a href=" /KPI/logout.php?logout" class="btn btn-danger square-btn-adjust">Logout</a> 
	</div>	
        </nav>
		
           <!-- /. NAV TOP  -->
			<nav class="navbar-default navbar-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="main-menu">
						<li class="text-center">
							<img src=" /KPI/FSKTMlogo.jpg" class="user-image img-responsive"/>
						</li>
				
						<li>
							<a href="#"><i class="fa fa-th-list fa-3x"></i> KPI CATEGORY<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
                                <a href="/KPI/managementlecturerhomepage.php">All</a>
								</li>
								<li>
                                <a href="#">RECOGNITION & PROFESSIONAL SERVICES</a>
								</li>
								<li>
                                <a href=" /KPI/managementlecturerResearch.php">RESEARCH, PUBLICATION & INNOVATION</a>
								</li>
							<li>
                                <a href=" /KPI/managementlecturerAward.php">AWARD</a>
                            </li>
							</ul>
                      </li> 
						<li>
							<a href=" /KPI/managementlecturerUpload.php"><i class="fa fa-picture-o fa-3x"></i> UPLOAD</a>
						</li>            
						<li>
							<a href="#"><i class="fa fa-table fa-3x"></i> REPORT<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
                                <a href=" /KPI/managementlecturerReport.php">All</a>
								</li>
								<li>
                                <a href=" /KPI/managementlecturerRepRecog.php">RECOGNITION & PROFESSIONAL SERVICES</a>
								</li>
								<li>
                                <a href=" /KPI/managementlecturerRepRes.php">RESEARCH, PUBLICATION & INNOVATION</a>
								</li>
								<li>
                                <a href=" /KPI/managementlecturerRepAwd.php">AWARD</a>
								</li>
							</ul>
						</li>  
						<li>
							<a href=" /KPI/switchRole.php"><i class="fa fa-users fa-3x"></i>SWITCH ROLE</a>
						</li> 
					</ul>
				</div>
        </nav>
			
	<?php

		$result1 =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM evidence WHERE StaffID = '".$_SESSION["user"]."' AND KPI='Appointment as Adjunct/ Honorary/Visiting Professor, Visiting Fellows'"));
		$result2 =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM evidence WHERE StaffID = '".$_SESSION["user"]."' AND KPI='Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member'"));
		$result3 =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM evidence WHERE StaffID = '".$_SESSION["user"]."' AND KPI='Services Rendered by Staff'"));

	?>
	
			<!-- /. NAV SIDE  -->
			<div id="page-wrapper" >
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
						<h2>RECOGNITION & PROFESSIONAL SERVICES</h2>
						</div>
					</div>              
					<!-- /. ROW  -->
					<hr />
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box"> 
								<div class="text-box" >
									<p class="main-text">
									<a href=" /KPI/managementlecturerRecog1.php" style="color:#000033">
									Appointment as Adjunct/ Honorary/ Visiting Professor, Visiting Fellows</a></p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
									<p class="text-muted">Total number of uploaded files: <?php echo $result1?></p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<div class="text-box" >
									<p class="main-text">
									<a href=" /KPI/managementlecturerRecog2.php" style="color:#000033">
									Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member</a></p>
									<p class="text-muted"></p>
									<p class="text-muted">Total number of uploaded files: <?php echo $result2?></p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<div class="text-box" >
									<p class="main-text">
									<a href=" /KPI/managementlecturerRecog3.php" style="color:#000033">
									Services Rendered by Staff</a></p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
									<p class="text-muted">Total number of uploaded files: <?php echo $result3?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>