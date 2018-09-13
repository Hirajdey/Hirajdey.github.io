// Code goes here
var app = angular.module('myApp',[]);
app.controller("RegisterController", function ($rootScope, $scope) {

    // Multiply
    /*$scope.Multiply = function ($x, $y) {
        return ($x * $y);
    }*/

    // Add
    $scope.z = 0;
    $scope.sum = function() {
        $scope.z = $scope.x + $scope.y;
    };

})
    /*.filter('addNumber', function () { //alert("Inside the addNumber Function");
        return function(number, number) { //alert(number);
            return (number + number);
        }
    });*/

describe('RegisterController', function() {

    //var $rootScope, $scope, $controller,registerController;

    //beforeEach(module('myApp'));
    beforeEach(angular.mock.module('myApp'));

    var $controller;

    beforeEach(angular.mock.inject(function(_$controller_){
        $controller = _$controller_;
    }));

    describe('sum', function () {
        it('1 + 1 should equal 2', function () {
            var $scope = {};
            var controller = $controller('RegisterController', { $scope: $scope });
            $scope.x = 1;
            $scope.y = 2;
            $scope.sum();
            expect($scope.z).toBe(3);
        });
    });

    /*beforeEach(inject(function(_$rootScope_, _$controller_){
        $rootScope = _$rootScope_;
        $scope = $rootScope.$new();
        $controller = _$controller_;

        registerController = $controller('RegisterController', {'$rootScope' : $rootScope, '$scope': $scope});
    }));*/

    // add number
   /* var addno;
    beforeEach(inject(function ($filter) { //alert("addno funtion");
        addno = $filter('addNumber', {});
    }));*/

    /*it('registerController controller is exist', function() {
        expect(registerController).toBeDefined();
    });

    it('Successfully added two numbers', function(){
        expect(addno(2, 2)).toBe(4);
    });*/

    //Spec for multiply operation
    /*it("should be able to multiply 10 and 40", function() {
        expect(Multiply(10, 40)).toEqual(400);
    });*/
});

