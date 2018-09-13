var webinarApp = angular.module("diabetesApp",[]);
webinarApp.controller("diabetesCtrl", function ($scope, $http, $anchorScroll) {

    //for ng repeat
    $scope.records = [
        {
            "Name" : "Alfreds Futterkiste",
            "Country" : "Germany"
        },
        {
            "Name" : "Berglunds snabbköp",
            "Country" : "Sweden"
        },
        {
            "Name" : "Centro comercial Moctezuma",
            "Country" : "Mexico"
        },
        {
            "Name" : "Ernst Handel",
            "Country" : "Austria"
        }
    ]

    // Common function
    $scope.sectionVisible = function($sectionName, $disease, $samples, $samplesdata, $diseaseClass, $samplesClass, $samplesdataClass){

        $("."+$sectionName).show(); // section view

        $scope.disease = $disease;
        $scope.samples = $samples;
        $scope.samplesdata = $samplesdata;

        $scope.addClassDisease = function(){
            return $diseaseClass;
        }
        $scope.addClassSamples = function(){
            return $samplesClass;
        }
        $scope.addClassSamplesData = function(){
            return $samplesdataClass;
        }
    }
    // End
    
    // Default hover set
    $scope.addClassDisease = function(){
        return "active";
    }

    // Show the section  by use Tab
    $scope.showDisease = function () {
        $scope.sectionVisible('disease',false, false, false, 'active', 'deactive', 'deactive');
    }

    $scope.showSamples = function () {
        $scope.sectionVisible('samples',true, true, false, 'deactive', 'active', 'deactive');
    }
    $scope.showSamplesData = function () {
        $scope.sectionVisible('samplesdata',true, false, true, 'deactive', 'deactive', 'active');
    }

    $scope.leftLink = function (disease_type) {
        //alert(disease_type);
        //var evens = diseases.filter(active);

        for(i=0; i<diseases.length; i++){
            $( "#"+diseases[i] ).removeClass( "active" );
            if(disease_type == diseases[i]){
                $( "#"+diseases[i] ).addClass( "active" );
            }

        }
    }

    // diabetes default view
    $scope.diseasearea = true;

    // Lead form Submit
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
            var url = base_url + '/diabetesleadusers.php?name=' + $scope.name + '&email=' + $scope.email + '&organization=' + $scope.organization + '&designation=' + $scope.designation;

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
                    $anchorScroll();
                    $scope.diseasearea = false;
                    $scope.retinopathy = false;
                    $scope.clinicaldata = false;
                    $scope.filter1 = false;
                    $scope.leadform = false;
                    $scope.genomicsdata = false;
                    $scope.thanks = true;
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

})