<?php
require 'config/config.php';
require 'config/db.php';

//echo '{ "records":[ {"code":"Alfreds Futterkiste","method":"Berlin","Country":"Germany"}, {"code":"Ana Trujillo Emparedados y helados","method":"México D.F.","Country":"Mexico"}, {"code":"Comércio Mineiro","method":"São Paulo","Country":"Brazil"} ] }';
//exit;
if(isset($_REQUEST['disease'])) {
    $data = '';
    $disease_name = ($_REQUEST['disease'] != 'All') ? "WHERE disease_name = '".$_REQUEST['disease']."'" : "";
    //echo "SELECT * FROM disease_test $disease_name"; exit;
    $diseases = $conn->query("SELECT * FROM disease_test $disease_name");
    if($diseases->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $diseases->fetch_assoc()){
            $data .= '{"code":"'.$row['code'].'", "method":"'.$row['method'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
    }
    echo $data;
}
?>