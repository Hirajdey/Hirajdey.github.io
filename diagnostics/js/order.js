angular
    .module("orderApp",[])
    .controller("orderCtrl", function ($scope, $http) { //alert($scope.code);
        var code = $scope.code;
        //alert(code);
        $scope.submit = function () { //alert($scope.mobile);
            if (typeof($scope.email) == 'undefined' || ($scope.email == '')){
                $scope.emailValid = true;
            }else {
                $scope.emailValid = false;
            }
            // for mobile
            if (typeof($scope.mobile) == 'undefined' || ($scope.mobile == null)){
                $scope.mobileValid = true;
            }else {
                $scope.mobileValid = false;
            }
            // for organization
            if (typeof($scope.organization) == 'undefined' || ($scope.organization == '')){
                $scope.orgValid = true;
            }else {
                $scope.orgValid = false;
            }
            if((typeof($scope.email) == 'string') &&  (typeof($scope.mobile) == 'number') && (typeof($scope.email) == 'string') && ($scope.email != '') && ($scope.mobile != null) && ($scope.organization != '')){

                $scope.waitingText = "Please Wait...";

                var method = 'POST';
                var url = 'order-mail.php?email='+$scope.email+'&mobile='+$scope.mobile+'&organization='+$scope.organization+'&code='+code+'&testcode='+$scope.code+'&testname='+$scope.test;

                var FormData = {
                    'email': $scope.email,
                    'mobile': $scope.mobile,
                    'organization': $scope.organization
                };

                $http({
                    method: method,
                    url: url,
                    data: FormData,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).
                success(function(response) { //alert(response);

                    $scope.waitingText = "";

                    if(response == 1){
                        $("#mail-sent").show();
                        $("#order-body").hide();
                        $("#mail-sent-failed").hide();
                    } else {
                        $("#mail-sent-failed").show();
                        $("#mail-sent").hide();
                        $("#order-body").hide();
                    }
                }).
                error(function(response) {
                    alert("Mail sent failed")
                });

            }
        }
    });