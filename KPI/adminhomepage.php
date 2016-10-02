<!DOCTYPE html>
<?php
	session_start();
	require_once "dbconnect.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FSKTM KPI : HOD</title>
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
				<a class="navbar-brand">Administrator</a> 
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
                                <a href=" /KPI/hodAcademic.php">ACADEMIC</a>
								</li>
								<li>
                                <a href=" /KPI/hodTeaching.php">TEACHING & LEARNING</a>
								</li>
								<li>
                                <a href=" /KPI/hodIncome.php">INCOME GENERATION</a>
								</li>
								<li>
                                <a href=" /KPI/hodInternationalization.php">INTERNATIONALIZATION</a>
								</li>
								<li>
                                <a href=" /KPI/hodRecognition.php">RECOGNITION & PROFESSIONAL SERVICES</a>
								</li>
								<li>
                                <a href=" /KPI/hodResearch.php">RESEARCH, PUBLICATION & INNOVATION</a>
								</li>
								<li>
                                <a href=" /KPI/hodAward.php">AWARD</a>
								</li>
								<li>
                                <a href=" /KPI/hodPromotion.php">PROMOTION INNITIATIVES</a>
								</li>
								<li>
                                <a href=" /KPI/hodEmployability.php">EMPLOYABILITY</a>
								</li>
							</ul>
                      </li> 
						<li>
							<a href=" /KPI/hodUpload.php"><i class="fa fa-picture-o fa-3x"></i> UPLOAD</a>
						</li>            
						<li>
							<a href="#"><i class="fa fa-table fa-3x"></i> REPORT<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
                                <a href=" /KPI/hodReport">All</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepAcademic.php">ACADEMIC</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepTeaching.php">TEACHING & LEARNING</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepIncome.php">INCOME GENERATION</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepInternationalization.php">INTERNATIONALIZATION</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepRecognition.php">RECOGNITION & PROFESSIONAL SERVICES</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepResearch.php">RESEARCH, PUBLICATION & INNOVATION</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepAward.php">AWARD</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepPromotion.php">PROMOTION INNITIATIVES</a>
								</li>
								<li>
                                <a href=" /KPI/hodRepEmployability.php">EMPLOYABILITY</a>
								</li>
							</ul>
						</li>  
						<li>
							<a href=" /KPI/switchRole.php"><i class="fa fa-users fa-3x"></i>SWITCH ROLE</a>
						</li> 
					</ul>
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
								<span class="icon-box bg-color-brown set-icon">
									<i class="fa fa-book"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/hodAcademic.php" style="color:#000033">
									ACADEMIC</a>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
								</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-greenish set-icon">
									<i class="fa fa-tasks"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/hodTeaching.php" style="color:#000033">
									TEACHING & LEARNING</a>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
								</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-purple set-icon">
									<i class="fa fa-usd"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/hodIncome.php" style="color:#000033">
									INCOME GENERATION</a>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
								</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-navy set-icon">
									<i class="fa fa-globe"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/hodInternationalization.php" style="color:#000033">
									INTERNATIONALIZATION & NETWORKING</a>
								</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-green set-icon">
									<i class="fa fa-bell-o"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/hodRecognition.php" style="color:#000033">
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
									<a href=" /KPI/hodResearch.php" style="color:#000033">
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
									<a href=" /KPI/hodAward.php" style="color:#000033">
									AWARD</a>
									</p>
									<p class="text-muted"></p>
									<p class="text-muted"></p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-yellow set-icon">
									<i class="fa fa-star-half-o"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/hodPromotion.php" style="color:#000033">
									PROMOTION INNITIATIVES</a>
								</p>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-6 col-xs-6">           
							<div class="panel panel-back noti-box">
								<span class="icon-box bg-color-orange set-icon">
									<i class="fa fa-certificate"></i>
								</span>
								<div class="text-box" >
									<p class="main-text" >
									<a href=" /KPI/hodEmployability.php" style="color:#000033">
									EMPLOYABILITY</a>
								</p>
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