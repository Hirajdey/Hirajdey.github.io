<?php
require 'config/config.php';
require 'config/db.php';

// mailer
require('mailer/class.smtp.php');
require('mailer/class.phpmailer.php');
require('mailer/PHPMailerAutoload.php');

// SMTP Config
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true; // authentication enabled
$mail->IsHTML(true);
$mail->Username = "noreply@medgenome.com";
$mail->Password = "noreply!mgm2#";

if(isset($_REQUEST['email']) && isset($_REQUEST['email']) && isset($_REQUEST['mobile']) && isset($_REQUEST['mobile'])) {
    // Check email is exist or not
    $check_email = $conn->query("SELECT id FROM user WHERE email_id = '".$_REQUEST['email']."'");
    if($check_email->num_rows > 0) {
        echo 1;exit;
    }

    // Contactc number is exist or not
    $check_mobile = $conn->query("SELECT id FROM user WHERE contact_no = '".$_REQUEST['mobile']."'");
    if($check_mobile->num_rows > 0) {
        echo 2; exit;
    }

    if($check_email->num_rows == 0 && $check_mobile->num_rows == 0) {
        // Activation key generate function
        function generateRandomString($length = 40) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        // End activation key generation

        // Create activation key
        $activation_key = generateRandomString();
        $activation_link = "$site_path/questionnaire.php?key=".$activation_key;

        // Activation link
        $_REQUEST['from'] = "admin@medgenome.com";
        $_REQUEST['subject'] = "Test Activation";
        $_REQUEST['to'] = $_REQUEST['email'];
        $_REQUEST['note'] = "Hi ". urldecode($_REQUEST['name']) .", <br><br>This is the activation link <a href='".$activation_link."'>click here</a><br><br>Medgenome Labs Pvt Ltd";

        $mail->SetFrom($_REQUEST['from']);
        $mail->Subject = $_REQUEST['subject'];
        $mail->Body = $_REQUEST['note'];
        $mail->AddAddress($_REQUEST['to']);

        if(!$mail->Send()) {
            //echo "Mailer Error: " . $mail->ErrorInfo;
            echo 3; exit;
        }
        else {
            //echo "INSERT INTO user (email_id, contact_no, ip, activation, activation_key, test_status, score, total_attended, test_result, over_all_rank, created_date) VALUES ('".$_REQUEST['email']."', '".$_REQUEST['mobile']."', '', 0, '".$activation_key."', 0, 0 ,0, 0, 0, NOW())"; exit;
            $user_register = $conn->query("INSERT INTO user (user_name, email_id, contact_no, ip, activation, activation_key, test_status, score, total_attended, test_result, over_all_rank, created_date) VALUES ('" . urldecode($_REQUEST['name']) . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['mobile'] . "', '', 0, '".$activation_key."', 0, 0 ,0, 0, 0, NOW())");
            echo 4; exit;
        }

        /*$to = $_REQUEST['email'];
        $subject = "Test Activation";
        $message = "Hi ". urldecode($_REQUEST['name']) .", <br><br>This is the activation link <a href='".$activation_link."'>click here</a><br><br>Medgenome Labs Pvt Ltd";
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'From: Medgenome <contact@medgenome.com>' . "\r\n";

        if(@mail($to,$subject,$message,$headers))
        {
            //echo "INSERT INTO user (email_id, contact_no, ip, activation, activation_key, test_status, score, total_attended, test_result, over_all_rank, created_date) VALUES ('".$_REQUEST['email']."', '".$_REQUEST['mobile']."', '', 0, '".$activation_key."', 0, 0 ,0, 0, 0, NOW())"; exit;
            $user_register = $conn->query("INSERT INTO user (user_name, email_id, contact_no, ip, activation, activation_key, test_status, score, total_attended, test_result, over_all_rank, created_date) VALUES ('" . urldecode($_REQUEST['name']) . "', '" . $_REQUEST['email'] . "', '" . $_REQUEST['mobile'] . "', '', 0, '".$activation_key."', 0, 0 ,0, 0, 0, NOW())");
            echo "success"; exit;
        }else{
            echo "failed"; exit;
        }*/
        // End of Activation link
    }
} else {
    $total_questions = 20;
    // build test results
    $test_answers = $conn->query("SELECT id, question, answer, options FROM questionnaire");
    if($test_answers->num_rows > 0) {
        while($row = $test_answers->fetch_assoc()){
            $answers[] = $row['id'].$row['answer'];
            $question[$row['id']] = $row['question'];
            $options[$row['id']] = explode("#", $row['options']);
        }
    }

    $correct_answers = 0;
    $wrong_answers = 0;
    $correct_questions = "";
    $wrong_questions = "";

    $correct_questions = "<table><tr><td style='font-size: 14px; font-weight: 600;'>Correct Answers</td></tr>";
    $wrong_questions = "<table><tr><td style='font-size: 14px; font-weight: 600;'>Wrong Answers</td></tr>";

    $arr = ["A"=>0,"B"=>1,"C"=>2,"D"=>3];
    for($x=1; $x<=$total_questions; $x++) {
        if(isset($_REQUEST["question$x"]) && ($_REQUEST["question$x"] != 'undefined')) {
            if (in_array($_REQUEST["question$x"], $answers)) {
                $correct_answers += 1; // Correct Answers
                // For get answer
                $answer = $options[$x][$arr[substr($_REQUEST["question1"], -1, 1)]];
                // End
                $correct_questions .= "<tr><td style='border: 2px solid black; padding: 10px;'>".$question[$_REQUEST["question$x"][0]]."</td> <td style='border: 2px solid black; padding: 10px;'>".$answer."</td></tr>";
            } else { //echo  $question[$_REQUEST["question$x"][0]];
                $wrong_answers += 1; // Wrong Answers
                $wrong_questions .= "<tr><td style='border: 2px solid black; padding: 10px;'>".$question[$_REQUEST["question$x"][0]]."</td> <td style='border: 2px solid black; padding: 10px;'>".substr($_REQUEST["question$x"], -1, 1)."</td></tr>";
            }
        }
    }
    $correct_questions .= "</table>";
    $wrong_questions .= "</table>";

    //echo substr($_REQUEST["question1"], 0, 1);
    //exit;
    $attended_questions = $correct_answers + $wrong_answers; // Attended questions
    $score = ($correct_answers / $total_questions) * 100 . "%"; // Score in percentage
    $test_status = 1; // Test status: completed = 1, not yet = 0
    $test_result = ($correct_answers >= 12) ? 1 : 0; // Test result: pass = 1, fail = 0
    // if they missed any questions
    $balance_question = $total_questions - $attended_questions;
    if($balance_question > 0 && $_REQUEST["missed_question"] != 1){
        echo "completed*".$correct_answers."*".$wrong_answers;
        exit;
    }

    // Update the result in user table
    if(isset($_REQUEST['id'])) {
        $conn->query("UPDATE user SET test_status = '" . $test_status . "', score = '" . $score . "', total_attended = '" . $attended_questions . "', test_result = '" . $test_result . "' WHERE id = '" . $_REQUEST['id'] . "'");
        $get_current_user = $conn->query("SELECT user_name, email_id, contact_no FROM user WHERE id = '".$_REQUEST['id']."'");
       $user = $get_current_user->fetch_assoc();
    }

    /*// Send the test result to admin
    //$to = 'karthikeyan.s@medgenome.com';
    $to = 'raghu.n@medgenome.com';
    $subject = "Test Result";
    $message = "Hi, Please find the details of Candidate and Exam below "."<br><br>"."
    Name: ".urldecode($user['user_name'])."
    <br>Email: ".$user['email_id']."
    <br>Mobile: ".$user['contact_no']."
    <br>Total Questions: 20
    <br>Questions Attended: ".$attended_questions."
    <br>Score: ".$score."
    <br>Result: ".(($correct_answers >= 12) ? 'Pass' : 'Failed')."
    <br><br>".$correct_questions."
    <br><br>Medgenome Labs Pvt Ltd";

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From: Medgenome <'.$user['email_id'].'>' . "\r\n";
    //$headers .= 'Cc: raghu.n@medgenome.com' . "\r\n";

    @mail($to,$subject,$message,$headers);
    // End of Send the test result to admin

    //echo "completed*".$correct_answers."*".$wrong_answers;

    // password send to corresponding mail id*/

    $_REQUEST['from'] = 'From: Medgenome <'.$user['email_id'].'>';
    $_REQUEST['subject'] = "Test Result";
    //$_REQUEST['to'] = 'raghu.n@medgenome.com';
    $_REQUEST['to'] = 'ajmeer.m@medgenome.com';
    $_REQUEST['note'] = "Please find the details of Candidate and Exam below "."<br><br>"."
    Name: ".urldecode($user['user_name'])."
    <br>Email: ".$user['email_id']."
    <br>Mobile: ".$user['contact_no']."
    <br>Total Questions: 20
    <br>Questions Attended: ".$attended_questions."
    <br>Score: ".$score."
    <br>Result: ".(($correct_answers >= 12) ? 'Pass' : 'Failed')."
    <br><br>".$correct_questions."";

    $mail->SetFrom($_REQUEST['from']);
    $mail->Subject = $_REQUEST['subject'];
    $mail->Body = "Hi".",<br><br>"." ".$_REQUEST['note']."<br><br>Medgenome Labs";
    $mail->AddAddress($_REQUEST['to']);

    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "completed*".$correct_answers."*".$wrong_answers;
}
?>