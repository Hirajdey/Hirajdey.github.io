<?php
require 'config/db.php';
session_start();

if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    //echo "SELECT * FROM admin_login WHERE username = '".$_REQUEST['username']."' AND role = 'download_users_list' AND access = 1"; exit;
    //echo "SELECT * FROM admin_login WHERE username = '".$_REQUEST['username']."' AND password = '".$_REQUEST['password']."' AND access = 1"; exit;
    $questionnaire = $conn->query("SELECT * FROM admin_login WHERE username = '".$_REQUEST['username']."' AND password = '".$_REQUEST['password']."' AND access = 1");

    $permission = $conn->query("SELECT * FROM admin_login WHERE username = '".$_REQUEST['username']."' AND password = '".$_REQUEST['password']."' AND access = 1");
    $row = $permission->fetch_assoc();
    $_SESSION['role'] = $row['role'];

    if($questionnaire->num_rows > 0) {
        $_SESSION['username'] = $_REQUEST['username'];
        echo 1;
    }
    else {
        echo 0;
    }
}
?>