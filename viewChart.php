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
			<h1 style="text-align: center;color: maroon;">View chart</h1>
			<table border="1px" width="100%" cellpadding="0" cellspacing="0"  >
				<tr style="background-color: #ffefdb;">
					<th style="width: 20%;font-size: 24px;">Date</th>
					<th style="width: 60%; font-size: 24px;">Link</th>
					<th style="width: 20%;font-size: 24px;">Action</th>
				</tr>
				<?php
				//if($result){
					//while($row=mysqli_fetch_assoc($result)){
					?>
					<tr id="recordId1">
						<td style="padding-left: 5px; font-size: 22px;">1</td>
						<td style="text-align:center; font-size: 22px;">XXX</td>
						<td style="text-align:center; font-size: 22px;">
							<a href="#">Email</a>
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