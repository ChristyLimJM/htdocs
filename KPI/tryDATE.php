<?php

	session_start();
	require_once "dbconnect.php";
	
	$count = "SELECT evidence.Title, evidence.Category, evidence.KPI, evidence.Measures FROM evidence WHERE staffID IN (SELECT staff.staffID FROM staff 
	WHERE department = (SELECT department from staff WHERE StaffID = '".$_SESSION["user"]."'))";
	/*$result1 =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM evidence WHERE StaffID = '".$_SESSION["user"]."' AND MONTH(Date) = 5 
	AND Category = 'Award' " ));
	*/
	/*$sql = "SELECT Category, KPI, Measures FROM evidence WHERE StaffID = '".$_SESSION["user"]."'";
	*/
	$result = $conn->query($count);
	 
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr> 
			 <td>" . $row["Title"]."</td>
			 <td>" . $row["Category"]."</td>
			 <td>" . $row["KPI"]. "</td>
			 <td>" . $row["Measures"]."</td>
			 
			</tr>";
			}
			echo "</table>";
			} 

	$conn->close();
	?>