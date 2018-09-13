var diseaseProgramApp = angular.module('diseaseprogramApp', []);

diseaseProgramApp.controller("diseaseprogramCtrl", function ($scope) {
    // current URL
    if($scope.sitepath == 'http://medgenome.com')
        $scope.sitepath = 'http://www.medgenome.com';
    else
        $scope.sitepath = $scope.sitepath;
});

diseaseProgramApp.directive('diseaseprogrames', function () {
    return{
        restrict : 'E',
        controller: function($scope, $element, $attrs) { //alert($scope.sitepath)
            this.curl = function() {
                return $scope.sitepath;
            };
        },
        templateUrl: function(element, attrs) {
            return attrs.pageurl + "/directives/disease-program.html";
        }
    }
});
diseaseProgramApp.directive('population', function () {
    return{
        restrict : 'EA',
        require: '^diseaseprogrames',
        link: function(scope, element, attrs) {
            scope.getContentUrl = function() {
                return scope.sitepath + '/directives/population.html';
            }
        },
        template: '<div ng-include="getContentUrl()"></div>'
    }
});
