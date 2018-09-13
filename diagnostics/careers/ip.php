<?php
function getLocationInfoByIp(){
    $ip = '';
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('country'=>'', 'city'=>'');
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    echo "IP Address: ".$ip;
    $ip = (isset($ip) && $ip == "::1") ? $_REQUEST['ip'] : $ip;
    //$ip = "119.160.249.35"; // // for taiwan ip address
    //$ip = "72.229.28.185"; // for us ip address
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    echo "<pre>";print_r($ip_data);
    //echo $ip_data->geoplugin_countryCode;
    if($ip_data->geoplugin_countryCode == "US")
            echo "US Ip address";
    else
            echo "Other IP address";
    exit;

    print_r($result);
    //return $result;
}

getLocationInfoByIp();
?>