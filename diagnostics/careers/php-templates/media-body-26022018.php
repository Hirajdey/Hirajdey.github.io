<div>
    <!-- Search Section -->
    <div id="search" class="container">

        <!--<div class="row form-inline">
            <div class="form-group">
                <input type="text" class="col-lg-offset-6 form-control" ng-model="search" placeholder="Enter the text for search">
            </div>

            <button type="submit" class="btn btn-info col-lg-offset-4 videobtn"><a href="<?php /*echo $site_path;*/?>/videos.php">Videos</a></button>
        </div>-->

        <!--<div class="row">
            <div class="col-md-10 col-lg-offset-6"><input type="text" class="form-control" ng-model="search" placeholder="Enter the text for search"></div>
            <button type="submit" class="btn btn-info col-lg-offset-4 videobtn"><a href="<?php /*echo $site_path;*/?>/videos.php">Videos</a></button>
        </div>-->
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-10"><input type="text" class="form-control" ng-model="search" placeholder="Enter the text for search"></div>
            <div class="col-md-4"></div>
            <!--<button type="submit" class="btn btn-info videobtn"><a href="<?php /*echo $site_path;*/?>/videos.php">Videos</a></button>-->
            <div class="col-md-4 text-center"> <a class="btn btn-info videobtn" href="<?php echo $site_path;?>/videos.php">Videos</a></div>
        </div>
    </div>
    <!-- End search -->
    <div class="container year2016">
        <h2>{{currentYear}} {{currentMonth}}</h2>
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
                <td ng-if="title.date != '14th Mar' && title.date != '1st Mar' && title.date != '1st Apr' && title.date != '31st Aug' && title.date != '31st Oct' && title.date != '30st Jan' && title.date != '2nd Feb' && title.date != '7th Feb' && title.date != '10th Feb' && title.date != '16th Feb'">
                    {{ title.date}}
                </td>
                <td ng-if="title.date == '14th Mar'">
                    7th - 14th Mar
                </td>
                <td ng-if="title.date == '1st Mar'">
                    Mar 2017
                </td>
                <td ng-if="title.date == '1st Apr'">
                    Apr 2017
                </td>
                <td ng-if="title.date == '31st Aug'">
                    28th - 30th Aug
                </td>
                <td ng-if="title.date == '31st Oct'">
                    Oct 2017
                </td>
                <td ng-if="title.date == '30st Jan'">
                    Jan 2018
                </td>
                <td ng-if="title.date == '2nd Feb'">
                    Feb 1-2
                </td>
                <td ng-if="title.date == '7th Feb'">
                    Feb 6-8<sup>th</sup>
                </td>
                <td ng-if="title.date == '10th Feb'">
                    Feb 9-10<sup>th</sup>
                </td>
                <td ng-if="title.date == '16th Feb'">
                    Feb 15-16<sup>th</sup>
                </td>
                <td width="70%">{{ title.title }}</td>
                <td>PDF </td>
                <td>Source Link</td>
            </tr>
            <tr><td colspan="6" style="padding: 0;margin: 5px 0;">
                    <div id='{{title.id}}pop' class="pop" style="display: none;">
                        <div class="row sub_news" ng-repeat="(key, subtitle) in title.subnews">
                            <div class="col-xs-2 col-sm-6 col-md-10">{{ (key + 1) }}.</div>
                            <div class="col-xs-16 col-sm-14 col-md-10 monthwiserow"><img src="img/press/{{title.year}}/{{ subtitle.image }}" width="250px" height="50"></div>
                            <div class="col-xs-2 col-sm-2 col-md-2"><a href="pdf/{{title.year}}/{{ subtitle.pdf }}" target="_blank"><img src="img/press/pdf-link-icon.jpg"></a></div>
                            <div class="col-xs-1 col-sm-2 col-md-2"><a href="{{ subtitle.url }}" target="_blank"><img src="img/press/source-link-icon.jpg"></a></div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
            <!-- End Month wise search -->

        <!-- Full News -->
            <tbody id="yearnews" ng-hide="yearnews" ng-repeat="title in main_titles | filter : search" style="border-top: 0">
            <tr class="media-box1 {{ ((title.currentNews) == cmonth) ? 'highlightmonth' : '' }}"  ng-click="additionalNews(title.id, year)">
                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                <td ng-if="title.date != '14th Mar' && title.date != '1st Mar' && title.date != '1st Apr' && title.date != '31st Aug' && title.date != '31st Oct' && title.date != '30st Jan' && title.date != '2nd Feb' && title.date != '7th Feb' && title.date != '10th Feb' && title.date != '16th Feb'">
                    {{ title.date}}
                </td>
                <td ng-if="title.date == '14th Mar'">
                    7th - 14th Mar
                </td>
                <td ng-if="title.date == '1st Mar'">
                    Mar 2017
                </td>
                <td ng-if="title.date == '1st Apr'">
                    Apr 2017
                </td>
                <td ng-if="title.date == '31st Aug'">
                    28th - 30th Aug
                </td>
                <td ng-if="title.date == '31st Oct'">
                    Oct 2017
                </td>
                <td ng-if="title.date == '30st Jan'">
                    Jan 2018
                </td>
                <td ng-if="title.date == '2nd Feb'">
                    Feb 1-2
                </td>
                <td ng-if="title.date == '7th Feb'">
                    Feb 6-8<sup>th</sup>
                </td>
                <td ng-if="title.date == '10th Feb'">
                    Feb 9-10<sup>th</sup>
                </td>
                <td ng-if="title.date == '16th Feb'">
                    Feb 15-16<sup>th</sup>
                </td>
                <td width="70%">{{ title.title }}</td>
                <td>PDF </td>
                <td>Source Link</td>
            </tr>
            <tr><td colspan="6" style="padding: 0;margin: 5px 0;">
                    <div id='{{title.id}}pop' class="pop" style="display: none;">
                        <div class="row sub_news" ng-repeat="(key, subtitle) in title.subnews">
                            <div class="col-xs-2 col-sm-6 col-md-10">{{ (key + 1) }}.</div>
                            <div class="col-xs-16 col-sm-14 col-md-10 monthwiserow"><img src="img/press/{{title.year}}/{{ subtitle.image }}" width="250px" height="50"></div>
                            <div class="col-xs-2 col-sm-2 col-md-2"><a href="pdf/{{title.year}}/{{ subtitle.pdf }}" target="_blank"><img src="img/press/pdf-link-icon.jpg"></a></div>
                            <div class="col-xs-1 col-sm-2 col-md-2"><a href="{{ subtitle.url }}" target="_blank"><img src="img/press/source-link-icon.jpg"></a></div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        <!-- End Full News -->
        </table>
    </div>
</div>
<?php require 'model-2016.php';?>