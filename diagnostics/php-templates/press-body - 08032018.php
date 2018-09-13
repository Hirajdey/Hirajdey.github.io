<div>
    <!-- Search Section -->
    <div id="search" class="container">

        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-10"><input type="text" class="form-control" ng-model="search" placeholder="Enter the text for search"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center"> <a class="btn btn-info videobtn" href="<?php echo $site_path;?>/videos.php">Videos</a></div>
        </div>
    </div>
    <!-- End search -->
    <div class="container press year2016">
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

        <!-- Full News -->
            <tbody id="yearnews" ng-hide="yearnews" ng-repeat="title in main_titles | filter : search" style="border-top: 0">
            <tr class="news-title">
                <td colspan="3" >{{ title.title }}</td>
            </tr>
            <tr class="news-description">
                <td colspan="3"><p>{{ title.description }}</p></td>
            </tr>
            <tr class="news-view-more" ng-click="additionalNews(title.id, year)">
                <td colspan="6">
                    <a>View More</a>
                    <div id='{{title.id}}pop' class="pop" style="display: none;">
                        <div class="row sub_news" ng-repeat="(key, subtitle) in title.subnews">
                            <div class="col-xs-1 col-sm-2 col-md-24"><a href="{{ subtitle.url }}" target="_blank">{{ site_url }}{{ subtitle.url }}</a></div>
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