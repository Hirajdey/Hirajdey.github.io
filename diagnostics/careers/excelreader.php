<?php

require 'config/db.php';

/*echo $table = "CREATE TABLE testing (
id INT(10) NOT NULL AUTO_INCREMENT, PRIMARY KEY (id),
name varchar(128) NOT NULL,
email varchar(128) NOT NULL,
organization varchar(128) NOT NULL,
designation varchar(50) NOT NULL,
created_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$query = $conn->query($table);
exit;*/

/*$input = "this is a test message";
echo $output = preg_replace('!\s+!', ' ', $input);
exit;*/
/*$str = 'foo   o';
$str = preg_replace('/\s\s+/', ' ', $str);
// This will be 'foo o' now
echo $str;
exit;*/

// If you need to parse XLS files, include php-excel-reader
require('spreadsheetreader/php-excel-reader/excel_reader2.php');

require('spreadsheetreader/SpreadsheetReader.php');

$Reader = new SpreadsheetReader('spreadsheetreader/sample.xlsx');

$create_table = '';
$field_name = '';
$values = '';

//$create_table = "DROP TABLE IF EXISTS igs_sequencing_data";
$create_table_start = "CREATE TABLE igs_sequencing_data (id INT(10) NOT NULL AUTO_INCREMENT, PRIMARY KEY (id),";
foreach ($Reader as $key=>$Row)
{
	//echo "<pre>";
	//print_r($Row);
	//echo $key." == ".$Row[0];

	// for RE and LE
	$start_position = 35;
	$end_position = 108;

	// for first row and create table
	if($key == 0) {
		foreach ($Row as $arraykey => $field) {
			if ($field != '') { //if($arraykey == 36) break;
				$field = trim($field);
				$field = preg_replace('/\s\s+/', ' ', $field);
				$field = str_replace('?', '', $field); // replace the ?
				$field = str_replace('.', '', $field); // replace the .
				$field = str_replace('PROJECT_ID', 'PROJECT_ID_2', $field); //avoid duplicate fields
				$field = str_replace('RUN_ID', 'RUN_ID_2', $field); //avoid duplicate fields
				$field = str_replace(' ', '_', $field); // replace the white space
				$field = str_replace('  ', '_', $field); // replace the white space
				$field = str_replace('-', '', $field); // replace the -
				$field = str_replace(':', '', $field); // replace the :
				$field = str_replace('/', '_', $field); // replace the '/'

				$field = str_replace('(DB)', '_DB', $field);
				$field = str_replace('(NVD_NVE_CNP)', '_NVD_NVE_CNP', $field);
				$field = str_replace('(Y_N)', '_Y_N', $field);
				$field = str_replace('__', '_', $field); // replace the double __to single _

				// if last char is _, then removed
				if (substr($field, -1) == '_') {
					$field = substr($field, 0, -1);
				}
				// for RE and LE
				if($arraykey >= $start_position && $arraykey <= $end_position){ //echo $field.",";
					if($field == 'OXIMETRY'){
						$create_table .= strtolower($field) . " varchar(128),";
						$field_name .= strtolower($field).",";
					} else {
						$create_table .= strtolower($field) . "_re varchar(128), " . strtolower($field) . "_le varchar(128), ";
						$field_name .= strtolower($field) . "_re," . strtolower($field) . "_le,";
					}
				}else{
					$create_table .= strtolower($field) . " varchar(128),";
					$field_name .= strtolower($field).",";
				}
			}
		}
		$field_name = substr($field_name, 0, -1);
		$create_table = substr($create_table, 0, -1).")";
		$create_table = $create_table_start.$create_table;
		$query = $conn->query($create_table); // execute the query for create table
	}
	$values = '';
	// end of create table
	if($key > 1){  //echo $field_name;
		foreach ($Row as $arraykey => $field){ //if($arraykey == 36) break;
			$values .= "'".$field."',";
		}
		$values = substr($values, 0, -1);

		// Test
		/*$fn = explode(',',$field_name);
		$vl = explode(',', $values);

		for($x=0; $x<count($fn); $x++){
			//echo $fn[$x]."=>".$vl[$x]."<br>";
		}*/
		//echo "Field Name: ".count(explode(',',$field_name))." Values: ".count(explode(',', $values))."<br>";
		// End Test

		//echo $values; exit;
		/*echo "INSERT INTO igs_sequencing_data ($field_name) VALUES ($values)";
		echo "<br><br><br>";*/
		$sql = $conn->query("INSERT INTO igs_sequencing_data ($field_name) VALUES ($values)");
	}
	//echo $key." row successfully added to DB";
}
/*$create_table = substr($create_table, 0, -1).")";
$create_table = $create_table_start.$create_table;
$query = $conn->query($create_table);*/
?>