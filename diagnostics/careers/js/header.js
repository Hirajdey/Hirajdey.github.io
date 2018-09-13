var headerApp = angular.module("headerApp", []);
headerApp.controller("headerCtrl", function ($scope, $location) {
    var pageLength = $location.absUrl().split('/').length;
    var pageName = $location.absUrl().split('/')[(pageLength-1)];
    //if(pageName == 'ngs'){
        $scope.href = "ngs";
    //}
});

function subMenuShow(){
    $("#serviceSubMenu").show();
}
function subMenuHide(){
    $("#serviceSubMenu").css("display","none");
}