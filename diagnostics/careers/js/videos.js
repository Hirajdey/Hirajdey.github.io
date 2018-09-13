(function(angular) {
    'use strict';
angular
    .module("videosApp",[])
    // For media page

    .controller('videosMonthCtrl', function ($scope, $http) {

        var years = ["2014", "2015", "2016", "2017"];

        //alert($scope.currentMonth);
        $scope.cmonth = $scope.currentMonth;
        $scope.date = new Date();
        $scope.currentYear = $scope.date.getFullYear();

        // year wise news
        function myFunction($year) {
            for(var i=0; i<years.length; i++){
                if(years[i] == $year){
                    $("#"+$year).show();
                }else{
                    var mname = "monthname"+years[i];
                    $scope.mname = '';
                    $("#"+years[i]).hide();
                }
            }
        }

        $scope.fullNewsList = function($year){ //alert($year)

            //years.forEach(myFunction, 'eqw5ertytrytr','test');
            myFunction($year);

            // set current year for breadcrumbs
            $scope.currentYear = $year;

            $scope.yearnews = false;
            $scope.monthnews = true;
            $scope.currentMonth = this.monthname; // get current month while we change the month

            var method = 'POST';
            var url = 'videossubnews.php?year='+$year;

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).
            success(function(response){ //alert(response['titlenews'][0]['id']);
                //alert(response.subnews);
                alert(response);
                //$scope.main_titles = response.titlenews; // Title news object
                $("#waitIcon").hide();
                $scope.main_titles = response.titlenews; // Title news object
                $scope.monthId = response.titlenews[0]['id'].replace(" ", ""); // create id for month
                $scope.subtitle = response.subnews; // Sub news object
            }).error(function(response) {
                alert("Error Result");
            });
        }

        $scope.fullNewsList($scope.currentYear);

        // This function is working while changing the month
        $scope.monthWiseNews = function($year, $month){ //alert($month)

            var monthNumber = ($month <= 9) ? $month[1] : $month;

            // months
            var monthNames = [ 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];
            //alert(monthNames[monthNumber - 1]);
            $scope.currentMonth = " / " + monthNames[monthNumber - 1];

            // set current year for breadcrumbs
            $scope.currentYear = $year;

            $scope.yearnews = true;
            $scope.monthnews = false;

            if($year == 2016){
                $scope.monthname2015 = '';
                $scope.monthname2014 = '';
            } else if($year == 2015){
                $scope.monthname2016 = '';
                $scope.monthname2014 = '';
            } else if($year == 2014){
                $scope.monthname2016 = '';
                $scope.monthname2015 = '';
            }

            //window.location.href = "media.php?year="+$year+"&month="+$scope.year16;
            $scope.titles = '';
            $scope.subtitles = '';
            $scope.monthId = '';

            var method = 'POST';
            var url = 'videossubnews.php?month='+$month+'&year='+$year;

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).
            success(function(response){ //alert(response['titlenews'][0]['id']);
                //alert(response.subnews);
                //alert(response);
                $("#waitIcon").hide();
                $scope.titles = response.titlenews; // Title news object
                $scope.monthId = response.titlenews[0]['id'].replace(" ", ""); // create id for month
                $scope.subtitles = response.subnews; // Sub news object
            }).error(function(response) {
                alert("Error Result");
            });
        }

        // view additional news
        $scope.additionalNews = function($month, $year){ //alert("Full News: #"+$month+"pop");
            //$("#pop").attr('id',   $month+'pop');
            $("#"+$month+"pop").toggle();
            //$("#71pop").css("display","");
        }
    });
    // End media page
})(window.angular);