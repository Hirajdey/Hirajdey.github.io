<?php
//echo file_get_contents('php://input');
$datas = json_decode(file_get_contents('php://input'));
//print_r($datas->user->total);exit;
echo $row = file_get_contents('php://input');

foreach($datas->user as $data) {
    echo $data;
}
