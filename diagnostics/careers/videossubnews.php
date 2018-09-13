<?php
if(isset($_REQUEST['month']) || isset($_REQUEST['year'])) { echo 1; exit;
    //$month = '';
    $month_query = '';
    $year_query = '';
    //$month = date('m', strtotime($_REQUEST['month']));
    $month_query = isset($_REQUEST['month']) ? 'MONTH (news_date) = '.$_REQUEST['month']. ' AND' : '';
    $year_query = isset($_REQUEST['year']) ? ' YEAR (news_date) = '.$_REQUEST['year'] : '';
    //$year = $_REQUEST['year'];
    require 'config/db.php';
    //echo "SELECT * FROM videos_news WHERE ". $month_query . $year_query. " AND status = 1 ORDER BY news_date DESC"; exit;
    //$videos_news = $conn->query("SELECT * FROM videos_news WHERE MONTH (news_date) = " . $_REQUEST['month'] . " AND YEAR (news_date) = " . $year . " AND status = 1 ORDER BY news_date DESC");
    $videos_news = $conn->query("SELECT * FROM videos_news WHERE ". $month_query . $year_query. " AND status = 1 ORDER BY news_date DESC");
    //echo "No. of News: ".$videos_news->num_rows; exit;

    //echo '{"titlenews":[ {"id":"1", "title":"01 DD Sahyadri News 07 March 2017 01min 12sec MedGenome Press Conference Onco Track 21 56pm", "year":"2017", "currentNews":"dec2017", "date":"31st Dec","subnews":[{"id":"1", "title_news_id":"1", "image":"", "pdf":"", "url":"https://www.youtube.com/watch?v=7SoTKUHf9FA&feature=youtu.be"}]}, {"id":"2", "title":"Favourable lifestyle can counter balance the genetic risk of heart attack: Dr Sekar Kathiresan", "year":"2017", "currentNews":"dec2017", "date":"31st Dec","subnews":[{"id":"2", "title_news_id":"2", "image":"", "pdf":"", "url":"http://health.economictimes.indiatimes.com/videos/favourable-lifestyle-can-counter-balance-the-genetic-risk-of-heart- attack-dr-sekar-kathiresan/55383250"}]}, {"id":"3", "title":"Lack of incentives is the prime reason behind the scarcity of clinicians in India: Dr Kumar Prabhash", "year":"2017", "currentNews":"dec2017", "date":"31st Dec","subnews":[{"id":"3", "title_news_id":"3", "image":"", "pdf":"", "url":"http://health.economictimes.indiatimes.com/videos/lack-of-incentives-is-the-prime-reason-behind-the-scarcity-of- clinicians-in-india-dr-kumar-prabhash/55255748"}]}]}'; exit;

    if(($videos_news->num_rows) > 0) {
        $data = '';
        $data .= '{"titlenews":[';

        while($row = $videos_news->fetch_assoc()) {
            $data .= ' {"id":"' . $row['id'] . '", "title":"' . $row['title'] . '", "year":"' . strtolower(date('Y', strtotime($row['news_date']))) . '", "currentNews":"' . strtolower(date('MY', strtotime($row['news_date']))) . '", "date":"' . date('jS M', strtotime($row['news_date'])) . '"';
            //echo $row['title']."<br>";
            if ($row['id'] > 0) {
                //echo "SELECT * FROM videos_subnews WHERE title_news_id = " . $row['id']."<br>";
                $videos_subnews = $conn->query("SELECT * FROM videos_subnews WHERE title_news_id = " . $row['id']);
                //echo $videos_subnews->num_rows;
                if ($videos_subnews->num_rows > 0) {
                    $data .= ',"subnews":[';
                    while ($row = $videos_subnews->fetch_assoc()) {
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
        echo $data;
    }
} else
    echo "No Records";

/*echo '{"data":[
    {"firstName":"John", "lastName":"Doe"},
    {"firstName":"Anna", "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]}';*/
?>