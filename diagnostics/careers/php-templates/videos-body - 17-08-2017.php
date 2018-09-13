<div>
    <!-- Search Section -->
    <!--<div id="search" class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-lg-offset-6"><input type="text" class="form-control" ng-model="search" placeholder="Enter the text for search"></div>
        </div>
    </div>-->
    <!-- End search -->
    <div class="container year2016" style="max-height: none;">
        <!--<h2>{{currentYear}} {{currentMonth}}</h2>-->
        <?php if(isset($_REQUEST['month'])){?><h2 style="border-bottom: 1px solid #ccc;"> <?php echo ucfirst($_REQUEST['month']);}?></h2>
        <table class="table main">
            <tr class="hidden">
                <th width="5%">Col1</th>
                <th width="10%">Col2</th>
                <th width="55%">Col3</th>
                <th width="15%">Col4</th>
                <th width="15%">Col5</th>
           </tr>

            <!-- wait icon -->
            <div id="waitIcon" class="container">
                <div class="row text-center">
                    <button class="btn btn-default wait-icon"><i class="glyphicon glyphicon-th-large gly-spin"></i></button>
                </div>
            </div>

            <!-- Month wise search -->
            <tbody id="monthnews" ng-hide="monthnews" ng-repeat="title in titles | filter : search" style="border-top: 0">
            <tr class="media-box1 {{ ((title.currentNews) == cmonth) ? 'highlightmonth' : '' }}"  ng-click="additionalNews(title.id, year)">
                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                <td width="70%">{{ title.title }}</td>
                <td></td>
            </tr>
            <tr><td colspan="6" style="padding: 0;margin: 5px 0;">
                    <div id='{{title.id}}pop' class="pop" style="display: none;">
                        <div class="row sub_news" ng-repeat="(key, subtitle) in title.subnews">
                            <div class="col-xs-2 col-sm-6 col-md-6">{{ (key + 1) }}.</div>
                            <div class="col-xs-1 col-sm-2 col-md-12"><a href="{{ subtitle.url }}" target="_blank">{{ subtitle.url }}</a></div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
            <!-- End Month wise search -->

        <!-- Full News -->
            <tbody id="yearnews" ng-hide="yearnews" ng-repeat="title in main_titles | filter : search" style="border-top: 0">

            </tbody>
        <!-- End Full News -->
        </table>
        
        <?php

        $videos = $conn->query("SELECT * FROM videos ORDER BY id DESC");
            $i = 1;
            while($row = $videos->fetch_assoc()) {
                //echo $row['id'];
            }

        $video_image = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg"];
        $video_title = [
            "MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring",
            "Favourable lifestyle can counter balance the genetic risk of heart attack: Dr Sekar Kathiresan",
            "Lack of incentives is the prime reason behind the scarcity of clinicians in India: Dr Kumar Prabhash",
            "The story of Medgenome",
            "Dr. Chirantan Bose talking on Liquid Biopsy - Blood Test for Cancer Detection & Monitoring",
            "Liquid biopsy will improve accuracy, accessibility and variability in diagnosis: Dr R K Deshpande",
            "In search for answers to cardiovascular diseases we are scaling up the genomic research: Dr Mullasari Ajit S",
            "Soon we will have cancer vaccines created under genomic guidance: Dr Pramod K Srivastava"
        ];
        $video_link = [
            "https://www.youtube.com/watch?v=7SoTKUHf9FA&feature=youtu.be",
            "http://health.economictimes.indiatimes.com/videos/favourable-lifestyle-can-counter-balance-the-genetic-risk-of-heart-attack-dr-sekar-kathiresan/55383250",
            "http://health.economictimes.indiatimes.com/videos/lack-of-incentives-is-the-prime-reason-behind-the-scarcity-of-clinicians-in-india-dr-kumar-prabhash/55255748",
            "https://www.youtube.com/watch?v=Rk93rTfaGFU&feature=youtu.be",
            "https://www.youtube.com/watch?v=evL0zefd4rc&feature=youtu.be",
            "http://health.economictimes.indiatimes.com/videos/liquid-biopsy-will-improve-accuracy-accessibility-and-variability-in-diagnosis-dr-r-k-deshpande/58048892",
            "http://health.economictimes.indiatimes.com/news/industry/in-search-for-answers-to-cardiovascular-diseases-we-are-scaling-up-the-
genomic-research-dr-mullasari-ajit-s/59856060",
            "http://health.economictimes.indiatimes.com/videos/soon-we-will-have-cancer-vaccines-created-under-genomic-guidance-dr-pramod-k-srivastava/59929033"
        ];
        ?>
        
        <!--<div class="container">-->
            <div class="row text-center">
                <?php
                for($i = 0; $i < count($video_image); $i++){ ?>
                <div class="col-md-8 col-sm-12 videoimage">
                    <div><a href="<?php echo $video_link[$i];?>" class="hvr-bounce-in" target="_blank"><img src="<?php echo $site_path;?>/img/press/2017/videos/<?php echo $video_image[$i];?>"></a></div>
                    <div class="videos-title"><a href="<?php echo $video_link[$i];?>" target="_blank"><?php echo $video_title[$i];?></a></div>
                </div>
                <?php } ?>
            </div>
    </div>
</div>
<?php require 'model-2016.php';?>