<?php
	if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        
            {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }

// DB connection
$servername = "localhost";
$username = "mysamusr";
$password = "MySQm7nomI*mJ";
$dbname = "myisam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

if(isset($_REQUEST['act']) && $_REQUEST['act'] == "update"){
    $conn->query("UPDATE chat_users SET name='Haja' WHERE id = ".$_REQUEST['id']);
} elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == "add"){
    //$conn->query("INSERT INTO chat_users (image, name, status) VALUES ('ram.jpg', 'Ram', 'UI Developer, CTS')");
    $conn->query("INSERT INTO chat_users (image, name, status) VALUES ('demo.png', '".$_REQUEST['name']."', '".$_REQUEST['address']."')");
    echo "Record added successfully";
}
elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == "delete"){
    $conn->query("DELETE FROM chat_users WHERE id = ".$_REQUEST['id']);
}
else {
    $upcoming_events = $conn->query("SELECT * FROM chat_users");

    if ($upcoming_events->num_rows > 0) {
        $data = '{ "records":[';
        while ($row = $upcoming_events->fetch_assoc()) {

            $data .= '{"id":"' . $row['id'] . '", "image":"' . $row['image'] . '", "name":"' . $row['name'] . '", "created_date":"' . $row['created_date'] . '"},';
            $result[] = $row;
        }
        //print_r($result);
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';

        /*$fp = fopen('results.json', 'w');
        fwrite($fp, json_encode($result));
        fclose($fp);*/

        //echo $data; exit;
        echo json_encode($result);
        exit;
    } else {
        echo 0;
        exit;
    }
}
?>