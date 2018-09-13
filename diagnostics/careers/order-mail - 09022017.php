<?php
$data = json_decode(file_get_contents("php://input"));

$to = "ajmeer.m@medgenome.com";
$subject = "Order";
$message = "Hi, \r\n\r\nEmail: ".$_REQUEST['email']."\r\nMobile: ".$_REQUEST['mobile']."\r\nOrganization: ".$_REQUEST['organization']."\r\n\r\nMedgenome Labs Pvt Ltd\r\nSupport Team";
$headers = "From: ".$_REQUEST['email'];
$headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
$headers .= "Mime-Version: 1.0 \r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable \r\n";

if(@mail($to,$subject,$message,$headers))
{
	echo "success";
}else{
	echo "failed";
}
?>