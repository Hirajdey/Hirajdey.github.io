<?php
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'd2vrulu4_abuserd');
DEFINE ('DB_PASSWORD', 'abravelabuserdata');
DEFINE ('DB_NAME', 'd2vrulu4_abravelabuserdata');

//Make Connection

$conn=@mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$conn)
{
    die('Did not connect to MySQL:' .mysqli_connect_error());
}
// select the database

mysqli_select_db($conn, DB_NAME);

?>


