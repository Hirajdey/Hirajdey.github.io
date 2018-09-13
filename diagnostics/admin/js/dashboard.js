var dashboardapp = angular.module('dashboardApp',['ngRoute']);

    // root provider
    dashboardapp.config(function($routeProvider) {
        $routeProvider

            .when('/blog', {
                templateUrl : 'admin/blog.php'
            })

            //.otherwise({redirectTo: '/'});
    });