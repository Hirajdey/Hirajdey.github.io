// Code goes here
/*var app = angular.module('myApp',[]);
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
});*/

var myapp = angular.module('MyApp', []);
myapp.controller('MyController', function ($rootScope, $scope, $http) {

    $scope.hint = "<p>Start with a web server such as <strong>node server.</strong></p>";
    $scope.loadJson = function(){

        // json test
        /*$.getJSON( "json/media.json", function( data ) {
            var items = [];
            $.each( data, function( key, val ) {
                items.push(val);
                //var json_value = val;
                //return json_value;
                //$scope.setValue(val);
            });

            /!*$( "<ul/>", {
                "class": "my-new-list",
                html: items.join( "" )
            }).appendTo( "body" );*!/

        });*/

        //end

        var getDataJson = $http.get('json/media.json');

        getDataJson.success(function (data, status, headers, config){
            $scope.data = data;
        });

        getDataJson.error(function (data, status, headers, config){
            throw new Error('Oh no! An Error');
        });
        //return "test";
    };
   /* $scope.setValue = function(val){
        //alert("Value: "+ val);
        return var resultVal = val;
    };*/
});

describe('Media Page', function() {

    //beforeEach(angular.mock.module('mediaApp'));
    beforeEach(angular.mock.module('MyApp'));

    var $controller;
    beforeEach(angular.mock.inject(function (_$controller_) {
        $controller = _$controller_;
    }));

    var $httpBackend;
    beforeEach(inject(function (_$httpBackend_) {
        $httpBackend = _$httpBackend_
    }));

    describe('Media Month Controller', function () {

        /*it("Media sub news fetch successfully", function(){
         $httpBackend.expectGET('json/media.json').respond({
         "result": 1
         });
         var $scope = {};
         var controller = $controller('MyController', {$scope: $scope});
         $scope.loadJson();
         $httpBackend.flush();
         expect($scope.data.result).toEqual(1);
         });*/

        it('should demonstrate using when (200 status)', inject(function($http) {

            var $scope = {};

            /* Code Under Test */
            $http.get('json/media.json')
                .success(function(data, status, headers, config) { //alert(data.result + " Name: " +data.name);
                    $scope.valid = true;
                    $scope.response = data;
                })
                .error(function(data, status, headers, config) {
                    $scope.valid = false;
                });
            /* End */

            $httpBackend
                .expect('GET', 'json/media.json')
                .respond(200, { 'result': 0 });

            $httpBackend.flush();
    
            expect($scope.valid).toBe(true);
            expect($scope.response).toEqual({ 'result': 0 });

        }));

    });

});