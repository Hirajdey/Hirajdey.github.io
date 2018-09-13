angular
    .module("eventsApp",['ngSanitize'])
    .controller("eventsCtrl", function ($scope, $http, calculateService) {

        // current URL
        if($scope.sitepath == 'http://medgenome.com')
            $scope.sitepath = 'http://www.medgenome.com';
        else
            $scope.sitepath = $scope.sitepath;

        url = $scope.sitepath;
        calculateService.setCurrentUrl(url);
//alert(calculateService.getCurrentUrl());

        // Upcoming events
        $scope.upcomingEvent = function () {
            var method = 'GET';
            var url = calculateService.getCurrentUrl() + '/cmedata.php?cmetype=upcoming';

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response.records[0])
                //alert(response);

                if (response == 0) {
                    $scope.upcomingEventsList = '';
                    $("#search").hide();
                    $("#norecord").show();
                }
                else {
                    $("#search").show(); // search section visible
                    $scope.upcomingEventsList = response.records;
                }
            }).error(function (response) {
                alert("Error Result");
            });
        }
        $scope.upcomingEvent();

        // Recent events
        $scope.recentEvent = function(){

            var method = 'GET';
            var url = calculateService.getCurrentUrl() + '/cmedata.php?cmetype=recent';

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response.records[0])
                //alert(response);

                if(response == 0) {
                    $scope.recentEventsList = '';
                    $("#noRecentRecord").show();
                    $("#search").hide();
                }
                else{
                    $("#search").show();
                    $("#noRecentRecord").hide();
                    $scope.recentEventsList = response.records;
                }
            }).error(function (response) {
                alert("Error Result");
            });
        }

        // Past events
        $scope.pastEvent = function(){

            // search section visible
            $("#search").show();

            var method = 'GET';
            var url = calculateService.getCurrentUrl() + '/cmedata.php?cmetype=past';

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response.records)
                //alert(response);
                if(response == 0) {
                    $scope.pastEventsList = '';
                    $("#search").hide();
                    $("#noPastRecord").show();
                }
                else{
                    $("#search").show();
                    $("#process").hide();
                    $("#noPastRecord").hide();
                    $scope.pastEventsList = response.records;
                }
            }).error(function (response) {
                alert("Error Result");
            });
        }

        // Agenda
        $scope.custom = true;
        $scope.toggleAgenda = function(cmeId) {
            $scope.custom = $scope.custom === false ? true: false;

            var method = 'GET';
            var url = calculateService.getCurrentUrl() + '/cmedata.php?cmeid='+cmeId;

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response.records)
                //alert(response);
                if(response == 0) {
                    $scope.pastEventsList = '';
                    $("#search").hide();
                    $("#noPastRecord").show();
                }
                else{
                    $("#search").show();
                    $("#process").hide();
                    $("#noPastRecord").hide();
                    $scope.agenda = response;
                }
            }).error(function (response) {
                alert("Error Result");
            });
        };
    });

    // factory
    angular.module('eventsApp').factory('calculateService', function(){

        var url = '';
        var act = '';

        // set url
        var setCurrentUrl = function(curl){ //alert(curl);
            url = curl;
        }

        // get url
        var getCurrentUrl = function(){
            return url;
        }

        return {
            setCurrentUrl: setCurrentUrl,
            getCurrentUrl: getCurrentUrl
        };

    });

    