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
                                <a href="#">All</a>
								</li>
								<li>
                                <a href=" /KPI/lecturerRecognition.php">RECOGNITION & PROFESSIONAL SERVICES</a>
								</li>
								<li>
                                <a href=" /KPI/lecturerResearch.php">RESEARCH, PUBLICATION & INNOVATION</a>
								</li>
							<li>
                                <a href=" /KPI/lecturerAward.php">AWARD</a>
                            </li>
							</ul>
                      </li> 
						<li>
							<a href="lecturerUpload.php"><i class="fa fa-picture-o fa-3x"></i> UPLOAD</a>
						</li>            
						<li>
							<a href="#"><i class="fa fa-table fa-3x"></i> REPORT<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
                                <a href=" /KPI/lecturerReport.php">All</a>
								</li>
								<li>
                                <a href=" /KPI/lecturerRepRecog.php">RECOGNITION & PROFESSIONAL SERVICES</a>
								</li>
								<li>
                                <a href=" /KPI/lecturerRepRes.php">RESEARCH, PUBLICATION & INNOVATION</a>
								</li>
								<li>
                                <a href=" /KPI/lecturerRepAwd.php">AWARD</a>
								</li>
							</ul>
                        </li>
                        </ul>
                      </li>  
				</div>
			</nav>  
        
			<!-- /. NAV SIDE  -->
			<div id="page-wrapper" >
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
						<h2>KPI CATEGORIES</h2>
						</div>
					</div>              
					<!-- /. ROW  -->
					<hr />
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-green set-icon">
									<i class="fa fa-bell-o"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/lecturerRecognition.php" style="color:#000033">
									RECOGNITION & PROFESSIONAL SERVICES</a>
								</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-blue set-icon">
									<i class="fa fa-archive"></i>
								</span>
								<div class="text-box" >
									<p class="main-text">
									<a href=" /KPI/lecturerResearch.php" style="color:#000033">
									RESEARCH, PUBLICATION & INNOVATION</a>
									</p>
								</div>
							</div>
						</div>
                    
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-red set-icon">
									<i class="fa fa-trophy"></i>
								</span>
								<div class="text-box" >
									<p class="main-text">
									<a href="lecturerAward.php" style="color:#000033">
									AWARD</a>
									</p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
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