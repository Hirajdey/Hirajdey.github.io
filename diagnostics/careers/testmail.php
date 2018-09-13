<?php
$to = "ajmeer.m@medgenome.com";
$subject = "Order";
$message = "Hi, Support Team";
$headers = "From: raghu.n@medgenome.com";
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