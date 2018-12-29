<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Patient List</title>
	<link rel="stylesheet" href="styeadmin.css" media="screen">
	<script src="http://www.gethealthierlife.com/js/jquery.min.js"></script>
</head>
<body>
	
	<div class="container">
			<div class="menu">
				<div class="item"><span><a href="appointmentList.php">Appointment</a></span></div>
				<div class="item"><span><a href="addInGallery.php">Testi</a></span></div>
				<div class="item"><span><a href="logout.php">Logout</a></span></div>
				<div class="item"><span><a href="patients.php">Patient</a></span></div>
			</div>
			<h1 style="text-align: center;color: maroon;">Patient List</h1>
			<table border="1px" width="100%" cellpadding="0" cellspacing="0"  >
				<tr style="background-color: #ffefdb;">
					<th style="width: 120px;font-size: 24px;">Id</th>
					<th style="width: 75px; font-size: 24px;">Name</th>
					<th style="width: 150px; font-size: 24px;">Mobile</th>
					<th style="width: 135px; font-size: 24px;">Email</th>
					<th style="width: 200px; font-size: 24px;">Address</th>
					<th style="font-size: 24px;">Query</th>
					<th style="font-size: 24px;">Action</th>
				</tr>
				<?php
				//if($result){
					//while($row=mysqli_fetch_assoc($result)){
					?>
					<tr id="recordId1">
						<td style="padding-left: 5px; font-size: 22px;">1</td>
						<td style="text-align:center; font-size: 22px;">XXX</td>
						<td style="text-align:center; font-size: 22px;">XXX</td>
						<td style="text-align:center; font-size: 22px;">XXX</td>
						<td style="text-align:center; font-size: 22px;">XXX</td>
						<td style="padding-left: 5px; font-size: 22px;">XXX</td>
						<td style="padding-left: 10px; font-size: 36px;">
						<a href="#">Edit</a>
						<a href="#">Delete</a>
						<a href="viewChart.php?id=1">View chart</a>
						<a href="newChart.php?id=1">New chart</a>
						</td>
					</tr>
					<tr id="recordId2">
						<td style="padding-left: 5px; font-size: 22px;">2</td>
						<td style="text-align:center; font-size: 22px;">ppp</td>
						<td style="text-align:center; font-size: 22px;">ppp</td>
						<td style="text-align:center; font-size: 22px;">ppp</td>
						<td style="text-align:center; font-size: 22px;">ppp</td>
						<td style="padding-left: 5px; font-size: 22px;">ppp</td>
						<td style="padding-left: 10px; font-size: 36px;">
						<a href="#">Edit</a>
						<a href="#">Delete</a>
						<a href="viewChart.php?id=2">View chart</a>
						<a href="newChart.php?id=2">New chart</a>
						</td>
					</tr>
					<?php
					// }
				// }else{
					?>
					<!--<tr><td colspan="6">No records found</td></tr>-->
					<?php
				// }
				?>
			</table>
		</div>
</body>
</html>