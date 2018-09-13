var publicationApp = angular.module("publicationsApp",['ngAnimate']);
publicationApp.controller("publicationsCtrl", function ($scope, $http, calculateService) {

    // Default hover set
    /*$scope.addClassResearch = function(){
        return "active";
    }*/

    // current URL
    if($scope.sitepath == 'http://medgenome.com')
        $scope.sitepath = 'http://www.medgenome.com';
    else
        $scope.sitepath = $scope.sitepath;

    url = $scope.sitepath;
    calculateService.setCurrentUrl(url);
    $scope.curl = calculateService.getCurrentUrl();
    // end

    // Common function
    $scope.sectionVisible = function($sectionName, $research, $posters, $papers, $researchClass, $postersClass, $papersClass){ //alert("Section Name: "+$sectionName)

        $("."+$sectionName).show(); // section view

        $scope.research = $research;
        $scope.posters = $posters;
        $scope.papers = $papers;

        $scope.addClassResearch = function(){
            return $researchClass;
        }
        $scope.addClassPosters = function(){
            return $postersClass;
        }
        $scope.addClassPapers = function(){
            return $papersClass;
        }
    }
    // End

    $scope.callData = function (type) { //alert(type)
        // Data fetch
        var method = 'POST';
        var url = calculateService.getCurrentUrl() + '/publicationsdata.php?type='+type;
        $scope.researchPapers = '';

        $http({
            method: method,
            url: url,
            //data: FormData,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (response) {
            if(response == 0){
                $("#registerLink").show();
            } else { //alert(response.records[0].date);
                $scope.researchPapers = response.records;
            }
        }).error(function (response) {
            alert("Error Result");
        });
        // End
    }

    // Section visible
    $scope.showResearch = function () {
        $("#posters").hide();
        $("#papers").hide();
        $scope.callData('research');
        $scope.sectionVisible('research',false, false, false, 'active', 'deactive', 'deactive');
    }

    $scope.showPosters = function () {
        $scope.callData('posters');
        $("#research").hide();
        $("#papers").hide();
        $scope.sectionVisible('posters',true, true, false, 'deactive', 'active', 'deactive');
    }
    $scope.showPapers = function () {
        $scope.callData('papers');
        $("#research").hide();
        $("#posters").hide();
        $scope.sectionVisible('papers',true, false, true, 'deactive', 'deactive', 'active');
    }

    $scope.showResearch();

    // Download the file
    /*$scope.downloadFile = function($file){ //alert($file);
        var method = 'POST';
        var url = '../download.php?file='+$file;

        $http({
            method: method,
            url: url,
            //data: FormData,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).
        success(function(response){ //alert(response);
            $scope.test = response;
        }).error(function(response) {
            alert("Error Result");
        });
    }*/
});
// factory
angular.module('publicationsApp').factory('calculateService', function(){

    var url = '';

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