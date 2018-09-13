var leaderApp = angular.module('leadershipApp', ['ngRoute']);

leaderApp.controller("managementController", function ($scope, $anchorScroll) {
    $( "#myModal").hide();

    $scope.detailedView = function ($photo, $name, $description) {
        $scope.managementPopup = true;
        $scope.managementPage = true;
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
});


leaderApp.config(function($routeProvider) {
    $routeProvider

        .when('/', {
            templateUrl : 'leadership/management.php',
            controller  : 'managementController'
        })

        .when('/directors', {
            templateUrl : 'leadership/directors.php',
            controller  : 'BlogController'
        })

        .when('/advisors', {
            templateUrl : 'leadership/advisors.php',
            controller  : 'AboutController'
        })

        .when('/investors', {
            templateUrl : 'leadership/investors.php',
            controller  : 'AboutController'
        })

        .when('/iec', {
            templateUrl : 'leadership/iec.php',
            controller  : 'AboutController'
        })

        .otherwise({redirectTo: '/'});
});