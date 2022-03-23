<?php
include "mysql-connect.php";
$connect = mysqli_connect($server, $user, $pw, $db);

print("<p>
	Author: Ho Ching Hin, Wong Chun Yiu<br>
	Student ID: 20026528D, 20017082D
	</p>");
if(!$connect) {
	die("Connection failed: " . mysqli_connect_error());
}

$empID = $_POST['empID'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$jtitle = $_POST['jtitle'];
$hrwage = $_POST['hrwage'];
$worked = $_POST['worked'];

$addQuery = "insert into personnel values ($empID, '$fname', '$lname', '$jtitle', $hrwage);";
$addQuery .= "insert into timesheet values ($empID, $worked);";
if (mysqli_multi_query($connect, $addQuery)) {
	echo "<h3>A new personnal record is added sucessfully!</h3>";
	while(mysqli_next_result($connect)){;}
} else {
	echo "Error: " . $addQuery . "<br>" . mysqli_error($connect);
}

$userQuery = "select * from personnel inner join timesheet on personnel.empID=timesheet.empID";
$result = mysqli_query($connect, $userQuery);
if(!$result) {
	die("Could not successfully run query.".mysqli_error($connect));
}
$rows = mysqli_num_rows($result);
if($rows == 0) {
	print("No records were found whit query $userQuery");
} else {
	echo "<p>There are " . $rows . " employees as follows:</p>";
	echo "<table border = '1'>";
	echo "<tr>
		  <th>Employee ID</th>
		  <th>First Name</th>
		  <th>Last Name</th>
		  <th>Job Title</th>
		  <th>Hourly Wage</th>
		  <th>Hours Worked</th>
		  <th>Weekly Wage</th>
		  </tr>";
	while($row = mysqli_fetch_assoc($result)) {
		$hrwage = $row['hourlyWage'];
		$worked = $row['hoursWorked'];
		echo "<tr><td>" . $row['empID'] . "</td>";
		echo "<td>" . $row['firstName'] . "</td>";
		echo "<td>" . $row['lastName'] . "</td>";
		echo "<td>" . $row['jobTitle'] . "</td>";
		echo "<td>" . $hrwage . "</td>";
		echo "<td>" . $worked . "</td>";
		echo "<td>" . $hrwage * $worked . "</td></tr>";
	}
}
mysqli_close($connect);
?>