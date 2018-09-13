var admin_app = angular.module('adminApp',[]);
admin_app.controller("adminCtrl", function ($scope, $http, $window) {

    $scope.submit = function () { //alert($scope.username)

        // username validation
        if (typeof($scope.username) == 'undefined' || ($scope.username == '')){
            $scope.usernameValid = true;
        }else {
            $scope.usernameValid = false;
        }

        // password validation
        if (typeof($scope.password) == 'undefined' || ($scope.password == '')){
            $scope.passwordValid = true;
        }else {
            $scope.passwordValid = false;
        }

        if(($scope.username != '' && typeof($scope.username) != 'undefined') && ($scope.password != '' && typeof($scope.password) != 'undefined')) {

            var method = 'POST';
            var url = '../adminlogin.php?username='+ $scope.username +'&password=' + $scope.password;

            var FormData = {
                'username': $scope.username,
                'password': $scope.password
            };

            $http({
                method: method,
                url: url,
                data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response)
                if(response == 1) {
                    localStorage.setItem("username", $scope.username);
                    var session_name = localStorage.getItem("username");
                    //alert(session_name);
                    if($scope.username = "videoadmin@medgenome.com")
                        $window.location.href = '../dashboard.php?act=videos&sub=list'; // error show for email exist
                    if($scope.username = "user@medgenome.com")
                        $window.location.href = '../dashboard.php?act=disease&sub=list'; // error show for email exist
                    else
                        $window.location.href = '../dashboard.php?act=oncopept&sub=list'; // error show for email exist
                }
                else if(response == 0)
                    $scope.authorizedValid = true; // error for not authorize
                else if(response == 'success'){
                    $window.location.href = './download_users_list.php';
                    //$scope.emailExist = false; // hide email error
                    //$scope.mobileExist = false; // hide contact number error
                    $("#questionnaire-body").hide();
                    $("#mail-sent").show();
                } else{
                    $("#mail-sent-failed").show();
                }
                //alert(response.subnews[1]['id']);

            }).error(function (response) {
                alert("Error Result");
            });
        }
    }
});