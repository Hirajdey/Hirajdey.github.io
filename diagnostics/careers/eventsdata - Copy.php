<?php
require 'config/config.php';
require 'config/db.php';

if(isset($_REQUEST['eventtype']) && $_REQUEST['eventtype'] == "upcoming") {
    $data = '';
    //echo "SELECT * FROM events WHERE start_date > CURRENT_DATE() AND (start_date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC"; exit;
    $upcoming_events = $conn->query("SELECT * FROM events WHERE start_date > CURRENT_DATE() AND (start_date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC");
    if($upcoming_events->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $upcoming_events->fetch_assoc()){

            $start_date = "";
            if(isset($row['start_date']))
                $start_date = date_format(date_create($row['start_date']),"M d");

            $end_date = "";
            if($row['end_date'] != "0000-00-00")
                $end_date = " - ".date_format(date_create($row['end_date']),"M d, Y");
            else
                $end_date = date_format(date_create($row['start_date']),", Y");

            $data .= '{"title":"'.$row['title'].'", "left_title":"'.$row['left_title'].'", "start_date":"'.$start_date.'", "end_date":"'.$end_date.'", "venue":"'.$row['venue'].'", "content":"'.$row['content'].'", "image1":"'.$row['image1'].'", "url":"'.$row['url'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
}elseif(isset($_REQUEST['eventtype']) && $_REQUEST['eventtype'] == "recent") {
    $data = '';
    //echo "SELECT * FROM events WHERE (start_date BETWEEN DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC"; exit;
    $recent_events = $conn->query("SELECT * FROM events WHERE (start_date BETWEEN DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC");
    if($recent_events->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $recent_events->fetch_assoc()){

            $start_date = "";
            if(isset($row['start_date']))
                $start_date = date_format(date_create($row['start_date']),"M d");

            $end_date = "";
            if($row['end_date'] != "0000-00-00")
                $end_date = " - ".date_format(date_create($row['end_date']),"M d, Y");
            else
                $end_date = date_format(date_create($row['start_date']),", Y");

            $data .= '{"title":"'.$row['title'].'", "left_title":"'.$row['left_title'].'", "start_date":"'.$start_date.'", "end_date":"'.$end_date.'", "venue":"'.$row['venue'].'", "content":"'.$row['content'].'", "image1":"'.$row['image1'].'", "url":"'.$row['url'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
}elseif(isset($_REQUEST['eventtype']) && $_REQUEST['eventtype'] == "past") {
    $data = '';
    //echo "SELECT * FROM events WHERE start_date < CURRENT_DATE() AND (start_date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC"; exit;
    $past_events = $conn->query("SELECT * FROM events WHERE start_date < CURRENT_DATE() AND (start_date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC");
    if($past_events->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $past_events->fetch_assoc()){ //echo "test"; exit;

            $start_date = "";
            if(isset($row['start_date']))
                $start_date = date_format(date_create($row['start_date']),"M d");

            $end_date = "";
            if($row['end_date'] != "0000-00-00")
                $end_date = " - ".date_format(date_create($row['end_date']),"M d, Y");
            else
                $end_date = date_format(date_create($row['start_date']),", Y");

            $data .= '{"title":"'.$row['title'].'", "left_title":"'.$row['left_title'].'", "start_date":"'.$start_date.'", "end_date":"'.$end_date.'", "venue":"'.$row['venue'].'", "content":"'.$row['content'].'", "image1":"'.$row['image1'].'", "image2":"'.$row['image2'].'", "image3":"'.$row['image3'].'", "url":"'.$row['url'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
}
?>