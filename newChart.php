<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Patient List</title>
	<link rel="stylesheet" href="styeadmin.css" media="screen">
	<script src="js/jquery.min.js"></script>
	<script src="js/mainjs.js"></script>
	<style>
			textarea{
				resize: none;
				width: 100%;
				font-size: 14px;
				padding: 0px 5px;
				background-color: #fff;
				border: 1px solid #dadada;
				min-height:100px;
			}
			table.cinereousTable {
			  border: 6px solid #7e9974;
			  background-color: #E0E9BB;
			  width: 100%;
			  text-align: left;
			  float:left;
			}
			table.cinereousTable td, table.cinereousTable th {
			  border: 1px solid #7e9974;
			  padding: 4px 4px;
			}
			table.cinereousTable tbody td {
			  font-size: 20px;
			  font-weight: bold;
			}
			table.cinereousTable thead {
			  background: #7e9974;
			  background: -moz-linear-gradient(top, #afa396 0%, #9e9081 66%, #7e9974 100%);
			  background: -webkit-linear-gradient(top, #afa396 0%, #9e9081 66%, #7e9974 100%);
			  background: linear-gradient(to bottom, #afa396 0%, #9e9081 66%, #7e9974 100%);
			}
			table.cinereousTable thead th {
			  font-size: 17px;
			  font-weight: bold;
			  color: #FFFFFF;
			  text-align: left;
			  border-left: 2px solid #7e9974;
			  background-color: #4d773e;
			}
			table.cinereousTable thead th:first-child {
			  border-left: none;
			  
			}

			table.cinereousTable tfoot {
			  font-size: 16px;
			  font-weight: bold;
			  color: #F0F0F0;
			  background: #948473;
			  background: -moz-linear-gradient(top, #afa396 0%, #9e9081 66%, #948473 100%);
			  background: -webkit-linear-gradient(top, #afa396 0%, #9e9081 66%, #948473 100%);
			  background: linear-gradient(to bottom, #afa396 0%, #9e9081 66%, #948473 100%);
			}
			table.cinereousTable tfoot td {
			  font-size: 16px;
			}
			@media print {
			  section {page-break-after: always;}
			}
		</style>
</head>
<body>
<?php
include('config.php');
?>
	<div class="container">
	<input type="hidden" name="patientId" id="patientId" value="<?php echo $_GET['id']; ?>" />
		<div class="menu">
			<div class="item"><span><a href="appointmentList.php">Appointment</a></span></div>
			<div class="item"><span><a href="addInGallery.php">Testi</a></span></div>
			<div class="item"><span><a href="logout.php">Logout</a></span></div>
			<div class="item"><span><a href="patients.php">Patient</a></span></div>
		</div>
		<h1 style="text-align: center;color: maroon;">View chart</h1>
		<div style="float: left;padding: 15px;width: calc(100% - 30px);">
			<span style="float: left;width: 90%; font-size:20px; font-weight: bold; text-align: center;">
				Prepared By:  Dt. <?php echo $_SESSION['USERNAME'] ; ?><br>
				<span style="color:red;">Dietitian Nutritionist</span>
			</span>
			
			<span style="float: right;width: 10%;text-align: right;">
				<?php echo Date("d-m-Y");?>
			</span>
		</div>
		
		<table class="cinereousTable" cellpadding="0" cellspacing="0">
			<thead>
				<tr style="width:100%;">
					<th width="94px">&nbsp;</th>
					<th width="200px">Sunday</th>
					<th width="200px">Monday</th>
					<th width="200px">Tuesday</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>E.morning </td>
					<td><textarea id="d1m1">d1m1</textarea></td>
					<td><textarea id="d2m1">d2m1</textarea></td>
					<td><textarea id="d3m1">d3m1</textarea></td>
				</tr>
				<tr>
					<td>Breakfast </td>
					<td><textarea id="d1m2">d1m2</textarea></td>
					<td><textarea id="d2m2">d2m2</textarea></td>
					<td><textarea id="d3m2">d3m2</textarea></td>
				</tr>
				<tr>
					<td>M.Morning</td>
					<td><textarea id="d1m3">d1m3</textarea></td>
					<td><textarea id="d2m3">d2m3</textarea></td>
					<td><textarea id="d3m3">d3m3</textarea></td>
				</tr>
				<tr>
					<td>Lunch </td>
					<td><textarea id="d1m4"></textarea></td>
					<td><textarea id="d2m4"></textarea></td>
					<td><textarea id="d3m4"></textarea></td>
				</tr>
				<tr>
					<td>Evening </td>
					<td><textarea id="d1m5"></textarea></td>
					<td><textarea id="d2m5"></textarea></td>
					<td><textarea id="d3m5"></textarea></td>
				</tr>
				<tr>
					<td>Dinner </td>
					<td><textarea id="d1m6"></textarea></td>
					<td><textarea id="d2m6"></textarea></td>
					<td><textarea id="d3m6"></textarea></td>
				</tr>
				<!--<tr>
					<td>Note:-</td>
					<td colspan="3"><textarea id="note1"></textarea></td>
				</tr>-->
			</tbody>
		</table>
		
		<!--<section>
			<div style="float: left;padding: 15px;width: calc(100% - 30px);">
				<span style="float: left;width: 33%;font-weight: bold;">
					www.gethealthierlife.com
				</span>
				<span style="float: left;text-align: center;width: 33%;font-weight: bold;color: red;">
					Not for medico legal purpose
				</span>
				<span style="float: right;width: 28%;text-align: right;">
					&#x00040;: dt.eshasinghal@gmail.com
				</span>
			</div>
		</section>-->
		
		<div style="float: left;padding: 15px;width: calc(100% - 30px);">
			<span style="float: left;width: 90%; font-size:20px; font-weight: bold; text-align: center;">
				Prepared By:  Dt. <?php echo $_SESSION['USERNAME'] ; ?><br>
				<span style="color:red;">Dietitian Nutritionist</span>
			</span>
			
			<span style="float: right;width: 10%;text-align: right;">
				<?php echo Date("d-m-Y");?>
			</span>
		</div>
		<table class="cinereousTable" cellpadding="0" cellspacing="0">
			<thead>
				<tr style="width:100%;">
					<th width="174px">Wednesday</th>
					<th width="174px">Thursday</th>
					<th width="173px">Friday</th>
					<th width="173px">Saturday</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><textarea id="d4m1"></textarea></td>
					<td><textarea id="d5m1"></textarea></td>
					<td><textarea id="d6m1"></textarea></td>
					<td><textarea id="d7m1"></textarea></td>
				</tr>
				<tr>
					<td><textarea id="d4m2"></textarea></td>
					<td><textarea id="d5m2"></textarea></td>
					<td><textarea id="d6m2"></textarea></td>
					<td><textarea id="d7m2"></textarea></td>
				</tr>
				<tr>
					<td><textarea id="d4m3"></textarea></td>
					<td><textarea id="d5m3"></textarea></td>
					<td><textarea id="d6m3"></textarea></td>
					<td><textarea id="d7m3"></textarea></td>
				</tr>
				<tr>
					<td><textarea id="d4m4"></textarea></td>
					<td><textarea id="d5m4"></textarea></td>
					<td><textarea id="d6m4"></textarea></td>
					<td><textarea id="d7m4"></textarea></td>
				</tr>
				<tr>
					<td><textarea id="d4m5"></textarea></td>
					<td><textarea id="d5m5"></textarea></td>
					<td><textarea id="d6m5"></textarea></td>
					<td><textarea id="d7m5"></textarea></td>
				</tr>
				<tr>
					<td><textarea id="d4m6"></textarea></td>
					<td><textarea id="d5m6"></textarea></td>
					<td><textarea id="d6m6"></textarea></td>
					<td><textarea id="d7m6"></textarea></td>
				</tr>
				<tr>
					<td colspan="4"><textarea id="note"></textarea></td>
				</tr>
			</tbody>
		</table>
		<div style="text-align: center;">
			<button onclick="javascript:saveChart('');">Save</button>
			<button onclick="javascript:saveChart('1');">Save & email </button>
		</div>
		
		<div style="float: left;padding: 15px;width: calc(100% - 30px);">
			<span style="float: left;width: 33%;font-weight: bold;">
				www.gethealthierlife.com
			</span>
			<span style="float: left;text-align: center;width: 33%;font-weight: bold;color: red;">
				Not for medico legal purpose
			</span>
			<span style="float: right;width: 29%;text-align: right;">
				&#x00040;: dt.eshasinghal@gmail.com
			</span>
		</div>
	</div>
</body>
</html>