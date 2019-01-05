<div id="viewChartPopup" style="
    width: 800px;
    position: absolute;
    top: 80px;
    left: 280px;
    background: #fff;
">
<div id="closeviewChartPopup" style="
    float: right;
    margin: 5px 10px 5px 0;
    font-size: 20px;
    font-weight: bold;
">X</div>
<?php
include('config.php');

?>
<table border="1px" width="100%" cellpadding="0" cellspacing="0"  >
	<tr style="background-color: #ffefdb;">
		<th style="width: 20%;font-size: 24px;">Date</th>
		<th style="width: 60%; font-size: 24px;">Link</th>
		<th style="width: 20%;font-size: 24px;">Action</th>
	</tr>
	<?php
	$sql="select * from chart_details where patient_id=".$_POST['patientId'];
	//$result=mysql_query($sql);
	//$row = mysql_fetch_assoc($result);
	
	$result=mysqli_query($con,$sql);
	if($result){
		while($row=mysqli_fetch_assoc($result)){
		?>
		<tr id="recordId1">
			<td style="padding-left: 5px; font-size: 22px;"><?php echo date("d-m-Y",strtotime($row['date_added'])); ?></td>
			<td style="text-align:center; font-size: 22px;"><a href="<?php echo "downloadpdf/".$row['file_path']; ?>" target="_blank"><?php echo $row['file_path']; ?></a></td>
			<td style="text-align:center; font-size: 22px;">
				<a href="#">Email</a>
			</td>
		</tr>
	<?php
		}
	}else{
	?>
		<tr><td colspan="3">No records found</td></tr>
	<?php
	}
	?>
</table>
</div>