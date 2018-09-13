<?php
ob_start();
if((isset($_SERVER['HTTP_HOST'])) && ($_SERVER['HTTP_HOST']) == "localhost") {
   $site_path = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
}
elseif($_SERVER['HTTP_HOST'] == "medgenome.com" || $_SERVER['HTTP_HOST'] == "www.medgenome.com")
    $site_path = "http://medgenome.com";
else
    $site_path = "http://staging.medgenome.com";

$current_month = strtolower(date('F'));
?>

