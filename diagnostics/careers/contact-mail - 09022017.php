<?php
$data = json_decode(file_get_contents("php://input"));

$to = "hiranjith.gh@medgenome.com";
$subject = "Order";
$message = "Hi, \r\n\r\nName: ".$data->name."\r\nEmail: ".$data->email."\r\nMessage: ".$data->message."\r\n\r\nMedgenome Labs Pvt Ltd\r\nSupport Team";
$headers = "From: ".$data->email;
$headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
$headers .= "Mime-Version: 1.0 \r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable \r\n";
$headers .= "Cc:ganesh.mahajan@medgenome.com \n";

if(@mail($to,$subject,$message,$headers))
{
	echo "success";
}else{
	echo "failed"; 
}
?>