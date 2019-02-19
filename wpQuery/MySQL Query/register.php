<?php
    
include("db.php");

$email = $_POST['email'];

$fullname = $_POST['fullname'];

$phonenumber = $_POST['phonenumber'];

$yourgoal = $_POST['yourgoals'];

$message = $_POST['message'];


$GetInTouchUsername = $_POST['GetInTouchUserName'];

$GetInTouchUserEmail = $_POST['GetInTouchUserEmail'];

$SQLA="insert into AdAbravelabUserData
    (Email, FullName, PhoneNumber, YourGoal, Message)
    values
    ('".$email."', '".$fullname."', '".$phonenumber."', '".$yourgoal."', '".$message."')";

$exeSQLA=mysqli_query($conn, $SQLA) or die(mysqli_error($conn));
include 'thanks.html';


$SQLA="insert into AdGetInTouchUserData
    (UserName, UserEmail)
    values
    ('".$GetInTouchUsername."', '".$GetInTouchUserEmail."')";

$exeSQLA=mysqli_query($conn, $SQLA) or die(mysqli_error($conn));
include 'thanks.html';
    

?>


