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

                <!-- Month wise search -->
                <tbody id="monthnews" ng-hide="monthnews" ng-repeat="title in titles" style="border-top: 0">
                <tr class="media-box1 {{ ((title.currentNews) == cmonth) ? 'highlightmonth' : '' }}"  ng-click="additionalNews(title.id, year)">
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
                <tbody id="yearnews" ng-hide="yearnews" ng-repeat="title in main_titles" style="border-top: 0">
                <tr class="media-box1 {{ ((title.currentNews) == cmonth) ? 'highlightmonth' : '' }}"  ng-click="additionalNews(title.id, year)">
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