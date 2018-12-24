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

$message = "
<html>
	<head>
		<title>Appointment Booked</title>
	</head>

	<body  background='http://www.gethealthierlife.com/images/appt14.jpg'>
		
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
		<span style='font-size: 16 px;margin-left: 5px;'> FF-32, Gllaria market old, Crossisng Republik, Ghaziabad, 201016</span>
	</body>
</html>
	";

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