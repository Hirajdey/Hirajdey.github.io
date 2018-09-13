var app = angular.module("nodeApp", []);

app.controller("nodeCtrl", function ($scope, $http) {
    //alert("Test");

    $http({
        method: 'GET',
        url: 'http://localhost:8080/dbconnection',
        //url: 'https://diagnostics.medgenome.com:8080/',
        data: FormData,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function (response) { alert(response)
        $scope.events = response;

    }).error(function (response) {
        alert("Error Result");
    });
});