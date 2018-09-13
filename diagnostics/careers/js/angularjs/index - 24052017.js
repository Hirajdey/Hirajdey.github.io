var indexapp = angular.module('indexApp', ['loadingBar', 'ngAnimate']);

indexapp.controller('indexCtrl', function ($scope, $http, $timeout, cfpLoadingBar, calculateService) {

        // current URL
        if($scope.sitepath == 'http://medgenome.com')
            $scope.sitepath = 'http://www.medgenome.com';
        else
            $scope.sitepath = $scope.sitepath;

        url = $scope.sitepath;
        calculateService.setCurrentUrl(url);
        $scope.curl = calculateService.getCurrentUrl();
        // end

        $scope.start = function() {
            cfpLoadingBar.start();
        };

        $scope.complete = function () {
            cfpLoadingBar.complete();
        }

        // fake the initial load so first time users can see it right away:
        $scope.start();
        $scope.fakeIntro = true;
        $timeout(function() {
            $scope.complete();
            $scope.fakeIntro = false;
        }, 750);
    });
/*indexapp.directive('bannersection', function () {
        return{
            restrict:'E',
            scope: {
                cURL:'=pageurl'
            },
            link: function ($scope) {
                $scope.cpath = $scope.cURL;
                $scope.cURL = $scope.cURL + '/directives/banners.html';
            },
            template : '<ng-include src="cURL"></ng-include>'
        }
    });*/

var index_directives = {banner: 'banners', genomicasia: 'genomicasia', indexigp: 'index-igp', indexoncopept: 'index-oncopept', indexoncomd: 'index-oncomd', indexngs: 'index-ngs', indexnipt: 'index-nipt',
    indexigpmobile: 'index-igp-mobile', indexoncopeptmobile: 'index-oncopept-mobile', indexoncomdmobile: 'index-oncomd-mobile', indexngsmobile: 'index-ngs-mobile',
    indexaboutus: 'index-aboutus'};
angular.forEach(index_directives, function(value, key) { //alert(value)
    indexapp.directive(key, function () {
        return{
            restrict : 'E',
            templateUrl: function(element, attrs) {
                return attrs.pageurl + "/directives/" + value + ".html";
            }
        }
    });
});

/*indexapp.directive('banner', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return "http://staging.medgenome.com/directives/banners.html";
        }
    }
});*/
    // factory
indexapp.factory('calculateService', function(){

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
