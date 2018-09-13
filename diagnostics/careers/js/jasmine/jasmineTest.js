// Code goes here
var app = angular.module('myApp',[]);
app.controller("RegisterController", function ($rootScope, $scope) {

    // Do something

})
    .filter('addNumber', function () { //alert("Inside the addNumber Function");
        return function(number1, number2) { //alert(number);
            return (number1 + number2);
        }
    });
