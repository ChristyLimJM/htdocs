<!DOCTYPE html>
<?php
	session_start();
	require_once "dbconnect.php";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FSKTM KPI : RESEARCH, PUBLICATION & INNOVATION</title>
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
	<!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
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
                                <a href=" /KPI/lecturerhomepage.php">All</a>
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
                                <a href="#">RESEARCH, PUBLICATION & INNOVATION</a>
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
                     <h2>Report</h2>   
					 <h3>RESEARCH, PUBLICATION & INNOVATION</h3>
                    </div>
                </div>
				
                <!-- /. ROW  -->
                 <hr />
				<div class="right_col" role="main">
						<div class="">
						<div class="clearfix"></div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
										<div class="x_content">
										<table id="datatable-buttons" class="table table-striped table-bordered">
											<thead>
												<tr>
												<tr>
													<th>KPI</th>
													<th>Measures</th>
													<th>Title</th>
												</tr>
												</tr>
											</thead>
									
    <?php
 
	 $sql = "SELECT Title, Category, KPI, Measures FROM evidence WHERE StaffID = '".$_SESSION["user"]."' AND Category ='Research, Publication & Innovation'";
	 $result = $conn->query($sql);
	 
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr> 
			 <td>" . $row["KPI"]. "</td>
			 <td>" . $row["Measures"]."</td>
			 <td>" . $row["Title"]."</td>
			 </tr>";
			}
			echo "</table>";
			} 

	$conn->close();

	?>
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
	<!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
	<!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
	<!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
</body>
</html>
