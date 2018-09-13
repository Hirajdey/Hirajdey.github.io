<?php
require 'config/config.php';
require 'config/db.php';

if(isset($_REQUEST['cmetype']) && $_REQUEST['cmetype'] == "upcoming") {
    $data = '';
    //echo "SELECT * FROM events WHERE date > CURRENT_DATE() AND (date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY date DESC"; exit;
    $upcoming_events = $conn->query("SELECT * FROM cme WHERE date > CURRENT_DATE() AND (date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY date DESC");
    if($upcoming_events->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $upcoming_events->fetch_assoc()){

            $date = "";
            if(isset($row['date']))
                $date = date_format(date_create($row['date']),"M d");

            $data .= '{"title":"'.$row['title'].'", "venue":"'.$row['venue'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
}elseif(isset($_REQUEST['cmetype']) && $_REQUEST['cmetype'] == "recent") {
    $data = '';
    //echo "SELECT * FROM events WHERE (date BETWEEN DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY date DESC"; exit;
    $recent_events = $conn->query("SELECT * FROM cme WHERE (date BETWEEN DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY date DESC");
    if($recent_events->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $recent_events->fetch_assoc()){

            $date = "";
            if(isset($row['date']))
                $date = date_format(date_create($row['date']),"M d");

            $data .= '{"title":"'.$row['title'].'", "left_title":"'.$row['left_title'].'", "date":"'.$date.'", "end_date":"'.$end_date.'", "venue":"'.$row['venue'].'", "content":"'.$row['content'].'", "image1":"'.$row['image1'].'", "url":"'.$row['url'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
}elseif(isset($_REQUEST['cmetype']) && $_REQUEST['cmetype'] == "past") {
    $data = '';
    //echo "SELECT * FROM events WHERE date < CURRENT_DATE() AND (date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY date DESC"; exit;
    $past_events = $conn->query("SELECT * FROM cme WHERE date < CURRENT_DATE() AND (date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY date DESC");
    if($past_events->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $past_events->fetch_assoc()){ //echo "test"; exit;

            $date = "";
            if(isset($row['date']))
                $date = date_format(date_create($row['date']),"dS F Y");

            if(isset($row['start_time']))
                $start_time = date_format(date_create($row['start_time']),"h:ia");

            if(isset($row['end_time']))
                $end_time = date_format(date_create($row['end_time']),"h:ia");

            $time = $start_time." - ".$end_time;

            $data .= '{"id":"'.$row['id'].'", "title":"'.$row['title'].'", "date":"'.$date.'", "time":"'.$time.'", "venue":"'.$row['venue'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
}elseif(isset($_REQUEST['cmeid'])){
    $agenda = $conn->query("SELECT * FROM cme_agenda WHERE cme_id = ".$_REQUEST['cmeid']);
    $agenda_result = array();
    //echo $agenda->num_rows;
    if($agenda->num_rows > 0){
        while($row = $agenda->fetch_assoc()){
            $agenda_result[] = $row;
        }
        echo json_encode($agenda_result);
    }
}
?>