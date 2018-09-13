<?php
require 'php-templates/header.php';
require 'config/db.php';
require 'config/config.php';
?>
<div ng-app="videosApp" ng-init="currentMonth='<?php echo $current_month;?>'">
    <div class="media" ng-controller="videosMonthCtrl">
        <div class="container">
            <span class="title_logo">Videos</span>
            <p id="demo"></p>
            <ul>

                <li>
                    <?php
                    //echo "SELECT MONTH(news_date) AS dt, YEAR(news_date) AS yr FROM videos_news WHERE YEAR(news_date) = 2017 ORDER BY id DESC"; exit;
                    $all_videos_news = $conn->query("SELECT MONTH(news_date) AS dt, YEAR(news_date) AS yr FROM videos_news WHERE YEAR(news_date) = 2017 ORDER BY id DESC");
                    //echo $all_videos_news->num_rows;exit;
                    while($row = $all_videos_news->fetch_assoc()){
                        $available_months_2017[] = $row['dt'];
                        //$available_years[] = $row['yr'];
                    }
                    ?>
                    <!--<div class="year" ng-click="fullNewsList('2017');">2017</div>-->

                    <!--<select name="2017" id="2017" ng-model="monthname2017" ng-change="monthWiseNews('2017', this.monthname2017)">
                        <?php /*if(in_array(1, $available_months_2017)) {*/?><option value="01">January</option><?php /*} */?>
                        <?php /*if(in_array(2, $available_months_2017)) {*/?><option value="02">February</option><?php /*} */?>
                        <?php /*if(in_array(3, $available_months_2017)) {*/?><option value="03">March</option><?php /*} */?>
                        <?php /*if(in_array(4, $available_months_2017)) {*/?><option value="04">April</option><?php /*} */?>
                        <?php /*if(in_array(5, $available_months_2017)) {*/?><option value="05">May</option><?php /*} */?>
                        <?php /*if(in_array(6, $available_months_2017)) {*/?><option value="06">June</option><?php /*} */?>
                        <?php /*if(in_array(7, $available_months_2017)) {*/?><option value="07">July</option><?php /*} */?>
                        <?php /*if(in_array(8, $available_months_2017)) {*/?><option value="08">August</option><?php /*} */?>
                        <?php /*if(in_array(9, $available_months_2017)) {*/?><option value="09">September</option><?php /*} */?>
                        <?php /*if(in_array(10, $available_months_2017)) {*/?><option value="10">October</option><?php /*} */?>
                        <?php /*if(in_array(11, $available_months_2017)) {*/?><option value="11">November</option><?php /*} */?>
                        <?php /*if(in_array(12, $available_months_2017)) {*/?><option value="12">December</option><?php /*} */?>
                        </select>-->
                </li>

                <li>
                    <?php
                    //echo "SELECT MONTH(title_date) AS dt FROM videos_news ORDER BY id DESC"; exit;
                    $all_videos_news = $conn->query("SELECT MONTH(news_date) AS dt, YEAR(news_date) AS yr FROM videos_news WHERE YEAR(news_date) = 2016 ORDER BY id DESC");
                    //echo $all_videos_news->num_rows;exit;
                    while($row = $all_videos_news->fetch_assoc()){
                        $available_months_2016[] = $row['dt'];
                        //$available_years[] = $row['yr'];
                    }
                    ?>
                    <!--<div class="year" ng-click="fullNewsList('2016');">2016</div>-->

                        <select name="2016" id="2016" ng-model="monthname2016" ng-change="monthWiseNews('2016', this.monthname2016)">
                            <?php if(in_array(1, $available_months_2016)) {?><option value="01">January</option><?php } ?>
                            <?php if(in_array(2, $available_months_2016)) {?><option value="02">February</option><?php } ?>
                            <?php if(in_array(3, $available_months_2016)) {?><option value="03">March</option><?php } ?>
                            <?php if(in_array(4, $available_months_2016)) {?><option value="04">April</option><?php } ?>
                            <?php if(in_array(5, $available_months_2016)) {?><option value="05">May</option><?php } ?>
                            <?php if(in_array(6, $available_months_2016)) {?><option value="06">June</option><?php } ?>
                            <?php if(in_array(7, $available_months_2016)) {?><option value="07">July</option><?php } ?>
                            <?php if(in_array(8, $available_months_2016)) {?><option value="08">August</option><?php } ?>
                            <?php if(in_array(9, $available_months_2016)) {?><option value="09">September</option><?php } ?>
                            <?php if(in_array(10, $available_months_2016)) {?><option value="10">October</option><?php } ?>
                            <?php if(in_array(11, $available_months_2016)) {?><option value="11">November</option><?php } ?>
                            <?php if(in_array(12, $available_months_2016)) {?><option value="12">December</option><?php } ?>
                    </select>
                </li>

                <li>
                <?php
                //echo "SELECT MONTH(title_date) AS dt FROM videos_news ORDER BY id DESC"; exit;
                $all_videos_news = $conn->query("SELECT MONTH(news_date) AS dt, YEAR(news_date) AS yr FROM videos_news WHERE YEAR(news_date) = 2015 ORDER BY id DESC");
                //echo $all_videos_news->num_rows;exit;
                $available_months_2015 = [];
                while($row = $all_videos_news->fetch_assoc()){
                    $available_months_2015[] = $row['dt'];
                    //$available_years[] = $row['yr'];
                }
                ?>
                <!--<div class="year" ng-click="fullNewsList('2015');">2015</div>-->
                <?php if(count($available_months_2015) > 0) { ?>

                <select name="2015" id="2015" ng-model="monthname2015" ng-change="monthWiseNews('2015', this.monthname2015)">
                    <?php if(in_array(1, $available_months_2015)) {?><option value="01">January</option><?php } ?>
                    <?php if(in_array(2, $available_months_2015)) {?><option value="02">February</option><?php } ?>
                    <?php if(in_array(3, $available_months_2015)) {?><option value="03">March</option><?php } ?>
                    <?php if(in_array(4, $available_months_2015)) {?><option value="04">April</option><?php } ?>
                    <?php if(in_array(5, $available_months_2015)) {?><option value="05">May</option><?php } ?>
                    <?php if(in_array(6, $available_months_2015)) {?><option value="06">June</option><?php } ?>
                    <?php if(in_array(7, $available_months_2015)) {?><option value="07">July</option><?php } ?>
                    <?php if(in_array(8, $available_months_2015)) {?><option value="08">August</option><?php } ?>
                    <?php if(in_array(9, $available_months_2015)) {?><option value="09">September</option><?php } ?>
                    <?php if(in_array(10, $available_months_2015)) {?><option value="10">October</option><?php } ?>
                    <?php if(in_array(11, $available_months_2015)) {?><option value="11">November</option><?php } ?>
                    <?php if(in_array(12, $available_months_2015)) {?><option value="12">December</option><?php } ?>
                </select>
                <?php } ?>
                    </li>
                 <li>
                     <?php
                     //echo "SELECT MONTH(title_date) AS dt FROM videos_news ORDER BY id DESC"; exit;
                     $all_videos_news = $conn->query("SELECT MONTH(news_date) AS dt, YEAR(news_date) AS yr FROM videos_news WHERE YEAR(news_date) = 2014 ORDER BY id DESC");
                     //echo $all_videos_news->num_rows;exit;
                     $available_months_2014 = [];
                     while($row = $all_videos_news->fetch_assoc()){
                         $available_months_2014[] = $row['dt'];
                         //$available_years[] = $row['yr'];
                     }
                     ?>
                     <!--<div class="year" ng-click="fullNewsList('2014');">2014</div>-->
                     <?php if(count($available_months_2014) > 0) {?>

                         <select name="2014" id="2014" ng-model="monthname2014" ng-change="monthWiseNews('2014',  this.monthname2014)">
                             <?php if(in_array(1, $available_months_2014)) {?><option value="01">January</option><?php } ?>
                             <?php if(in_array(2, $available_months_2014)) {?><option value="02">February</option><?php } ?>
                             <?php if(in_array(3, $available_months_2014)) {?><option value="03">March</option><?php } ?>
                             <?php if(in_array(4, $available_months_2014)) {?><option value="04">April</option><?php } ?>
                             <?php if(in_array(5, $available_months_2014)) {?><option value="05">May</option><?php } ?>
                             <?php if(in_array(6, $available_months_2014)) {?><option value="06">June</option><?php } ?>
                             <?php if(in_array(7, $available_months_2014)) {?><option value="07">July</option><?php } ?>
                             <?php if(in_array(8, $available_months_2014)) {?><option value="08">August</option><?php } ?>
                             <?php if(in_array(9, $available_months_2014)) {?><option value="09">September</option><?php } ?>
                             <?php if(in_array(10, $available_months_2014)) {?><option value="10">October</option><?php } ?>
                             <?php if(in_array(11, $available_months_2014)) {?><option value="11">November</option><?php } ?>
                             <?php if(in_array(12, $available_months_2014)) {?><option value="12">December</option><?php } ?>
                         </select>
                     <?php } ?>
                </li>
            </ul>
           <!-- <div class="title_logo videos"><a href="<?php /*echo $site_path;*/?>/media.php">Media</a></div>-->
        </div>

    <?php require 'php-templates/videos-body.php'; ?>
    </div>
</div>

<script src="<?php echo $site_path;?>/js/videos.js"></script>
<?php require 'php-templates/footer.php' ?>