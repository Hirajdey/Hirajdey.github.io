<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medgenome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Database Connection failed: " . $conn->connect_error);
}

// If you need to parse XLS files, include php-excel-reader
require('php-excel-reader/excel_reader2.php');

require('SpreadsheetReader.php');

$Reader = new SpreadsheetReader('sample.xlsx');
foreach ($Reader as $Row)
{
	echo "<pre>";
	print_r($Row);
}
?>