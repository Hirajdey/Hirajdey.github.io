<?php
ob_start();
if((isset($_SERVER['HTTP_HOST'])) && ($_SERVER['HTTP_HOST']) == "localhost") {
   //$site_path = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
    $site_path = "http://localhost/claria";
}
elseif($_SERVER['HTTP_HOST'] == "medgenome.com")
    $site_path = "http://medgenome.com";
elseif($_SERVER['HTTP_HOST'] == "diagnostics.medgenome.com")
    $site_path = "https://diagnostics.medgenome.com";
else
    $site_path = "https://medgenome.staging.wpengine.com/diagnostics";

$current_month = strtolower(date('MY'));
?>