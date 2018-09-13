var app = angular.module("servicesApp", []);
var active = ['wgs', 'wes', 'rns', 'mirna', 'chip', 'methyl', 'tcr'];

app.controller("servicesCtrl", function ($scope) {
    $scope.showServicesSections = function (id) {
        //var current_id = id;
       $scope.active[0] = true;
        for(i=0; i<active.length; i++){
            if(active[i] == id) { alert(id)
                $("#" + id).addClass('active');
            }
            else {
                $("#" + active[i]).removeClass('active');
            }
        }
    }

});