<?php require '../php-templates/header.php' ?>

    <div class="webinar" ng-app="eventApp">
        <div ng-controller="eventCtrl">
            <div class="container oncopeptEvents">

                <h2>CAP / CLIA Certified Services</h2>
                <div class="row top_links_events_download">
           
                   <!-- <div class="col-xs-24 col-sm-7 col-md-5"><a id="exome">Exome Sequencing</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-4"><a id="rns">RNA Sequencing</a></div>-->
                    <div class="col-xs-24 col-sm-10 col-md-12"><a id="panel">Panel Sequencing</a></div>
                
                
                </div>
                    <hr/>
            </div>

            

            <!-- Whole Genome Sequencing -->
            <div class="container" id="exomeSection" style="display: none">
                <div class="tab-pane fade in" id="tab1info"><?php include('certified-exomesequencing.php');?></div>
            </div>
            <!-- Whole Genome Sequencing -->

            <!-- RNA Sequencing -->
            <div class="container" id="rnsSection" style="display: none">
                    <?php include('certified-rnasequencing.php');?>
            </div>
            <!-- RNA Sequencing -->
            
             <!-- Panel Sequencing -->
            <div class="container" id="panelSection" style="display: none">
                    <?php include('certified-panelsequencing.php');?>
            </div>
            <!-- Panel Sequencing -->
            
            
        </div>
    </div>

<script>
    /*$( "#outer" ).mouseover(function() {
        $("#papers").addClass('active');
    }*/
    $("#exomeSection").show();
    $("#exome").addClass('active');

    $("#exome").click(function(){
        $("#exomeSection").show();
        $("#rnsSection").hide();
        $("#panelSection").hide();
	
        $("#exome").addClass('active');
        $("#rns").removeClass('active');
        $("#panel").removeClass('active');
	
       
    });

    $("#rns").click(function(){
        $("#exomeSection").hide();
        $("#rnsSection").show();
        $("#panelSection").hide();
		
		 $("#exome").removeClass('active');
        $("#rns").addClass('active');
        $("#panel").removeClass('active');
    });

    $("#panel").click(function(){
        $("#exomeSection").hide();
        $("#rnsSection").hide();
        $("#panelSection").show();
		
        $("#exome").removeClass('active');
        $("#rns").removeClass('active');
        $("#panel").addClass('active');
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

<?php require '../php-templates/footer.php' ?>