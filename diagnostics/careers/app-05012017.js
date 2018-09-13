var app = angular.module('app', []);

app.controller('MainCtrl', function($scope, $interval, $http) {
    //$scope.arr = [];
    /*var stop = $interval(function() { alert("testing");
        $http.get('http://localhost:3000')
            .then(function(res) {
                $scope.arr = res.data.arr;
            }, function(e) {
                console.error(e);
            });
    }, 3000);*/
    /*$http.get('http://localhost:8080/')
    /!*$http.get('http://staging.medgenome.com/test')*!/
        .then(function(res) { alert("response"+res);
            $scope.arr = res.data;
        }, function(e) { alert(e.error);
            //console.error(e);
        });*/

    $scope.arr = '';

    $http({
        /*url: 'http://localhost:8080/test',*/
        url: 'http://www.medgenome.com/test',
        method: "GET",
        /*data: ticket,*/
        headers: {'Content-Type': 'application/json'}})
        .then(function(res) { alert("response"+res);
            $scope.arr = res.data;
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
