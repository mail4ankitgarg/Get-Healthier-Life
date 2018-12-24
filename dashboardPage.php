<?php
$userName=$_POST['uname'];
$psw=$_POST['psw'];

if(($userName="ankit")&&($psw=="ankit@2017")){

	
	session_start();
	$_SESSION['USERNAME'] = $userName;
}else{
	echo "Invalid Login Credentials"; die;
}
?>
<html>
	<head><link rel="stylesheet" href="styeadmin.css" media="screen"></head>
	<body>
		<div class="container">
			<div class="menu">
				<div class="item"><span><a href="appointmentList.php">Appointment</a></span></div>
				<div class="item"><span><a href="addInGallery.php">Testi</a></span></div>
				<div class="item"><span><a href="logout.php">Logout</a></span></div>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>