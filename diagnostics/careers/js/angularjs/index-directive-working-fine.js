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

// banner
indexapp.directive('bannersection', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) { //alert("test"+attrs.pageurl)
            return attrs.pageurl + "/directives/banners.html";
        }
    }
});
// genomic asia
indexapp.directive('genomicasia', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/genomicasia.html";
        }
    }
});
// igp
indexapp.directive('indexigp', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-igp.html";
        }
    }
});
// oncopept
indexapp.directive('indexoncopept', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-oncopept.html";
        }
    }
});
// oncomd
indexapp.directive('indexoncomd', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-oncomd.html";
        }
    }
});
// NGS
indexapp.directive('indexngs', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-ngs.html";
        }
    }
});
// NIPT
indexapp.directive('indexnipt', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-nipt.html";
        }
    }
});
// IGP for mobile
indexapp.directive('indexigpmobile', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-igp-mobile.html";
        }
    }
});
// oncopept for mobile
indexapp.directive('indexoncopeptmobile', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-oncopept-mobile.html";
        }
    }
});
// oncomd for mobile
indexapp.directive('indexoncomdmobile', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-oncomd-mobile.html";
        }
    }
});
// NGS for mobile
indexapp.directive('indexngsmobile', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-ngs-mobile.html";
        }
    }
});
// about us
indexapp.directive('indexaboutus', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/index-aboutus.html";
        }
    }
});
// scroll top
/*indexapp.directive('scrolltop', function () {
    return{
        restrict : 'E',
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/scroll-top.html";
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
