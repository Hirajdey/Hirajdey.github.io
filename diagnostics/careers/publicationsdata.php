<?php
require 'config/config.php';
require 'config/db.php';

if(isset($_REQUEST['type'])) {
    /*echo '{ "records":[{"date":"2016-10-04", "title":"Comprehensive genomic analysis of malignant pleural mesothelioma identifies recurrent mutations, gene fusions and splicing alterations", "file_name":"comprehensive-genomic-analysis.pdf", "path":"research-papers", "type":"research"},{"date":"2016-07-02", "title":"4th Annual Immuno-Oncology Summit", "file_name":"comprehensive-genomic-analysis.pdf", "path":"research-papers", "type":"research"},{"date":"2016-06-05", "title":"2nd International Conference on Eye and Vision", "file_name":"comprehensive-genomic-analysis.pdf", "path":"research-papers", "type":"research"},{"date":"2016-05-01", "title":"66th Annual Meeting of the American Society of Human Genetics", "file_name":"comprehensive-genomic-analysis.pdf", "path":"research-papers", "type":"research"}]}';
    exit;*/
    $data = '';
    //echo "SELECT * FROM publications WHERE type = '".$_REQUEST['type']."' ORDER BY date DESC"; exit;
    $publications_research = $conn->query("SELECT * FROM publications WHERE type = '".$_REQUEST['type']."' ORDER BY date DESC");
    if($publications_research->num_rows > 0) {
        $data = '{ "records":[';
        while($row = $publications_research->fetch_assoc()){

            $data .= '{"date":"'.$row['date'].'", "title":"'.$row['title'].'", "file_name":"'.$row['file_name'].'", "path":"'.$row['path'].'", "type":"'.$row['type'].'"},';
        }
        $data = substr($data, 0, -1);  // remove last letter (,)
        $data .= ']}';
        echo $data;
    } else
        echo 0;
}
?>