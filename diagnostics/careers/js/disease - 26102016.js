angular
    .module("diseaseApp",['ngSanitize'])
    .controller("diseaseCtrl", function ($scope, $http, $sce) {

        // test
       /* $scope.title = 'PREFERRED SAMPLE TYPE';*/
        // end test

        //default
        $("#norecord").show();

        // Radio button click
        $scope.radioClick = function(){
            //alert($scope.disease+"test");
            if($scope.disease == 'Oncology' || $scope.disease == 'Oncology - IMMUNOHISTOCHEMISTRY')
                $scope.title = 'PREFERRED SAMPLE TYPE';
            else
                $scope.title = '';

            var method = 'POST';
            var url = 'diseasedata.php?disease='+ $scope.disease;

            var FormData = {
                'email': $scope.email,
                'mobile': $scope.mobile
            };

            $http({
                method: method,
                url: url,
                data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(response.records[0])
                //alert(response);

                if(response == 0) {
                    $scope.list = '';
                    $("#norecord").show();
                }
                else{
                    $("#norecord").hide();
                    $scope.list = response.records;
                }
            }).error(function (response) {
                alert("Error Result");
            });
        }
    })
    .directive('diseaseDesclaimer', function () {
        return {
            //template : 'Name: {{ customer.name}}, Address: {{ customer.address }}'
            templateUrl : 'directives/disease_desclaimer.html'
        }
    });