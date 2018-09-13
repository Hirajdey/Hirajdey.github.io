describe('RegisterController', function() {

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

    //subtract
    describe('sub', function (){
        it('6 - 2 = 4', function () {
            var $scope = {};
            var controller = $controller('RegisterController', {$scope: $scope});
            $scope.a = 6;
            $scope.b = 2;
            $scope.sub();
            expect($scope.c).toBe(4);
        });
    });
});

