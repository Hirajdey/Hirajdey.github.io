var app = angular.module('app', []);

app.controller('MainCtrl', function($scope, $interval, $http, $location) {

    $scope.arr = '';

   var protocol = $location.protocol();
   var host = $location.host();
   var combined = protocol + '://' + host;

    var route = "/testroute";


    if(combined == 'http://localhost'){
        var url = "http://localhost:8080/testroute";
        /*$http.get('http://localhost:8080/testroute',{"msg":"Hello world from server.js"}).success(function(data){

        });*/
    }
    else{
    var url = "http://staging.medgenome.com:8080/testroute";
        /*$http.get('http://localhost:8080/testroute',{"msg":"Hello world from server.js"}).success(function(data){

        });*/
    }

    //alert(url);

    $http({
        url: url,
        method: "GET",
        headers: {'Content-Type': 'application/json'}
    })
        .then(function(res) { alert("response:"+res.data);
            $scope.arr = res.data;
            //$scope.arr = "Test Response";
        }, function(e) { alert(e.error);
            //console.error(e);
        });

    /*$http({
        method: 'GET',
        url: 'http://localhost:3000',
        //data: FormData,
        headers: {'Content-Type': 'text/javascript'}
    }).
    success(function(response){ alert(response);
        alert("success");
    }).error(function(response) {
        alert("Error Result");
    });*/

});
/*
app.config(['$httpProvider', function ($httpProvider) {
    $httpProvider.defaults.headers.post['Accept'] = 'application/json, text/javascript';
    $httpProvider.defaults.headers.post['Content-Type'] = 'application/json; charset=utf-8';
    $httpProvider.defaults.headers.post['Access-Control-Max-Age'] = '1728000';
    $httpProvider.defaults.headers.common['Access-Control-Max-Age'] = '1728000';
    $httpProvider.defaults.headers.common['Accept'] = 'application/json, text/javascript';
    $httpProvider.defaults.headers.common['Content-Type'] = 'application/json; charset=utf-8';
    $httpProvider.defaults.useXDomain = true;
}]);*/

