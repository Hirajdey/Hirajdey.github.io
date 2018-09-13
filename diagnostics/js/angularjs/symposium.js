angular
    .module("symposiumApp",[])
    .controller("symposiumCtrl", function ($scope, $http, $anchorScroll) {
        $scope.submit = function () { //alert("Symposium");

            // for name
            if (typeof($scope.name) == 'undefined' || ($scope.name == '')){
                $scope.nameValid = true;
            }else {
                $scope.nameValid = false;
            }

            // for organization
            if (typeof($scope.organization) == 'undefined' || ($scope.organization == '')){
                $scope.orgValid = true;
            }else {
                $scope.orgValid = false;
            }

            // for email
            if (typeof($scope.email) == 'undefined' || ($scope.email == '')){
                $scope.emailValid = true;
            }else {
                $scope.emailValid = false;
            }
            // for research
            /*if (typeof($scope.research) == 'undefined' || ($scope.research == null)){
                $scope.researchValid = true;
            }else {
                $scope.researchValid = false;
            }*/

            $scope.waitingText = "Please Wait...";

            if(((typeof($scope.name) == 'string') && ($scope.name != '')) &&  ((typeof($scope.organization) == 'string' && ($scope.organization != '')) && ((typeof($scope.email) == 'string') && ($scope.email != '')))){

                $anchorScroll();
                $("#order-body").hide();
                $("#busy-symbol").show();

                var method = 'POST';
                var url = 'symposium-mail.php?name='+$scope.name+'&organization='+$scope.organization+'&email='+$scope.email+'&research='+$scope.research;

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
                        $anchorScroll();
                        $("#mail-sent").show();
                        $("#order-body").hide();
                        $("#busy-symbol").hide();
                        $("#mail-sent-failed").hide();
                    } else {
                        $("#mail-sent-failed").show();
                        $("#busy-symbol").hide();
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