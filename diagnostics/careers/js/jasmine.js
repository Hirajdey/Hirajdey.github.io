// Code goes here
var app = angular.module('myApp',[]);
app.controller("RegisterController", function ($rootScope, $scope) {

    // Add
    $scope.z = 0;
    $scope.sum = function() {
        $scope.z = $scope.x + $scope.y;
    };

    // Multiply
    $scope.c = 0;
    $scope.a = 2;
    $scope.b = 3;
    $scope.multiply = function () { //alert($scope.a);
        //$scope.c = $scope.a * $scope.b;
        $scope.c = $scope.a * $scope.b;
        //alert($scope.c);
    }

    // Sub
    $scope.c = 0;
    $scope.a = 2;
    $scope.b = 3;
    $scope.sub = function () { //alert($scope.a);
        //$scope.c = $scope.a * $scope.b;
        $scope.c = $scope.a - $scope.b;
        //alert($scope.c);
    }

});

/*describe('RegisterController', function() {

    beforeEach(angular.mock.module('myApp'));

    var $controller;

    beforeEach(angular.mock.inject(function(_$controller_){
        $controller = _$controller_;
    }));

    describe('sum', function () {
        it('1 + 1 = 2', function () {
            var $scope = {};
            var controller = $controller('RegisterController', { $scope: $scope });
            $scope.x = 1;
            $scope.y = 2;
            $scope.sum();
            expect($scope.z).toBe(3);
        });
    });
    describe('multiply', function (){
        it('2 * 2 = 4', function () {
            var $scope = {};
            var controller = $controller('RegisterController', {$scope: $scope});
            $scope.a = 3;
            $scope.b = 2;
            $scope.multiply();
            expect($scope.c).toBe(6);
        });
    });
});*/

