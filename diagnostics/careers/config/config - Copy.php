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

function getLocationInfoByIp($site_path){
    $ip = '';
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    if(isset($_REQUEST['us']) && $_REQUEST['us'] == 1)
        $ip = "72.229.28.185"; // US ip

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    if($ip_data->geoplugin_countryCode == "US")
        //header("Location:$site_path/service.php");
        echo "<script>window.location='service.php'</script>";
}
?>