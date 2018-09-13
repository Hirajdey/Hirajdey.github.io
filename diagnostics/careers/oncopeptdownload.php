<?php
require 'config/config.php';
require 'config/db.php';
session_start();

if(isset($_REQUEST['name']) && isset($_REQUEST['password']) && isset($_REQUEST['email']) && isset($_REQUEST['organization'])) {
    //echo "INSERT INTO oncopept_download_users (name, email, password, organization, designation, created_date) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['organization']."', '".$_REQUEST['designation']."', NOW())"; exit;
    $user_register = $conn->query("INSERT INTO oncopept_download_users (name, email, password, organization, designation, created_date) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['organization']."', '".$_REQUEST['designation']."', NOW())");
    echo 1;
}elseif(isset($_REQUEST['loginemail']) && isset($_REQUEST['loginpassword'])){
    $login = $conn->query("SELECT * FROM oncopept_download_users WHERE email = '".$_REQUEST['loginemail']."' AND password = '".$_REQUEST['loginpassword']."'");
    //echo $num_rows = ($login->num_rows > 0) ? 1 : 0;
    if($login->num_rows > 0) {
        $row = $login->fetch_assoc();
        $_SESSION['username'] = $row['name'];
        echo 1;
    }
    else {
        echo 0;
    }
} elseif(isset($_REQUEST['forgotpasswordemail'])){
    $forgot_password = $conn->query("SELECT name, password FROM oncopept_download_users WHERE email = '".$_REQUEST['forgotpasswordemail']."'");
    //echo $num_rows = ($login->num_rows > 0) ? 1 : 0;
    if($forgot_password->num_rows > 0) {
        $row = $forgot_password->fetch_assoc();

        // password send to corresponding mail id
        require('oncopeptresources/class.smtp.php');
        require('oncopeptresources/class.phpmailer.php');
        require('oncopeptresources/PHPMailerAutoload.php');

        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true; // authentication enabled
        $mail->IsHTML(true);
        $mail->Username = "noreply@medgenome.com";
        $mail->Password = "noreply!mgm2#";

        $_REQUEST['from'] = "admin@medgenome.com";
        $_REQUEST['subject'] = "Password for OncoPept Login";
        $_REQUEST['to'] = $_REQUEST['forgotpasswordemail'];
        $_REQUEST['note'] = "This is your password: ".$row['password'];

        $mail->SetFrom($_REQUEST['from']);
        $mail->Subject = $_REQUEST['subject'];
        $mail->Body = "Hi ".$row['name'].",<br><br>"." ".$_REQUEST['note']."<br><br>Medgenome Labs";
        $mail->AddAddress($_REQUEST['to']);

        if(!$mail->Send())
            echo "Mailer Error: " . $mail->ErrorInfo;
        else
            echo 1;

        // end forgot password
    }
    else {
        echo 0;
    }

}
?>