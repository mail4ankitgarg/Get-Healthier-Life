 <?php

include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
include('config.php');
if((isset($_POST["savechart"]))&&(!empty($_POST["savechart"]))){
	$returnArr = array('status'=>'fail','msg'=>'Somthing is wrong, please contact to admin.');
	$patientId = $_POST["patientId"];
	$formDataArr = $_POST["formData"];
	$emailFlag = $_POST["emailFlag"];
	
	foreach($formDataArr as $key => $value){
		$fields[] = $key;
		//$values[] = "'" . mysql_real_escape_string($value) . "'";
		$values[] = "'" . mysqli_real_escape_string($con,$value) . "'";
	}

	$fields = "patient_id,".implode(",", $fields).",date_added,added_by";
    $values = $patientId.",".implode(",", $values).",'".Date("Y-m-d H:i:s")."',1";
	$sql = "Insert into chart_details ($fields) values ($values)";
	//$result=mysql_query($sql);
	$result=mysqli_query($con,$sql);
	$id = mysqli_insert_id($con);
	if($id){
		$hrml = getHtmlForPdf($con,$id);
		$filename = "patientId_".$patientId."_id_".$id."_".Date("ymdHis").".pdf";
		generatepdf($hrml,$filename);
		if(file_exists("downloadpdf/".$filename)){
			$updateSql = "update chart_details set file_path ='".$filename."' where id=".$id;
			//$result=mysqli_query($sql);
			$result=mysqli_query($con,$updateSql);
		}
		
		$returnArr['status'] = 'success';
		$returnArr['msg'] = 'Chart saveed succesfully.';
		
		if($emailFlag=="1"){
			//$pdfsent = sendAttachPdf();
			if($pdfsent){
				$returnArr['status'] = 'success';
				$returnArr['msg'] = 'Chart saveed and sent.';
			}else{
				$returnArr['status'] = 'success';
				$returnArr['msg'] = 'Chart saveed but not sent.';
			}
		}
	}
	echo json_encode($returnArr);
}

function generatepdf($htmlPage,$filename){
	require_once __DIR__ . '/vendor/autoload.php';
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($htmlPage);
	$mpdf->Output("downloadpdf/".$filename);
}

function getHtmlForPdf($con,$id){
	$sql="select * from chart_details where id=".$id;
	//$result=mysql_query($sql);
	//$row = mysql_fetch_assoc($result);
	
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	
	if($row){
		$html='<html>
	<head>
		<style>
			
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
		<div style="float: left;padding: 15px;width: calc(100% - 30px);">
			<span style="float: left;width: 90%; font-size:20px; font-weight: bold; text-align: center;">
				Prepared By:  Dt.'.$_SESSION['USERNAME'].'<br>
				<span style="color:red;">Dietitian Nutritionist</span>
			</span>
			
			<span style="float: right;width: 10%;text-align: right;">
				'.Date("d-m-Y").'
			</span>
		</div>
		<table class="cinereousTable" cellpadding="0" cellspacing="0">
			<thead>
				<tr style="width:734px;">
					<th width="94px">&nbsp;</th>
					<th width="200px">Sunday</th>
					<th width="200px">Monday</th>
					<th width="200px">Tuesday</th>
				</tr>
			</thead>
		
			<tbody>
				<tr>
					<td>E.morning </td>
					<td>'.$row['d1m1'] ? $row['d1m1'] : '&nbsp'.'</td>
					<td>'.$row['d2m1'] ? $row['d2m1'] : '&nbsp'.'</td>
					<td>'.$row['d3m1'] ? $row['d3m1'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>Breakfast </td>
					<td>'.$row['d1m2'] ? $row['d1m2'] : '&nbsp'.'</td>
					<td>'.$row['d2m2'] ? $row['d2m2'] : '&nbsp'.'</td>
					<td>'.$row['d3m2'] ? $row['d3m2'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>M.Morning</td>
					<td>'.$row['d1m3'] ? $row['d1m3'] : '&nbsp'.'</td>
					<td>'.$row['d2m3'] ? $row['d2m3'] : '&nbsp'.'</td>
					<td>'.$row['d3m3'] ? $row['d3m3'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>Lunch </td>
					<td>'.$row['d1m4'] ? $row['d1m4'] : '&nbsp'.'</td>
					<td>'.$row['d2m4'] ? $row['d2m4'] : '&nbsp'.'</td>
					<td>'.$row['d3m4'] ? $row['d3m4'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>Evening </td>
					<td>'.$row['d1m5'] ? $row['d1m5'] : '&nbsp'.'</td>
					<td>'.$row['d2m5'] ? $row['d2m5'] : '&nbsp'.'</td>
					<td>'.$row['d3m5'] ? $row['d3m5'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>Dinner </td>
					<td>'.$row['d1m6'] ? $row['d1m6'] : '&nbsp'.'</td>
					<td>'.$row['d2m6'] ? $row['d2m6'] : '&nbsp'.'</td>
					<td>'.$row['d3m6'] ? $row['d3m6'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>Note:-</td>
					<td colspan="3">&nbsp;</td>
				</tr>
			</tbody>
		</table>
		<section>
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
		</section>
		
		
<!-----------------------------Break------------------>		
		
		<div style="float: left;padding: 15px;width: calc(100% - 30px);">
			<span style="float: left;width: 90%; font-size:20px; font-weight: bold; text-align: center;">
				Prepared By:  Dt. Esha Singhal<br>
				<span style="color:red;">Dietitian Nutritionist</span>
			</span>
			
			<span style="float: right;width: 10%;text-align: right;">
				17-12-2018
			</span>
		</div>
		<table class="cinereousTable" cellpadding="0" cellspacing="0">
			<thead>
				<tr style="width:734px;">
					<th width="174px">Wednesday</th>
					<th width="174px">Thursday</th>
					<th width="173px">Friday</th>
					<th width="173px">Saturday</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>'.$row['d4m1'] ? $row['d4m1'] : '&nbsp'.'</td>
					<td>'.$row['d5m1'] ? $row['d5m1'] : '&nbsp'.'</td>
					<td>'.$row['d6m1'] ? $row['d6m1'] : '&nbsp'.'</td>
					<td>'.$row['d7m1'] ? $row['d7m1'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>'.$row['d4m2'] ? $row['d4m2'] : '&nbsp'.'</td>
					<td>'.$row['d5m2'] ? $row['d5m2'] : '&nbsp'.'</td>
					<td>'.$row['d6m2'] ? $row['d6m2'] : '&nbsp'.'</td>
					<td>'.$row['d7m2'] ? $row['d7m2'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>'.$row['d4m3'] ? $row['d4m3'] : '&nbsp'.'</td>
					<td>'.$row['d5m3'] ? $row['d5m3'] : '&nbsp'.'</td>
					<td>'.$row['d6m3'] ? $row['d6m3'] : '&nbsp'.'</td>
					<td>'.$row['d7m3'] ? $row['d7m3'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>'.$row['d4m4'] ? $row['d4m4'] : '&nbsp'.'</td>
					<td>'.$row['d5m4'] ? $row['d5m4'] : '&nbsp'.'</td>
					<td>'.$row['d6m4'] ? $row['d6m4'] : '&nbsp'.'</td>
					<td>'.$row['d7m4'] ? $row['d7m4'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>'.$row['d4m5'] ? $row['d4m5'] : '&nbsp'.'</td>
					<td>'.$row['d5m5'] ? $row['d5m5'] : '&nbsp'.'</td>
					<td>'.$row['d6m5'] ? $row['d6m5'] : '&nbsp'.'</td>
					<td>'.$row['d7m5'] ? $row['d7m5'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td>'.$row['d4m6'] ? $row['d4m6'] : '&nbsp'.'</td>
					<td>'.$row['d5m6'] ? $row['d5m6'] : '&nbsp'.'</td>
					<td>'.$row['d6m6'] ? $row['d6m6'] : '&nbsp'.'</td>
					<td>'.$row['d7m6'] ? $row['d7m6'] : '&nbsp'.'</td>
				</tr>
				<tr>
					<td colspan="4">'.$row['note'] ? $row['note'] : '&nbsp'.'</textarea></td>
				</tr>
			</tbody>
		</table>
		
		
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
		
	</body>
</html>';
	}else{
		$html="";
	}
	return $html;
}


function sendAttachPdf($selecteddoctor,$apptfor){
	
	$message = "html";
	
	$patientmail = new PHPMailer; // call the class 
	$patientmail->IsSMTP(); 
	$patientmail->Host = SMTP_HOST; //Hostname of the mail server
	$patientmail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$patientmail->SMTPAuth = true; //Whether to use SMTP authentication
	$patientmail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$patientmail->Password = SMTP_PWORD; //Password for SMTP authentication
	$patientmail->AddReplyTo($selecteddoctor, $apptfor); //reply-to address
	$patientmail->SetFrom($selecteddoctor, "Appointment message"); //From address of the mail

	// put your while loop here like below,
	$patientmail->Subject = "Your appointment has been booked with ".ucwords($apptfor)." for  ".date('d/m/Y')." at ".$aaptime;//Subject od your mail
	$patientmail->AddAddress($email, $name); //To address who will receive this email
	$patientmail->MsgHTML($message); //Put your body of the message you can place html code here

	$patientmail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	return $send = $patientmail->Send(); //Send the mails
}


