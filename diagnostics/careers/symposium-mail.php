<?php
require 'config/config.php';
require 'config/db.php';
require('mailer/class.smtp.php');
require('mailer/class.phpmailer.php');
require('mailer/PHPMailerAutoload.php');

if(isset($_REQUEST['name']) && isset($_REQUEST['organization']) && isset($_REQUEST['email'])) {
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true; // authentication enabled
	$mail->IsHTML(true);
	$mail->Username = "noreply@medgenome.com";
	$mail->Password = "noreply!mgm2#";
	$research = '';

	$_REQUEST['from'] = $_REQUEST['email'];
	$_REQUEST['subject'] = "Symposium Registration";
	$_REQUEST['to'] = "hiranjith.gh@medgenome.com";
	//$_REQUEST['to'] = "vinay.cg@medgenome.com";
	//$_REQUEST['to'] = "ajmeer.m@medgenome.com";
	//$test_mail = "vinay.cg@medgenome.com";
	$test_mail = "ajmeer.m@medgenome.com";
	if(isset($_REQUEST['research']))
		$research = "Research: ". urldecode($_REQUEST['research']);
	$_REQUEST['note'] = "Name: ".urldecode($_REQUEST['name'])."<br><br>"."Organisation: ".urldecode($_REQUEST['organization'])."<br><br>"."Email: ". urldecode($_REQUEST['email'])."<br><br>".$research;

	$mail->SetFrom($_REQUEST['email']);
	$mail->Subject = $_REQUEST['subject'];
	$mail->Body = "Registration details".",<br><br><br>"." ".$_REQUEST['note']."<br><br><br><b>Medgenome Labs</b>";
	//$mail->AddAddress($_REQUEST['to'], "Medgenome");
	if($site_path == "http://diagnostics.medgenome.com") {
		$mail->AddAddress($_REQUEST['to'], "Medgenome");
	} else {
		$mail->AddAddress($test_mail);
	}

	if(!$mail->Send())
		echo "Mailer Error: " . $mail->ErrorInfo;
	else
		echo 1;
}
?>