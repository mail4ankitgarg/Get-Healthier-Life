<html>
<head>
<link rel="stylesheet" href="styeadmin.css" media="screen">
<script src="js/jquery.min.js"></script>
<script src="js/mainjs.js"></script>
<script>
function deleteRecd(id)
{	
	var check=confirm("Do you want to delete?");
	if(check==true){
		var base_url='http://www.gethealthierlife.com/'
		$.ajax({
			type: "POST",
			url:base_url+'deleteappt.php',
			data:'id='+id,
			success: function(response){
				$('#recordId'+id).html('');
			},
			
		});
	}else{
		return false;
	}
	
}
</script>
</head>

<style>
table,td,tr{
	border:1px solid maroon;
}
</style>
<?php
include('config.php');
//$sql="select * from appointment_list where apptDate='".date('Y-m-d')."'";
$sql="select * from appointment_list order by apptDate desc";
//$result=mysql_query($sql);
$result=mysqli_query($con,$sql);

?>
	<body>
		<div class="container">
			<div class="menu">
				<div class="item"><span><a href="appointmentList.php">Appointment</a></span></div>
				<div class="item"><span><a href="addInGallery.php">Testi</a></span></div>
				<div class="item"><span><a href="logout.php">Logout</a></span></div>
				<div class="item"><span><a href="patients.php">Patient</a></span></div>
			</div>
			<h1 style="text-align: center;color: maroon;">Appointment List</h1>
			<table border="1px" width="100%" cellpadding="0" cellspacing="0"  >
				<tr style="background-color: #ffefdb;">
					<th style="width: 120px;font-size: 24px;">Date</th>
					<th style="width: 75px; font-size: 24px;">Time</th>
					<th style="width: 150px; font-size: 24px;">Name</th>
					<th style="width: 135px; font-size: 24px;">Phone</th>
					<th style="width: 200px; font-size: 24px;">Email</th>
					<th style="font-size: 24px;">Query</th>
					<th style="font-size: 24px;">Action</th>
				</tr>
				<?php
				if($result){
					while($row=mysqli_fetch_assoc($result)){
					?>
					<tr id="recordId<?php echo $row['id']; ?>">
						<td style="padding-left: 5px; font-size: 22px;"><?php echo trim(date('d/m/Y',strtotime($row['apptdate']))); ?></td>
						<td style="text-align:center; font-size: 22px;"><?php echo $row['apptime'] ?></td>
						<td style="text-align:center; font-size: 22px;"><?php echo $row['name'] ?></td>
						<td style="text-align:center; font-size: 22px;"><?php echo $row['phone'] ?></td>
						<td style="text-align:center; font-size: 22px;"><?php echo $row['email'] ?></td>
						<td style="padding-left: 5px; font-size: 22px;"><?php echo nl2br($row['queries']); ?></td>
						<td style="padding-left: 10px; font-size: 36px;"><a href="javascript:deleteRecd(<?php echo $row['id']; ?>)">Delete</a></td>
					</tr>
					<?php
					}
				}else{
					?>
					<tr><td colspan="6">No records found</td></tr>
					<?php
				}
				?>
			</table>

		</div>
	</body>
</html>