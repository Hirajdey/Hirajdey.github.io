<?php
	//Production DB connection
	$servername = "medgenome.com";
	$username = "mysamusr";
	$password = "MySQm7nomI*mJ";
	$dbname = "myisam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Database Connection failed: " . $conn->connect_error);
} else{
	echo "Connection Established";
}
?>