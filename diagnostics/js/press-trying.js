(function(angular) {
    'use strict';
angular
    .module("mediaApp",['ngSanitize'])
    // For media page

    .run(function ($rootScope) {
        $rootScope.$on('$locationChangeSuccess', function () {
            console.log('$locationChangeSuccess changed!', new Date());
        });
    })

    .controller('mediaMonthCtrl', function ($scope, $http, $window, $location) {

        /*var landingUrl = "http://" + $window.location.host + "/login";
        $window.location.href = landingUrl;*/
        //$location.path("/thing/").replace().reload(false)

        //$location.path("http://localhost/claria/pressnews.php").replace("http://localhost/claria/press.php").reload(false)
        //$location.path('view2'); // sets the current path and updates URL

        //window.history.pushState("URLTest", "Title", "http://localhost/claria");
        //history.pushState("NewURL", "Medgenome", "http://medgenome.com/diagnostics");

        /*document.getElementById("content").innerHTML = response.html;
        document.title = response.pageTitle;
        window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", urlPath);*/

        //alert("URL change");

        var years = ["2014", "2015", "2016", "2017", "2018"];

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
            var url = 'pressnews.php?year='+$year;

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).
            success(function(response){ //alert(response);
                //alert(response.pressnews);
                //alert(response);
                //$scope.main_titles = response.titlenews; // Title news object
                $scope.response = response;
                $("#waitIcon").hide();
                $scope.main_titles = response.titlenews; // Title news object
                $scope.monthId = response.titlenews[0]['id'].replace(" ", ""); // create id for month
                $scope.subtitle = response.pressnews; // Sub news object
            }).error(function(response) { //alert(response)
                alert("Error Result");
            });
        }

        $scope.fullNewsList($scope.currentYear);

        // view additional news
        $scope.additionalNews = function($month, $year){ //alert("Full News: #"+$month+"pop");
            //$("#pop").attr('id',   $month+'pop');
            $("#"+$month+"pop").toggle();
            //$("#71pop").css("display","");
        }
    });
    // End media page
})(window.angular);