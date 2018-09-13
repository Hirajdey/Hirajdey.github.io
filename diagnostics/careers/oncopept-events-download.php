<?php require 'php-templates/header.php' ?>

    <div class="webinar" ng-app="eventApp">
        <div ng-controller="eventCtrl">
            <div class="container oncopeptEvents">

                <h2>4th Annual Immuno-Oncology Summit</h2>
                <div class="row top_links_events_download">
                    <div class="col-xs-24 col-sm-7 col-md-5"><a id="papers">Research Papers</a></div>
                    <div class="col-xs-24 col-sm-7 col-md-5"><a id="posters">Posters presented</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-14"><a id="photos">Photos</a></div>
                </div>
            </div>

            <!-- Popup-->
            <!--<div class="popup" id="myModal" role="dialog" ng-show="managementPopup" >-->
            <div class="popup" id="myModal" role="dialog" style="display: none">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" ng-click="closePopup(description)">&times;</button>
                            <h4 class="modal-title">{{name}}</h4>
                        </div>
                        <div class="row modal-body text-center">
                            <div class="management-image">
                                <img alt="" src="<?php echo $site_path;?>/img/webinar/{{photo}}" width="350px" height="450px"><br><br>
                                <h4>{{name}}</h4>
                            </div>
                            <!--<div class="col-md-16 management-description">
                                {{name}}
                            </div>-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" ng-click="closePopup(description)">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End of Popup-->

            <!-- Research Papers -->
            <div class="container" id="papersSection" style="display: none">
                <div class="tab-pane fade in" id="tab1info"><?php include('php-templates/events-research-papers.php');?></div>
            </div>
            <!-- End of Research Papers -->

            <!-- Posters-->
            <div class="container" id="postersSection" style="display: none">
                <?php include('php-templates/events-posters.php');?>
            </div>
            <!-- End of Video -->

            <!-- Photos -->
            <div class="container" id="photosSection" style="display: none">
                    <?php include('php-templates/events-photos.php');?>
            </div>
            <!-- End of Photos -->
        </div>
    </div>

<script>
    /*$( "#outer" ).mouseover(function() {
        $("#papers").addClass('active');
    }*/
    $("#papersSection").show();
    $("#papers").addClass('active');

    $("#papers").click(function(){
        $("#papersSection").show();
        $("#postersSection").hide();
        $("#photosSection").hide();

        $("#papers").addClass('active');
        $("#posters").removeClass('active');
        $("#photos").removeClass('active');
    });

    $("#posters").click(function(){
        $("#postersSection").show();
        $("#papersSection").hide();
        $("#photosSection").hide();

        $("#papers").removeClass('active');
        $("#posters").addClass('active');
        $("#photos").removeClass('active');
    });

    $("#photos").click(function(){
        $("#photosSection").show();
        $("#papersSection").hide();
        $("#postersSection").hide();

        $("#papers").removeClass('active');
        $("#posters").removeClass('active');
        $("#photos").addClass('active');
    });
</script>

    <script>
        var app = angular.module("eventApp", []);
        app.controller("eventCtrl", function ($scope, $anchorScroll) {
            $( "#myModal").hide();

            $scope.detailedView = function ($photo, $name, $description) {
                //$scope.managementPopup = true;
                //$scope.managementPage = true;
                $scope.photo = $photo;
                $scope.name = $name;
                $scope.description = $description;
                $( "#myModal").show().fadeIn(10000);
                $("#"+$description).show();
                $anchorScroll(); // after submit the test page scroll up
                $scope.desc = true;
            };

            $scope.closePopup = function ($name) {
                $scope.managementPopup = false;
                $scope.managementPage = false;
                $( "#myModal").hide();
                $("#"+$name).hide();
            }
            $scope.additionalNews = function(month, year){
                $("#"+month+"pop").toggle();
            }
            $scope.minus = function(month, year){
                $("#"+month+"pop").hide();
                $("#"+month+"2016 .glyphicon-chevron-right").show();
                $("#"+month+"2016 .glyphicon-chevron-down").hide();
            }
        });
    </script>

<!--<script src="<?php /*echo $site_path;*/?>/js/webinar.js"></script>-->

<?php require 'php-templates/footer.php' ?>