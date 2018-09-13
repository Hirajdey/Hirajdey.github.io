<?php $i = 0;?>
<div>
        <div class="container">
            <?php if(isset($_REQUEST['month'])){?><h2 style="border-bottom: 1px solid #ccc;"> <?php echo ucfirst($_REQUEST['month']);}?></h2>
            <table class="table main">
                <tr class="hidden">
                    <th width="5%">Col1</th>
                    <th width="10%">Col2</th>
                    <th width="55%">Col3</th>
                    <th width="15%">Col4</th>
                    <th width="15%">Col5</th>
               </tr>
            <!-- Full News -->
                <?php //echo $current_month;
                //require 'config/db.php';
                $all_media_news = $conn->query("SELECT * FROM media_news WHERE YEAR (news_date) = 2016 ORDER BY id DESC ");
                while($row = $all_media_news->fetch_assoc()) { ?>
                    <tr class="media-box1" ng-click="additionalNews('title<?php echo $row['id'];?>', year)" ng-hide="fullnews">
                        <td class="col-xs-2 col-md-2"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                        <td class="col-xs-2 col-md-2"><?php echo date('jS M', strtotime($row['news_date']));?></td>
                        <td width="70%" class="col-xs-2 col-md-14"><?php echo $row['title'];?></td>
                        <td class="col-xs-2 col-md-2">PDF </td>
                        <td class="col-xs-2 col-md-2">Source Link</td>
                    </tr>

                <?php
                    $i = 1;
                    //echo "SELECT * FROM media_subnews WHERE title_news_id = " . $row['id']; exit;
                    $all_sub_media_news = $conn->query("SELECT * FROM media_subnews WHERE title_news_id = " . $row['id']);?>
                <tbody  id='title<?php echo $row['id'];?>pop' style="display: none;" ng-hide="fullnews">
                <?php while($m_news = $all_sub_media_news->fetch_assoc()){ ?>
                        <tr>
                            <td></td>
                            <td class="col-xs-2 col-md-2"><?php echo $i;?>.</td>
                            <td class="col-xs-2" align="center"><img src="img/press/2016/<?php echo $m_news['image'];?>" width="250px" height="50"></td>
                            <td class="col-xs-2"><a href="pdf/2016/<?php echo $m_news['pdf'];?>" target="_blank"><img src="img/press/pdf-link-icon.jpg"></a></td>
                            <td class="col-xs-2"><a href="<?php echo $m_news['url'];?>" target="_blank"><img src="img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <!--<div class="row">
                        <div class="col-xs-2"><?php /*echo $i;*/?>.</div>
                        <div class="col-xs-2"><img src="img/press/2016/<?php /*echo $m_news['image'];*/?>" width="250px" height="50"></div>
                        <div class="col-xs-2"><?php /*echo $i;*/?>.</div>
                        <div class="col-xs-2"><?php /*echo $i;*/?>.</div>
                    </div>-->
                   <?php $i++;} ?>
                   </tbody>
                <?php } ?>
            <!-- End Full News -->

            <!-- Month wise search -->
               <!-- <ul ng-repeat="title in titles">
                    <li>{{ title.title }}</li>
                    </ul>-->
                <tbody id="monthnews" ng-hide="monthnews" ng-repeat="title in titles" style="border-top: 0">
                <tr class="media-box1 {{((((title.date).split(' ')[1]) | lowercase) == 'dec') ? 'highlightmonth' : ''}}"  ng-click="additionalNews(title.id, year)">
                    <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                    <td>{{ title.date}}</td>
                    <td width="70%">{{ title.title }}</td>
                    <td>PDF </td>
                    <td>Source Link</td>
                </tr>
                <tr><td colspan="6" style="padding: 0;margin: 5px 0;">
                        <div id='{{title.id}}pop' class="pop" style="display: none;">
                            <div class="row sub_news" ng-repeat="(key, subtitle) in title.subnews">
                                <div class="col-xs-2 col-sm-6 col-md-10">{{ (key + 1) }}.</div>
                                <div class="col-xs-16 col-sm-14 col-md-10 monthwiserow"><img src="img/press/2016/{{ subtitle.image }}" width="250px" height="50"></div>
                                <div class="col-xs-2 col-sm-2 col-md-2"><a href="pdf/2016/{{ subtitle.pdf }}" target="_blank"><img src="img/press/pdf-link-icon.jpg"></a></div>
                                <div class="col-xs-1 col-sm-2 col-md-2"><a href="{{ subtitle.url }}" target="_blank"><img src="img/press/source-link-icon.jpg"></a></div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            <!-- End Month wise search -->
            </table>
        </div>
</div>

<?php require 'model-2016.php';?>