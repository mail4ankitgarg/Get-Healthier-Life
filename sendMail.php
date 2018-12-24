<?php

include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
include('config.php');
if((isset($_POST["email"]))&&(!empty($_POST["email"]))){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$apptfor = $_POST['apptfor'];
	$aaptime = $_POST['aaptime'];
	$queries = $_POST['queries'];
	$selecteddoctor = $_POST['selecteddoctor'];
	$apptDate=date('Y-m-d');
	
	//$to = "swc@gethealthierlife.com";
	$to = "mail4ankitgarg@gmail.com";
	
	//$to = $selecteddoctor;
	$subject = "HTML email";
	$sql="insert into appointment_list (name,phone,email,apptfor,apptime,apptdate,queries) values ('".$name."','".$phone."','".$email."','".$apptfor."','".$aaptime."','".$apptDate."','".addslashes($queries)."')";
	mysql_query($sql);
	
	//$to = "swc@gethealthierlife.com";
	$to = "mail4ankitgarg@gmail.com";
	$to = $selecteddoctor;
	$subject = "HTML email";

/* $message = "
<html>
	<head>
		<title>Appointment Booked</title>
	</head>

	<body  background-image='http://www.gethealthierlife.com/images/appt14.jpg'>
		
		<span style='font-size: 20px;font-weight: bold;color: maroon;margin-left: 2px;'> Hello ".ucwords($name).", </span>
		<br>
		<br>
		<span style='font-size: 20px;font-weight: bold;color: maroon;margin-left: 40px;'> Thank you for booking an appointment, kindly reach 10 minutes before your appointment time!</span>
		
		<table style='border: 3px solid maroon; border-collapse: separate; width: 70%; margin-left: 15%; margin-right: 15%; margin-top: 3%; margin-bottom: 10%;' cellspacing='2' cellpadding='2'>
			
			<tbody style='background-color:#dbe8e9;font-size:20px;'>
				<tr>
					<th>Name</th>
					<th>".$name."</th>
				</tr>
				<tr>
					<th>Phone</th>
					<th>".$phone."</th>
				</tr>
				<tr>
					<th>Email</th>
					<th>".$email."</th>
				</tr>
				<tr>
					<th>Appt. For</th>
					<th>".$apptfor."</th>
				</tr>
				<tr>
					<th>Appt. Time</th>
					<th>".$aaptime."</th>
				</tr>	
				<tr>
					<th colspan='2'>".$queries."</th>
				</tr>
			</tbody>

		</table>
		
		<span style='font-size: 16 px; font-weight: bold; color: Black;margin-left: 2px;'> Thanks, </span>
		<br>
		<span style='font-size: 16 px;color: Black;margin-left: 2px;'> Dietitian Esha Singhal</span>
		<br>
		<span style='font-size: 16 px;color: Black;margin-left: 2px;'> 9654462825</span>
		<br>
		<span style='font-size: 16 px;margin-left: 5px;'> www.gethealthierlife.com</span>
		<br>
		<span style='font-size: 16 px;margin-left: 5px;'> FF-32, Galleria market old, Crossisng Republik, Ghaziabad, 201016</span>
	</body>
</html>
	"; */

	
$message='<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
	<head>
			<title>Appointment email</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
			<meta name="format-detection" content="telephone=no">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<style type="text/css">
			body {
				margin: 0 !important;
				padding: 0 !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
			}
			img {
				border: 0 !important;
				outline: none !important;
			}
			p {
				Margin: 0px !important;
				Padding: 0px !important;
			}
			table {
				border-collapse: collapse;
				mso-table-lspace: 0px;
				mso-table-rspace: 0px;
			}
			td, a, span {
				border-collapse: collapse;
				mso-line-height-rule: exactly;
			}
			.ExternalClass * {
				line-height: 100%;
			}
			.em_defaultlink a {
				color: inherit !important;
				text-decoration: none !important;
			}
			span.MsoHyperlink {
				mso-style-priority: 99;
				color: inherit;
			}
			span.MsoHyperlinkFollowed {
				mso-style-priority: 99;
				color: inherit;
			}
			 @media only screen and (min-width:481px) and (max-width:699px) {
			.em_main_table {
				width: 100% !important;
			}
			.em_wrapper {
				width: 100% !important;
			}
			.em_hide {
				display: none !important;
			}
			.em_img {
				width: 100% !important;
				height: auto !important;
			}
			.em_h20 {
				height: 20px !important;
			}
			.em_padd {
				padding: 20px 10px !important;
			}
			}
			@media screen and (max-width: 480px) {
			.em_main_table {
				width: 100% !important;
			}
			.em_wrapper {
				width: 100% !important;
			}
			.em_hide {
				display: none !important;
			}
			.em_img {
				width: 100% !important;
				height: auto !important;
			}
			.em_h20 {
				height: 20px !important;
			}
			.em_padd {
				padding: 20px 10px !important;
			}
			.em_text1 {
				font-size: 16px !important;
				line-height: 24px !important;
			}
			u + .em_body .em_full_wrap {
				width: 100% !important;
				width: 100vw !important;
			}
			}
		</style>
	</head>
	<body class="em_body" style="margin:0px; padding:0px;" bgcolor="#000000">
		<table class="em_full_wrap" valign="top" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#fff" align="center">
			<tbody>
				<tr>
					<td valign="top" align="center">
						<table class="em_main_table" style="width:700px;" width="700" cellspacing="0" cellpadding="0" border="1"  align="center">
						<!--Header section-->
							<tbody>
								
								<tr>
									<td valign="top" align="center">
										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
											<tbody>
												<tr>
													<td style="color: maroon;font-size: 20px;padding: 5px 0px 5px 0px;" align="center" bgcolor="#fffcf9">
														Your applointmet with "Dt. Esha singhal" has been booked Successfully !
													</td>
												</tr>
												<tr>
													<td style="background-image:url(http://gethealthierlife.com/images/appt5.jpg); height:350px;" valign="top" align="center" >
													<div style="font-size: 38px;color: #d4e01d;text-align: left;padding: 41px 0px 0px 20px;font-family: cursive;">
													Eat healthy Be Healthy !
													</div>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							 
							<!--Content Text Section-->
								<tr>
									<td style="padding:35px 70px 30px;" class="em_padd" valign="top" bgcolor="#0b5353" align="center">
<span style="font-size:20px; line-height:30px; color:#ffffff;" >Thank you for booking an appointment, kindly reach 10 minutes before your appointment time !
													</span>

										<table style="border-color: #ffff02; margin-top: 15px;" width="100%" cellspacing="0" cellpadding="0" border="1" align="left">
											<tbody>
												
												
												<tr>
													<td style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top">Name</td>
													<td style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top">'.$name.'</td>
														
												</tr>
												<tr>
													<td style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top">Phone</td>
													<td style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top">'.$phone.'</td>
												</tr>
												<tr>
													<td  style="font-family:Open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top">Email</td>
													<td  style="font-family:open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top">'.$email.'</td>
												</tr>
												<tr>
													<td style="font-family:open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59;letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top"> Appt For</td>
													<td style="font-family:open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59;letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top"> '.$apptfor.'</td>
												</tr>
												<tr>
													<td style="font-family:open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top"> Appt Time</td>
													<td style="font-family:open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59; letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top"> '.$aaptime.'</td>
												</tr>
												<tr>
													<td  colspan="2" style="font-family:open Sans, Arial, sans-serif; font-size:18px; line-height:22px; color:#fbeb59;letter-spacing:2px; padding:4px 0px 0px 10px;" valign="top"> '.addslashes($queries).'</td>
													
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							 
							<!--//Content Text Section--> 
							<!--Footer Section-->
								<tr>
									<td style="padding:38px 30px;" class="em_padd" valign="top" bgcolor="#fffcf9" align="center">
										<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
											<tbody>
												<tr>
													<td style="font-size:20px; line-height:30px; color:#890f0f;" align="center"> Thanks & Regards | Dietitian Esha Singhal<br>
													
													<a href="http://gethealthierlife.com" target="_blank" style="color:#0f53c9; text-decoration:underline;">www.gethealthierlife.com</a><br>
													
													FF-32, Galleria market old, Crossing Republik, Ghaziabad, 201016 </td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
			<div class="em_hide" style="white-space: nowrap; display: none; font-size:0px; line-height:0px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
	</body>
</html>';


	
	$mail = new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo($email, "reply message head"); //reply-to address
	$mail->SetFrom($email, "Appointment message"); //From address of the mail

	// put your while loop here like below,
	$mail->Subject = "Appointment booked by ".ucwords($name)." at ".$aaptime." on ".date('d/m/Y'); //Subject od your mail
	$mail->AddAddress($to, "ankit"); //To address who will receive this email
	$mail->MsgHTML($message); //Put your body of the message you can place html code here

	//$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		echo 'Your appointment has been booked successfully !!';
	}
	else{
		echo "Appointment can't be booked at this time. Please try again!!";
	}

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

	//$patientmail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	$send = $patientmail->Send(); //Send the mails
}
	else{
		echo "Please enter your email address.!!";
}

?>