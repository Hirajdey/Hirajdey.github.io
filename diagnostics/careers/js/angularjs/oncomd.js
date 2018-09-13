var oncomdApp = angular.module("oncomdApp", ["ngRoute"]);

alert("Oncomd");
oncomdApp.config(function($routeProvider) { alert("route provider")
    $routeProvider
        .when('/research', {
            templateUrl : 'about.html'
        })
});

