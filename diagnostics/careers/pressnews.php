<?php
if(isset($_REQUEST['month']) || isset($_REQUEST['year'])) {
    $response = '{}';
    $fp = fopen('json/media.json', 'w');
    //$month = '';
    $month_query = '';
    $year_query = '';
    //$month = date('m', strtotime($_REQUEST['month']));
    $month_query = isset($_REQUEST['month']) ? 'MONTH (news_date) = '.$_REQUEST['month']. ' AND' : '';
    $year_query = isset($_REQUEST['year']) ? ' YEAR (news_date) = '.$_REQUEST['year'] : '';
    //$year = $_REQUEST['year'];
    require 'config/db.php';
    //echo "SELECT * FROM media_news WHERE ". $month_query . $year_query. " AND status = 1 AND description <> '' ORDER BY news_date DESC limit 1,10"; exit;
    //$media_news = $conn->query("SELECT * FROM media_news WHERE MONTH (news_date) = " . $_REQUEST['month'] . " AND YEAR (news_date) = " . $year . " AND status = 1 ORDER BY news_date DESC");
    $media_news = $conn->query("SELECT * FROM media_news WHERE ". $month_query . $year_query. " AND status = 1 AND description <> '' ORDER BY news_date DESC limit 0,10");
    //echo "No. of News: ".$media_news->num_rows; exit;

    if(($media_news->num_rows) > 0) {
        $data = '';
        $data .= '{"titlenews":[';

        while($row = $media_news->fetch_assoc()) {
            $data .= ' {"id":"' . $row['id'] . '", "title":"' . $row['title'] . '", "description":"' . $row['description'] . '", "year":"' . strtolower(date('Y', strtotime($row['news_date']))) . '", "currentNews":"' . strtolower(date('MY', strtotime($row['news_date']))) . '", "date":"' . date('jS M', strtotime($row['news_date'])) . '"';
            //echo $row['title']."<br>";
            if ($row['id'] > 0) {
                //echo "SELECT * FROM media_subnews WHERE title_news_id = " . $row['id']."<br>";
                $media_subnews = $conn->query("SELECT * FROM media_subnews WHERE status = 1 AND title_news_id = " . $row['id']);
                //echo $media_subnews->num_rows;
                if ($media_subnews->num_rows > 0) {
                    $data .= ',"subnews":[';
                    while ($row = $media_subnews->fetch_assoc()) {
                        $data .= '{"id":"' . $row['id'] . '", "title_news_id":"' . $row['title_news_id'] . '", "image":"' . $row['image'] . '", "pdf":"' . $row['pdf'] . '", "url":"' . $row['url'] . '"},';
                    }
                    $data = rtrim($data, ",");
                    $data .= ']},';
                }else{
                    $data .= '},';
                }
            }
        }
        $data = rtrim($data, ",");
        $data .= ']}';

        // json write
        $response = ['result'=>1];
        $fp = fopen('json/media.json', 'w');
        fwrite($fp, json_encode($response));
        fclose($fp);
        // end
        echo $data;
    }
} else {
        // json write
        $response = ['result'=>0];
        $fp = fopen('json/media.json', 'w');
        fwrite($fp, json_encode($response));
        fclose($fp);
        // end
    echo "No Records";
}

/*echo '{"data":[
    {"firstName":"John", "lastName":"Doe"},
    {"firstName":"Anna", "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]}';*/
?>