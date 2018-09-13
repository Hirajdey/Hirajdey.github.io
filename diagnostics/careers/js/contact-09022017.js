var contactApp = angular.module("contactApp", ['ui.bootstrap']);
contactApp.controller("contactCtrl", function ($scope, $http, $modal, calculateService) {

    // current URL
    if($scope.sitepath == 'http://medgenome.com')
        $scope.sitepath = 'http://www.medgenome.com';
    else
        $scope.sitepath = $scope.sitepath;



    url = $scope.sitepath;
    calculateService.setCurrentUrl(url); // set url

    ///// register form open /////
    $scope.showRegisterForm = function () {
        //$scope.close();
        var registerModalInstance = $modal.open({
            controller: 'registerCtrl',
            templateUrl: calculateService.getCurrentUrl() + '/contact/registerForm.html'
        });
    }
    // end

    //alert($scope.sitepath);
});
// Register Control
contactApp.controller('registerCtrl', function ($scope, $http, $modal, $rootScope, $uibModalStack, calculateService){

    $scope.closeRegisterModal = function () {
        $uibModalStack.dismissAll();
    };

    // close modal
    $scope.closeModal = function () {
        $uibModalStack.dismissAll();
    };

    ///////////////////// Submit the register form /////////////////////////
    $scope.register = {};
    $scope.registerSubmit = function () {

        // name validation
        if (typeof($scope.register.name) == 'undefined' || ($scope.register.name == '')) {
            $scope.nameValid = true;
        } else {
            $scope.nameValid = false;
        }

        // email validation
        if (typeof($scope.register.email) == 'undefined' || ($scope.register.email == '')){
            $scope.emailValid = true;
        }else {
            $scope.emailValid = false;
        }

        // password validation
        if (typeof($scope.register.phone) == 'undefined' || ($scope.register.phone == '')){
            $scope.phoneValid = true;
        }else {
            $scope.phoneValid = false;
        }

        if ((typeof($scope.register.name) != 'undefined') && ($scope.register.name != '') && (typeof($scope.register.email) != 'undefined') && ($scope.register.email != '') && (typeof($scope.register.phone) != 'undefined') && ($scope.register.phone != '')) {

            var method = 'POST';
            var url = calculateService.getCurrentUrl() + '/askdoctor.php?name=' + $scope.register.name + '&email=' + $scope.register.email + '&phone=' + $scope.register.phone;
            //var url = calculateService.getCurrentUrl() + '/askdoctor.php';

            /*var FormData = {
                "name": $scope.name,
                "email": $scope.email
            };*/

            $http({
                method: method,
                url: url,
                //data: FormData
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response)
                if (response == 1) {
                    $scope.downloadform = false;
                    // after register
                    $("#registerform").hide();
                    $("#registersuccess").show();
                }
                else {
                    $scope.downloadform = false;
                    alert("Database not connected");
                }
            }).error(function (response) {
                alert("Error Result");
            });
        }
        else
            $scope.downloadform = true;
    }
    ///////////////// End Register Submit ////////////////////////////
});

// factory
contactApp.factory('calculateService', function(){

    var url = '';
    var act = '';

    // set url
    var setCurrentUrl = function(curl){ //alert(curl);
        url = curl;
    }

    // get url
    var getCurrentUrl = function(){
        return url;
    }

    return {
        setCurrentUrl: setCurrentUrl,
        getCurrentUrl: getCurrentUrl
    };

});