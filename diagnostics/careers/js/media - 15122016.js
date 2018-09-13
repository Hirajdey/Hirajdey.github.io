(function(angular) {
    'use strict';
angular
    .module("mediaApp",[])
    // For media page

    .controller('mediaMonthCtrl', function ($scope, $http) {

        //alert($scope.currentMonth);
        $scope.cmonth = $scope.currentMonth;
        $scope.date = new Date();
        //alert($scope.date);

        $scope.fullNewsList = function () {
            $scope.fullnews = false;
            $scope.monthnews = true;
            $scope.monthname = '';
        }

        $scope.additionalNews = function($month, $year){ //alert($year);
            //$("#pop").attr('id',   $month+'pop');
            $("#"+$month+"pop").toggle();
            //$("#2pop").css("display","");
        }

        // This function is working while changing the month
        $scope.monthWiseNews = function($year){ //alert($year)
            $scope.fullnews = true;
            $scope.monthnews = false;
            $scope.monthId = '';
            $scope.currentMonth = this.monthname; // get current month while we change the month

            //window.location.href = "media.php?year="+$year+"&month="+$scope.year16;

            var method = 'POST';
            var url = 'subnews.php?month='+$scope.monthname+'&year='+$year;

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).
            success(function(response){ //alert(response['titlenews'][0]['id']);
                //alert(response.subnews[1]);
                //alert(response);
                $scope.titles = response.titlenews; // Title news object
                $scope.monthId = response.titlenews[0]['id'].replace(" ", ""); // create id for month
                $scope.subtitles = response.subnews; // Sub news object
            }).error(function(response) {
                alert("Error Result");
            });
        }
    });
    // End media page
})(window.angular);