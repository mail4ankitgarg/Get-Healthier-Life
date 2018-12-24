<?php
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name

if((isset($_POST["email"]))&&(!empty($_POST["email"]))){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$apptfor = $_POST['apptfor'];
	$aaptime = $_POST['aaptime'];
	$queries = $_POST['queries'];
	$selecteddoctor = $_POST['selecteddoctor'];

	
	//$to = "swc@gethealthierlife.com";
	$to = "mail4ankitgarg@gmail.com";
	$to = $selecteddoctor;
	$subject = "HTML email";

	$message = "
	<html>
	<head>
		<title>Appointment Booked</title>
	</head>
	<body>
	<table border='1'>
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
	</table>
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
	$patientmail->Subject = "Your appointment has been booked with ".ucwords($apptfor)." for  ".date('d/m/Y')." at ".$aaptime; //Subject od your mail
	$patientmail->AddAddress($email, $name); //To address who will receive this email
	$patientmail->MsgHTML($message); //Put your body of the message you can place html code here
	
	//$patientmail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	$send = $patientmail->Send(); //Send the mails

}else{
echo "Please enter your email address.!!";
}
?>