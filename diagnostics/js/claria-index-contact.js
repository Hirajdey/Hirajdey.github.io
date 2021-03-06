var contactApp = angular.module("contactApp", []);
contactApp.controller("contactCtrl", function ($scope, $http, calculateService) {

    // current URL
    if($scope.sitepath == 'http://medgenome.com')
        $scope.sitepath = 'http://www.medgenome.com';
    else
        $scope.sitepath = $scope.sitepath;



    url = $scope.sitepath;
    calculateService.setCurrentUrl(url); // set url

   // Submit the contact form
    $scope.submit = function () { //alert("Contact Form test")

        //alert($scope.name); //alert($scope.nameValid);

        // for name
        if(typeof($scope.name) == 'undefined' || ($scope.name == '')){
            $scope.nameValid = true;
        }else {
            $scope.nameValid = false;
        }
        // for email
        if (typeof($scope.email) == 'undefined' || ($scope.email == '')){
            $scope.emailValid = true;
        }else {
            $scope.emailValid = false;
        }
        // for phone
        if (typeof($scope.phone) == 'undefined' || ($scope.phone == '')){
            $scope.phoneValid = true;
        }else {
            $scope.phoneValid = false;
        }
        // for city
        if (typeof($scope.city) == 'undefined' || ($scope.city == '')){
            $scope.cityValid = true;
        }else {
            $scope.cityValid = false;
        }
        // for organization
        if (typeof($scope.organization) == 'undefined' || ($scope.organization == '')){
            $scope.organizationValid = true;
        }else {
            $scope.organizationValid = false;
        }
        if((typeof($scope.name) == 'string') && (typeof($scope.email) == 'string') &&  (typeof($scope.phone) == 'string') &&  (typeof($scope.city) == 'string') &&  (typeof($scope.organization) == 'string') && ($scope.name != null) && ($scope.email != '') && ($scope.phone != '') && ($scope.city != '') && ($scope.organization != '')){
        //alert("Contact Form test")
            var method = 'POST';
            var url = '../contactmail/claria-index-contact-mail.php?name='+$scope.name+'&email='+$scope.email+'&phone='+$scope.phone+'&city='+$scope.city+'&organization='+$scope.organization;

            var FormData = {
                'name': $scope.name,
                'email': $scope.email,
                'message': $scope.message
            };

            $http({
                method: method,
                url: url,
                data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).
            success(function(response) { //alert(response);
                if(response == 1){ //alert("success")
                    $("#mail-sent").show();
                    $("#form").hide();
                     /*$("#mail-sent-failed").hide();
                    $("#mail-icon").show(); */// Show mail icon showing
                } else { //alert("Failure");
                    $("#mail-sent-failed").show();
                    /*$("#mail-sent").hide();
                    $("#contact-form-body").hide();
                    $("#close-icon").show();*/ // Close icon showing
                }
            }).
            error(function(response) {
                alert("Mail sent failed")
            });

        }
    }
   // End

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