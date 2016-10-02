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
	
	<a href=" /KPI/logout.php?logout"  class="btn btn-danger square-btn-adjust">Logout</a> 
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
                                <a href=" /KPI/managementlecturerRecognition.php">RECOGNITION & PROFESSIONAL SERVICES</a>
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
			
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member</h2>
                    </div>
                </div>
                 
				<!-- /. ROW  -->
                <hr />
               
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
                            No. of Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member at <u>National Level</u> in Current Year
							</div>
							
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
											<tr>
												<th>Title</th>
												<th>Description</th>
											</tr>
										</thead>
									
	<?php
 
		$sql = "SELECT Title, Description, IMFileName, Date FROM evidence WHERE StaffID = '".$_SESSION["user"]."' AND Measures ='No. of Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member at National Level in Current Year'";
		$result = $conn->query($sql);
 
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				if($row['IMFileName']!=null){
				$image1 = "Evidence/" . $row['IMFileName'];;
				}
				else {
					$image1 = "Evidence/blank.jpg";
				}
				echo "<tr> 
				 <td><a href=".$image1.">".$row["Title"]."</a> <br><br>
				 <img src=".$image1." height='auto' width='200'></td>
				 <td>" . $row["Description"]. " <br> <br>
				 " . $row["Date"]."</td>
				 </tr>";
			}
			echo "</table>";
		}

?>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                
                <!-- /. ROW  -->
        </div>
               
    </div>
	
			<div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
						No. of Appointment as Chairmanship / Committee Member/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member at <u>International Level</u> in Current Year
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
											<tr>
												<th>Title</th>
												<th>Description</th>
											</tr>
										</thead>
									
	<?php
 
	$sql = "SELECT Title, Description, IMFileName, Date FROM evidence WHERE StaffID = '".$_SESSION["user"]."' AND Measures ='No. of Appointment as Chairmanship / Committee Member/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member International Level in Current Year'";
	$result = $conn->query($sql);
 
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				if($row['file']!=null){
				$image1 = "Evidence/" . $row['file'];;
				}
				else {
					$image1 = "Evidence/blank.jpg";
				}
				echo "<tr> 
				 <td><a href=".$image1.">".$row["Title"]."</a> <br><br>
				 <img src=".$image1." height='auto' width='200'></td>
				 <td>" . $row["Description"]. " <br> <br>
				 " . $row["Date"]."</td>
				 </tr>";
			}
			echo "</table>";
		}
		
	$conn->close();

?>
                                </table>
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
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>