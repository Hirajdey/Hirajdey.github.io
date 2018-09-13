<?php
require 'config/config.php';
require 'config/db.php';

if(isset($_REQUEST['disease'])) {
    $data = '';
    $disease_name = ($_REQUEST['disease'] != 'All') ? "WHERE disease_category_id = '".urldecode($_REQUEST['disease'])."' AND status=1" : "";
    //$fields = ($_REQUEST['disease'] != 'All') ? "dt.disease_name as disease_name, dt.code as code, dt.test_name as test_name, dt.method as method, dt.tat as tat, dt.preferred_sample_type as preferred_sample_type, jl.id as id" : "dt.disease_name as disease_name, dt.code as code, dt.test_name as test_name, dt.method as method, dt.tat as tat, jl.id as id";
    $fields = "dt.disease_name as disease_name, dt.code as code, dt.test_name as test_name, dt.method as method, dt.tat as tat, dt.preferred_sample_type as preferred_sample_type, jl.id as id";
    //$disease_name = ($_REQUEST['disease'] != 'All') ? "WHERE disease_name LIKE '%".urldecode($_REQUEST['disease'])."%' AND status=1" : "";
    //echo "SELECT $fields FROM disease_test as dt LEFT JOIN gene_list as jl ON dt.id = jl.disease_test_id $disease_name ORDER BY dt.code ASC"; exit;
    //$diseases = $conn->query("SELECT * FROM disease_test $disease_name");
    //$diseases = $conn->query("SELECT dt.disease_name as disease_name, dt.code as code, dt.test_name as test_name, dt.method as method, dt.tat as tat, dt.preferred_sample_type as preferred_sample_type FROM disease_test as dt $disease_name");
    $diseases = $conn->query("SELECT $fields FROM disease_test as dt LEFT JOIN gene_list as jl ON dt.id = jl.disease_test_id $disease_name ORDER BY dt.code ASC");
    //echo "No. of Rows: ".$diseases->num_rows;
    if($diseases->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $diseases->fetch_assoc()){ //echo $row['tat'];exit;
            $data .= '{"code":"'.$row['code'].'", "test":"'.$row['test_name'].'", "method":"'.$row['method'].'", "preferred_sample_type":"'.$row['preferred_sample_type'].'", "tat":"'.$row['tat'].'", "gene_list_id":"'.$row['id'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
} elseif(isset($_REQUEST['loginemail'])){ // email validation for login
    $email_check = $conn->query("SELECT me.id FROM medgenome_employee as me, gene_list_non_employee as ne WHERE me.email = '".$_REQUEST['loginemail']."' || ne.email = '".$_REQUEST['loginemail']."'");
    if($email_check->num_rows > 0) {
        $gene_list = $conn->query("SELECT gl.gene_name, dt.code, dt.test_name, dt.method, dt.tat FROM disease_test as dt LEFT JOIN gene_list as gl ON dt.id = gl.disease_test_id WHERE gl.id = '".$_REQUEST['geneid']."'");
        $row = $gene_list->fetch_assoc();
        //echo '{"records":[{"disease":"'.$row['gene_name'].'"}]}';
        echo $row['gene_name']."@".$row['code']."@".$row['test_name']."@".$row['method']."@".$row['tat'];
    }
    else
        echo 0;
} elseif(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['mobile'])){
    $user_register = $conn->query("INSERT INTO gene_list_non_employee (name, email, mobile, organization, created_date) VALUES ('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['mobile']."', '".$_REQUEST['organization']."', NOW())");
    echo 1;
}
?>