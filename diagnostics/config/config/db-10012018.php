<?php
if((isset($_SERVER['HTTP_HOST'])) && ($_SERVER['HTTP_HOST']) == "localhost") {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medgenome";
}
elseif($_SERVER['HTTP_HOST'] == "www.medgenome.com") {

	//Production DB connection
	$servername = "localhost";
	$username = "mysamusr";
	$password = "MySQm7nomI*mJ";
	$dbname = "myisam";

	$site_path = "http://medgenome.com";
}
elseif($_SERVER['HTTP_HOST'] == "staging.medgenome.com" || $_SERVER['HTTP_HOST'] == "staging.us.medgenome.com") {

	//Staging DB connection
	$servername = "localhost";
	$username = "stgmedgenome";
	$password = "U7HKQ9#$%#M";
	$dbname = "medgenomestg";

	$site_path = "http://staging.medgenome.com";
}
elseif($_SERVER['HTTP_HOST'] == "diagnostics.medgenome.com" || $_SERVER['HTTP_HOST'] == "diagnostics.medgenome.com") { 

	//Staging DB connection
	$servername = "localhost";
	$username = "stgmedgenome";
	$password = "U7HKQ9#$%#M";
	$dbname = "medgenomestg";

	$site_path = "http://diagnostics.medgenome.com";
}
else
	$site_path = $_SERVER['HTTP_HOST'];


/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medgenome";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Database Connection failed: " . $conn->connect_error);
}
?>