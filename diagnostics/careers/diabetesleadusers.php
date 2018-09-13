<?php
require 'config/config.php';
require 'config/db.php';

if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['organization'])) {
    //echo "INSERT INTO diabetes_lead_users (name, email, organization, created_date) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['organization']."', NOW())"; exit;
    $user_register = $conn->query("INSERT INTO diabetes_lead_users (name, email, organization, designation, created_date) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['organization']."', '".$_REQUEST['designation']."', NOW())");
    echo 1;
}
?>