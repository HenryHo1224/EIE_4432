<!DOCTYPE html>
<!--	Author: Ho Ching Hin, Wong Chun Yiu
		Date:	Oct 11, 2021
		File:	bus-travel.php
		Purpose: HTML Practice
-->
<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel="stylesheet" type="text/css" href="bus-travel.css"/>
</head>
<body>
	<h1>BUSINESS TRAVEL REIMBURSEMENT SUMMARY</h1>
		
	<p>
	Author: Ho Ching Hin, Wong Chun Yiu<br>
	Student ID: 20026528D, 20017082D
	</p>
	<table>
		<tr>
			<th>DATE</th>
			<th>CAR USE</th>
			<th>BREAKFAST</th>
			<th>LUNCH</th>
			<th>DINNER</th>
			<th>HOTEL</th>
			<th>TOTAL</th>
		</tr>
	<?php
		print ("<p>"); 
		for ($count = 1; $count <= 3; $count = $count + 1) {
		   print("*****"); 
		} 
		print ("</p>");
	?>
</body>
</html>