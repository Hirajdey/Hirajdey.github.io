<?php
require 'config/config.php';
require 'config/db.php';
require('mailer/class.smtp.php');
require('mailer/class.phpmailer.php');
require('mailer/PHPMailerAutoload.php');

if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['phone'])) {

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
    $_REQUEST['subject'] = "Doctors Detail";
    $_REQUEST['to'] = "ajmeer.m@medgenome.com";
    //$_REQUEST['to'] = "raghu.n@medgenome.com";
    $_REQUEST['note'] = "Name: ".$_REQUEST['name']."<br>"."Email: ".$_REQUEST['email']."<br>"."Phone: : ".$_REQUEST['phone'];

    $mail->SetFrom($_REQUEST['email']);
    $mail->Subject = $_REQUEST['subject'];
    $mail->Body = "Hi".",<br><br>"." ".$_REQUEST['note']."<br><br>Medgenome Labs";
    $mail->AddAddress($_REQUEST['to']);

    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo 1;
}
?>