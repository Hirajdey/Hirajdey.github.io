<?php
require 'config/config.php';
require 'config/db.php';
require('mailer/class.smtp.php');
require('mailer/class.phpmailer.php');
require('mailer/PHPMailerAutoload.php');

if(isset($_REQUEST['email']) && isset($_REQUEST['mobile']) && isset($_REQUEST['organization'])) {

	// get test detail from DB
	//echo "SELECT * FROM disease_test WHERE code = '".$_REQUEST['code']."'"; exit;
	$diseases = $conn->query("SELECT * FROM disease_test WHERE code = '".$_REQUEST['code']."'");
	//echo "No. of Rows: ".$diseases->num_rows;
	if($diseases->num_rows > 0) {

		while($row = $diseases->fetch_assoc()){ //echo $row['code'];exit;
			$code = $row['code'];
			$test_name = $row['test_name'];
			$method = $row['method'];
			$tat = $row['tat'];
		}
		$table = "<table border='1'><th>Code</th><th>Test Name</th><th>Method</th><th>TAT</th><tr><td>$code</td><td>$test_name</td><td>$method</td><td>$tat</td></tr></table>";
	}
	// end

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true; // authentication enabled
	$mail->IsHTML(true);
	$mail->Username = "noreply@medgenome.com";
	$mail->Password = "noreply!mgm2#";

	$_REQUEST['from'] = $_REQUEST['email'];
	$_REQUEST['subject'] = "Order Detail";
	//$_REQUEST['to'] = "hiranjith.gh@medgenome.com";
	$_REQUEST['to'] = "diagnostics@medgenome.com";
	//$_REQUEST['to'] = "ajmeer.m@medgenome.com";
	//$_REQUEST['to'] = "aswath.haja@gmail.com";

	$test_code = (isset($_REQUEST['testcode']) && ($_REQUEST['testcode'] != 'undefined')) ? "<br>"."Test Code: ".$_REQUEST['testcode'] : '';

	$test_name = (isset($_REQUEST['testname']) && ($_REQUEST['testname'] != 'undefined')) ? "<br>"."Test Name: ".$_REQUEST['testname'] : '';

	$_REQUEST['note'] = $table."<br><br>"."Email: ".urldecode($_REQUEST['email'])."<br><br>"."Mobile: ".$_REQUEST['mobile']."<br><br>"."Organization: : ". urldecode($_REQUEST['organization'].$test_code.$test_name);

	$mail->SetFrom($_REQUEST['email']);
	$mail->Subject = $_REQUEST['subject'];
	$mail->Body = "Hi".",<br><br>"." ".$_REQUEST['note']."<br><br><br><b>Medgenome Labs</b>";
	//$mail->AddAddress($_REQUEST['to'], "aswath.haja@gmail.com");
	if($site_path == "http://diagnostics.medgenome.com") {
		$mail->AddAddress($_REQUEST['to']);
		$mail->AddCC("raghu.n@medgenome.com");
		$mail->AddCC("robin.a@medgenome.com");
	} else {
		$mail->AddAddress("ajmeer.m@medgenome.com");
	}

	if(!$mail->Send())
		echo "Mailer Error: " . $mail->ErrorInfo;
	else
		echo 1;
}
?>