<!DOCTYPE html>
<?php
	session_start();
	require_once "dbconnect.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    <title>Lecturer Upload Form</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <script language="javascript" type="text/javascript">
   
            function dynamicdropdown(listindex)
            {
                document.getElementById("measures").length = 0;
                document.getElementById("measures").options[0]=new Option("Please select KPI","");
                document.getElementById("kpi").length = 0;
                switch (listindex)
                {
                    case "Recognition & Professional Services" :
                        document.getElementById("kpi").options[0]=new Option("Please select KPI","");
                        document.getElementById("kpi").options[1]=new Option("Appointment as Adjunct/ Honorary/Visiting Professor, Visiting Fellows","Appointment as Adjunct/ Honorary/Visiting Professor, Visiting Fellows");
                        document.getElementById("kpi").options[2]=new Option("Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member","Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member");
                        document.getElementById("kpi").options[3]=new Option("Services Rendered by Staff","Services Rendered by Staff");
						break;
                    
                    case "Research, Publication & Innovation" :
                        document.getElementById("kpi").options[0]=new Option("Please select KPI","");
                        document.getElementById("kpi").options[1]=new Option("Consultation","Consultation");
                        document.getElementById("kpi").options[2]=new Option("Publication","Publication");
						document.getElementById("kpi").options[3]=new Option("Critical Mass (PI)","Critical Mass (PI)");
						document.getElementById("kpi").options[4]=new Option("Research Grant","Research Grant");
						document.getElementById("kpi").options[5]=new Option("Innovation","Innovation");
                        break;
						
                    case "Award" :
                        document.getElementById("kpi").options[0]=new Option("Please select KPI","");
                        document.getElementById("kpi").options[1]=new Option("Student","Student");
                        document.getElementById("kpi").options[2]=new Option("Staff","Staff");
                        break;
                    default:
                        document.getElementById("kpi").options[0]=new Option("Please select KPI","");
                        break;
                }
                return true;
            }
            
            function dynamicdropdownone(listindex)
            {
                document.getElementById("measures").length = 0;
                switch (listindex)
                {
                    case "Appointment as Adjunct/ Honorary/Visiting Professor, Visiting Fellows" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("No. of Appointment as Adjunct/Honorary/ Visiting Professor, Visiting Fellows, etc ","No. of Appointment as Adjunct/Honorary/ Visiting Professor, Visiting Fellows, etc");
                        break;
                    case "Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("No. of Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member at National Level in Current Year","No. of Appointment as Chairmanship/ Committee/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member at National Level in Current Year");
                        document.getElementById("measures").options[2]=new Option("No. of Appointment as Chairmanship / Committee Member/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member International Level in Current Year","No. of Appointment as Chairmanship / Committee Member/ Reviewer in Professional Bodies/ Associations/ Editorial Board Member International Level in Current Year");
                        break;
                    case "Services Rendered by Staff" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("No. of Courses Conducted/ Laboratory Offering Services/ Consultation or any Other Related Activities","No. of Courses Conducted/ Laboratory Offering Services/ Consultation or any Other Related Activities");
                        break;
						
                    case "Consultation" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("Total No. of Consultation Activity","Total No. of Consultation Activity");                        
						break;
                    case "Publication" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("Total No. of ISI Publication / Clinical & Science Category -ISI only / Non-Science Category - ISI/Scopus ","Total No. of ISI Publication / Clinical & Science Category -ISI only / Non-Science Category - ISI/Scopus");
                        document.getElementById("measures").options[2]=new Option("Total No. of Research/ Reference Books","Total No. of Research/ Reference Books");
                        document.getElementById("measures").options[1]=new Option("Other Publications ","Other Publications");
						break;
                    case "Critical Mass (PI)" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("Total No. of Academic as Principal Investigator","Total No. of Academic as Principal Investigator");
                        break;
                    case "Research Grant" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("Public Grants ","Public Grants");
                        document.getElementById("measures").options[2]=new Option("Total No. of Academic Staff Apply FRGS /External Public Grants","Total No. of Academic Staff Apply FRGS /External Public Grants");
                        document.getElementById("measures").options[1]=new Option("National Private/Industries","National Private/Industries");
                        document.getElementById("measures").options[2]=new Option("International","International");
                        break;
                    case "Innovation" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("Total No.of Patents Filed","Total No.of Patents Filed");
                        document.getElementById("measures").options[2]=new Option("Total No. of Other IPR (Other than patent) ","Total No. of Other IPR (Other than patent)");
                        break;
                    
                    case "Student" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("No. of Recognition and Award Received by Student","No. of Recognition and Award Received by Student");
                        break;
                    case "Staff" :
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        document.getElementById("measures").options[1]=new Option("No. of External Recognition and Award Received by Staff ","No. of External Recognition and Award Received by Staff");
                        break;
                    default:
                        document.getElementById("measures").options[0]=new Option("Please select measures","");
                        break;
                }
                return true;
            }
    </script>
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
                                <a href=" /KPI/managementlecturerRecognition.php">RECOGNITION & PROFESSIONAL SERVICES</a>
								</li>
								<li>
                                <a href=" /KPI/managementlecturerUpload.php">RESEARCH, PUBLICATION & INNOVATION</a>
								</li>
							<li>
                                <a href=" /KPI/managementlecturerAward.php">AWARD</a>
                            </li>
							</ul>
                      </li> 
						<li>
							<a href="#"><i class="fa fa-picture-o fa-3x"></i> UPLOAD</a>
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
						<h2>UPLOAD FILE</h2>   
                    </div>
                </div>
                 
				 <!-- /. ROW  -->
                <hr />
				<div class="row">
					<div class="col-md-12">
						<!-- Form Elements -->
						<div class="panel panel-default">
							<div class="panel-heading" >
                            Fill in the details:
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<form role="form" action="processUpload.php" method="post" enctype="multipart/form-data">
											<div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" required />
											</div>
											
											<div class="form-group">
                                            <label>File</label>
                                            <input type="file" name="image" required/>
											</div>
											
											<div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Briefly decribe the content and enter keyword" name="description" required></textarea>
											</div>
                                        
											<div class="form-group">
											<label>Category</label>
											<select name="category" class="form-control" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
											<option value="" selected>Select Category</option>
											<option value="Recognition & Professional Services">Recognition & Professional Services</option>
											<option value="Research, Publication & Innovation">Research, Publication & Innovation</option>
											<option value="Award">Award</option>
											</select>
											</div>
		
											<div class="form-group" id="sub_category_div">
											<label>KPI</label>
											<script type="text/javascript" language="JavaScript">
												document.write('<select name="kpi" id="kpi" class="form-control" onchange="javascript: dynamicdropdownone(this.options[this.selectedIndex].value);"><option value="">Please select KPI</option></select>')
											</script>
											<noscript>
												<select name="kpi" id="kpi" class="form-control" >
												<option value="">Please select measures</option>
												</select>
											</noscript>
											</div>
		
											<div class="form-group" id="measures_div">
											<label>Measures</label>
											<script type="text/javascript" language="JavaScript">
												document.write('<select name="measures" id="measures" class="form-control"><option value="">Please select measures</option></select>')
											</script>
											<noscript>
												<select name="measures" id="measures" class="form-control" >
												<option value="">Please select measures</option>
												</select>
											</noscript>
											</div>
											
											<br>
											<button type="submit"  class="btn btn-default" >Upload</button>
											<button type="reset" class="btn btn-primary">Reset</button>

										</form>
										<br />
									</div>
								</div>
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
