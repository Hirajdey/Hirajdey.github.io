var oncopeptDownload = angular.module("oncopeptDownloadApp",[]);
oncopeptDownload.controller("oncopeptDownloadCtrl", function ($scope, $http) {
    $scope.oncopeptDownload = function () {
        $scope.downloadform = true;
    }
    
    // Submit the form
    $scope.submit = function () {

        // name validation
        if (typeof($scope.name) == 'undefined' || ($scope.name == '')) {
            $scope.nameValid = true;
        } else {
            $scope.nameValid = false;
        }

        // email validation
        if (typeof($scope.email) == 'undefined' || ($scope.email == '')){
            $scope.emailValid = true;
        }else {
            $scope.emailValid = false;
        }
        // organization validation
        if (typeof($scope.organization) == 'undefined' || ($scope.organization == null)){
            $scope.organizationValid = true;
        }else {
            $scope.organizationValid = false;
        }
        
        if (($scope.name != '') && ($scope.email != '') && (typeof($scope.email) != 'undefined') && ($scope.organization != null)) {
            var base_url = window.location.origin;
            if (base_url == 'http://localhost')
                base_url = base_url + '/homepage';
            else
                base_url = base_url

            var method = 'POST';
            var url = base_url + '/oncopeptdownload.php?name=' + $scope.name + '&email=' + $scope.email + '&organization=' + $scope.organization + '&designation=' + $scope.designation;

            var FormData = {
                'email': $scope.email,
                'name': $scope.name
            };

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response)
                if (response == 1) {
                    $scope.downloadform = false;
                    $("#presentations").removeClass('not-active').addClass('after-login');
                    $("#posters").removeClass('not-active').addClass('after-login');
                    $("#products").removeClass('not-active').addClass('after-login');
                    $("#videos").removeClass('not-active').addClass('after-login');
                    $("#papers").removeClass('not-active').addClass('after-login');
                    $("#events").removeClass('not-active').addClass('after-login');

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
    $scope.cancel = function () {
        $scope.downloadform = false;
    }

    // Section display
    //var oncopeptsection = ['OncoPeptsolutions', 'OncoPepttume', 'OncoPeptvac', 'OncoPepttope'];

    // default display
    $scope.OncoPeptsolutions = true;

    // show for OncoPeptsolutions
    $scope.showOncoPeptsolutions = function () {
    $scope.OncoPeptsolutions = true;
    $scope.OncoPepttume = false;
    $scope.OncoPeptvac = false;
    $scope.OncoPepttope = false;
    }

    // show for OncoPepttume
    $scope.showOncoPepttume = function () {
        $scope.OncoPeptsolutions = false;
        $scope.OncoPepttume = true;
        $scope.OncoPeptvac = false;
        $scope.OncoPepttope = false;
    }

    // show for OncoPeptvac
    $scope.showOncoPeptvac = function () {
        $scope.OncoPeptsolutions = false;
        $scope.OncoPepttume = false;
        $scope.OncoPeptvac = true;
        $scope.OncoPepttope = false;
    }

    // show for OncoPepttope
    $scope.showOncoPepttope = function () {
        $scope.OncoPeptsolutions = false;
        $scope.OncoPepttume = false;
        $scope.OncoPeptvac = false;
        $scope.OncoPepttope = true;
    }
});