<?php
session_start();
require 'php-templates/header.php'; ?>
    <div class="webinar" ng-app="eventApp" ng-init="sitepath='<?php echo $site_path;?>';act='<?php echo $_REQUEST['act'];?>'">
        <div ng-controller="eventCtrl">
            <div class="container oncopeptEvents">
                <?php if(isset($_SESSION['username']) && $_SESSION['username']!="") {?>
                    <div class="row">
                        <div class="col-md-5 pull-right">Welcome <?php echo urldecode($_SESSION['username']);?> ! <a href="?act=logout"><b> logout</b></a></div>
                    </div>
                <?php } ?>
                <h2>Events Download</h2>
                <div class="row top_links">
                    <div class="col-xs-24 col-sm-7 col-md-5"><a class="<?php if($_REQUEST['act'] == 'papers') echo 'active';?>" href="?act=papers">Research Papers</a></div>
                    <div class="col-xs-24 col-sm-7 col-md-5"><a class="<?php if($_REQUEST['act'] == 'posters') echo 'active';?>" href="?act=posters">Posters presented</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-14"><a class="<?php if($_REQUEST['act'] == 'photos') echo 'active';?>" href="?act=photos">Photos</a></div>
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
            <?php if(!isset($_REQUEST['act']) || ($_REQUEST['act'] == 'papers')){?>
            <div class="container presentations">
                <div class="tab-pane fade in" id="tab1info"><?php include('php-templates/events-research-papers.php');?></div>
            </div>
            <?php } ?>
            <!-- End of Research Papers -->

            <!-- Posters-->
            <?php if(!isset($_REQUEST['act']) || ($_REQUEST['act'] == 'posters')){?>
            <div class="container video">
                <?php include('php-templates/events-posters.php');?>
            </div>
            <?php } ?>
            <!-- End of Video -->

            <!-- Photos -->
            <?php if(isset($_REQUEST['act']) && ($_REQUEST['act'] == 'photos')){?>
            <div class="container posters">
                    <?php include('php-templates/events-photos.php');?>
            </div>
            <?php } ?>
            <!-- End of Photos -->

            <!-- logout-->
            <?php
            if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'logout') {
                session_destroy();
                header("Location:$site_path/oncopept.php");
            }
            ?>

        </div>
    </div>

    <!--<script>
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
    </script>-->

<script src="<?php echo $site_path;?>/js/eventdownload.js"></script>

<?php require 'php-templates/footer.php' ?>