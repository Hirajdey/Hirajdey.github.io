angular
    .module("diseaseApp",['ngSanitize', 'ui.bootstrap'])
    .controller("diseaseCtrl", function ($scope, $http, $sce, $modal, $rootScope, calculateService, $window) { //alert("Disease CTRL")

        // declare the from variable
        $scope.from = 'divclick';

        $scope.limit = 10;
        var scrollLimit = 6;

        ///////////// Lazy load //////////////
        angular.element($window).bind("scroll", function() {
            scrollLimit += 1;
            $scope.limit = scrollLimit;
            $scope.$apply();
            //alert('Limit: '+$scope.limit);
        });
        ///////////// End lazy load /////////

        //////// modal //////////////

        // current URL
        if($scope.sitepath == 'http://medgenome.com')
            $scope.sitepath = 'http://www.medgenome.com';
        else
            $scope.sitepath = $scope.sitepath;

        //calculateService.setAct($scope.act); // set act in default
        url = $scope.sitepath;
        calculateService.setCurrentUrl(url);
        $scope.curl = calculateService.getCurrentUrl();
        // end

        // email open after register and close the register form
        $rootScope.$on("CallParentMethod", function(event, geneid){
            $uibModalStack.dismissAll();
            $scope.open(geneid);
        });
        // end

        // get disease category
        var method = 'POST';
        var url = 'diseasedata.php?category=all';

        $http({
            method: method,
            url: url,
            //data: FormData,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (response) { //alert(response)
            //alert(response);
            $scope.categories = response.records;
        }).error(function (response) {
            alert("Error Result");
        });
        // end

        // location display
        $scope.locations = [
            {id:1, name:'Bangalore', selected: false},
            {id:2, name:'Cochin', selected: false}
        ];
        // end

        // Category filter display
        $scope.diseaseFilter = true;
        $scope.diseaseFilterSymbol = "glyphicon glyphicon-plus-sign";
        $scope.toggleDiseaseFilter = function() {
            if($scope.diseaseFilterSymbol == "glyphicon glyphicon-plus-sign"){
                $scope.diseaseFilterSymbol = "glyphicon glyphicon-minus-sign";
            } else {
                $scope.diseaseFilterSymbol = "glyphicon glyphicon-plus-sign";
            }
            $scope.diseaseFilter = $scope.diseaseFilter === false ? true: false;
        };

        // Location filter display
        $scope.locationFilter = true;
        $scope.locationFilterSymbol = "glyphicon glyphicon-plus-sign";
        $scope.toggleLocationFilter = function() {
            if($scope.locationFilterSymbol == "glyphicon glyphicon-plus-sign"){
                $scope.locationFilterSymbol = "glyphicon glyphicon-minus-sign";
            } else {
                $scope.locationFilterSymbol = "glyphicon glyphicon-plus-sign";
            }
            $scope.locationFilter = $scope.locationFilter === false ? true: false;
        };


        ///////////////////// Submit the email form /////////////////////////
        $scope.emailSubmit = function (geneid) { //alert(" test ID" + geneid)

            // waiting text
            //$(".disease-body").css({"position": "absolute", "top": 0, "left": 0, "width": "100%", "height": "100%", "background-color": "rgba(0,0,0,0.5)", "z-index": 1000});
            //$(".disease-body").addClass('overlay');
            $scope.waitingText = "Please Wait...";
            // end

            $scope.geneid = geneid;

            /*var modalInstance = $modal.open({
                controller: 'emailCtrl',
                templateUrl:'disease/emailForm.html'
            });*/

            // email validation
            if (typeof($scope.loginemail) == 'undefined' || ($scope.loginemail == '')){
                $scope.emailValid = true;
            }else {
                $scope.emailValid = false;
            }

                var method = 'POST';
                var url = 'diseasedata.php?loginemail=' + $scope.loginemail + '&geneid=' + $scope.geneid;

                /*var FormData = {
                 'email': $scope.email
                 };*/

                $http({
                    method: method,
                    url: url,
                    //data: FormData,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (response) { //alert(response)

                    // remove waiting text
                    //$(".disease-body").css('background', '');
                    //$(".disease-body").removeClass('overlay');
                    $scope.waitingText = "";

                    if(response == 0){
                        $("#registerLink").show();
                    } else {
                        var seperate = response.split("@");
                        calculateService.addGenelist (seperate[0], seperate[1], seperate[2], seperate[3], seperate[4]);
                        //$scope.close();

                        var modalInstance = $modal.open({
                            controller: 'emailCtrl',
                            templateUrl: 'disease/geneList.html',
                            /* windowClass: 'center-modal',*/
                            resolve: {
                                geneId: function () {
                                    return geneid;
                                }
                            }
                        });

                        $("#emailform").hide();
                        $("#geneResult").show();

                    }
                }).error(function (response) {
                    alert("Error Result");
                });
        }
        ///////////////// End Submit ////////////////////////////

        // email popup open
        $scope.open = function (geneid) {
            $scope.geneid = geneid;
            var modalInstance = $modal.open({
                controller: 'emailCtrl',
                templateUrl: calculateService.getCurrentUrl() + '/disease/emailForm.html',
               /* windowClass: 'center-modal',*/
                resolve: {
                    geneId: function () {
                        return geneid;
                    }
                }
            });
        }
        // end
        
        $scope.rowResult = function () {
            $("#jenelistrow").show();
        }

        //default
        $("#norecord").show();

        // All tests showing
        $http({
            method: 'POST',
            url: 'diseasedata.php?disease=All',
            //data: FormData,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function (response) { //alert(JSON.stringify(response))
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

        // global declaration
        localStorage.removeItem("names");
        localStorage.removeItem("location");
        $scope.isLocationAllSelected = false;
        $scope.isAllSelected = false;

        //////////////////////// Checkbox button click ///////////////////////////////////
        $scope.getDiseaseData = function(url, val, category, filter, from){ //alert("From: "+ from + " Select: "+ category.selected);

            //select check box if click category area
            /*if(from == 'divclick' && (category.selected == false)) { //alert("Select check box")
                category.selected = true;
                $scope.from = 'divunclick';
            }
            else if(from == 'divunclick' && (category.selected == true)) { //alert("Unselect check box")
                category.selected = false;
                $scope.from = 'divclick';
            }*/

            // un check 'All' button if we check other button


            ////////////// start disease filter section
            if(filter == 'diseasefilter') { //alert("Disease Filter: "+ val);
                // all button functionality
                //category.selected = true;
                if (val == 0 && (category.selected == true)) { alert("All");
                    var toggleStatus = !$scope.isAllSelected;
                    angular.forEach($scope.categories, function (itm) {
                        itm.selected = toggleStatus;
                    });
                } else if(val != 0 && (category.selected == true)){     // un check 'All' button if we check other button
                 //alert("Uncheck All button")
                 $scope.isAllSelected.selected = false;
                 }
                // get local storage value
                var storedNames = JSON.parse(localStorage.getItem("names"));

                if (storedNames != null && (category.selected == true)) { //alert("NOT NULL")

                    // add category id with previous id in array while check the checkbox
                    var previous_category = storedNames;
                    var additional_category = [val];
                    Array.prototype.push.apply(previous_category, additional_category);
                    localStorage.setItem("names", JSON.stringify(previous_category));
                } else if (category.selected == true) { //alert("NULL")
                    var names = [val];
                    localStorage.setItem("names", JSON.stringify(names));
                }

                // un check process
                if (category.selected == true) {
                    //alert('Checked true');
                } else {
                    //alert("Uncheck value: "+ val);
                    var total_categories = JSON.parse(localStorage.getItem("names"));
                    var index = total_categories.indexOf(val);
                    //alert("Index: "+ index);

                    if (index > -1) {
                        //alert("Before Total Category: "+total_categories);
                        var removedCategory = total_categories.splice((index), 1);
                        //alert("Total Category: "+total_categories);
                    }
                    localStorage.setItem("names", JSON.stringify(total_categories));
                }
                // end un check

                // it is for all checkbox
                if (val == 0) {
                    localStorage.removeItem("names");
                    var total_categories = 0;
                } else
                    var total_categories = JSON.parse(localStorage.getItem("names"));
            }
            // end disease filter section

            ////////////// start location filter section
            if(filter == 'locationfilter') { //alert("Location Filter: "+ val);

                var total_location = '';

                // all button functionality
                if (val == 0 && (category.selected == true)) { //alert("All");
                    var toggleLocationStatus = !$scope.isLocationAllSelected;
                    angular.forEach($scope.locations, function (itm) {
                        itm.selected = toggleLocationStatus;
                    });
                } else if (val != 0 && (category.selected == true)){
                    //alert("Uncheck All button")
                    $scope.isLocationAllSelected.selected = false;
                }
                // get local storage value
                var storedNames = JSON.parse(localStorage.getItem("location"));

                if (storedNames != null && (category.selected == true)) { //alert("NOT NULL")

                    // add category id with previous id in array while check the checkbox
                    var previous_category = storedNames;
                    var additional_category = [val];
                    Array.prototype.push.apply(previous_category, additional_category);
                    localStorage.setItem("location", JSON.stringify(previous_category));
                } else if (category.selected == true) { //alert("NULL")
                    var names = [val];
                    localStorage.setItem("location", JSON.stringify(names));
                }

                // un check process
                if (category.selected == true) {
                    //alert('Checked true');
                } else {
                    //alert("Uncheck value: "+ val);
                    var total_categories = JSON.parse(localStorage.getItem("location"));
                    var index = total_categories.indexOf(val);
                    //alert("Index: "+ index);

                    if (index > -1) {
                        //alert("Before Total Category: "+total_categories);
                        var removedCategory = total_categories.splice((index), 1);
                        //alert("Total Category: "+total_categories);
                    }
                    localStorage.setItem("location", JSON.stringify(total_categories));
                }
                // end un check

                // it is for all checkbox
                if (val == 0) {
                    localStorage.removeItem("location");
                    var total_location = 0;
                } else
                    var total_location = JSON.parse(localStorage.getItem("location"));
            }
            // end location filter section

            var total_categories = JSON.parse(localStorage.getItem("names"));
            var total_location = JSON.parse(localStorage.getItem("location"));

            //alert(total_categories)

            if(total_location == null){
                var total_location = 0;
            }
            // set url in factory
            calculateService.setCurrentUrl(url);

            if($scope.disease == 'Oncology' || $scope.disease == 'Oncology - Sequencing' || $scope.disease == 'Oncology - Immunohistochemistry')
                $scope.title = 'PREFERRED SAMPLE TYPE';
            else
                $scope.title = '';

            $scope.waitingText = "Please Wait...";

            //alert("Total Category: "+total_categories)

            var method = 'POST';
            var url = 'diseasedata.php?disease='+ total_categories + '&location='+total_location;

            /*var FormData = {
                'email': $scope.email,
                'mobile': $scope.mobile
            };*/

            $http({
                method: method,
                url: url,
                //data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function (response) { //alert(JSON.stringify(response));
                //alert(response);

                $scope.waitingText = "";

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

    .directive('diseasedesclaimer',function(){

        return {
            restrict: 'E',
            scope: {
                cURL:'=pageurl'
            },
            link:function($scope){
                $scope.cURL = $scope.cURL+'/directives/disease_desclaimer.html';
            },
            template : '<ng-include src="cURL"></ng-include>'

    }
    })

        // Service
        /*.service('dataFactory', function(calculateService) {

            $scope.currentUrl = function () { alert("test");
                return calculateService.getCurrentUrl();
            }
        });*/
        // End service

    // controller for email popup close
    angular.module('diseaseApp').controller('emailCtrl', function ($scope, $http, $modal, $modalInstance, geneId, $rootScope, calculateService) {

        ///// register form open /////
        $scope.showRegisterForm = function (geneid) {
            $scope.close();
            var registerModalInstance = $modal.open({
                controller: 'registerCtrl',
                templateUrl: calculateService.getCurrentUrl() + '/disease/registerForm.html',
                resolve: {
                    geneId: function () {
                        return geneid;
                    }
                }
            });
        }
        // end

        // get gene result
        $scope.products = calculateService.getGenelist();

        // email popup close
        $scope.geneid = geneId; // store the gene list
        $scope.close = function () {
            $modalInstance.dismiss('cancel');
        };

        ///////////////////// Submit the email form /////////////////////////
        $scope.emailSubmit = function (geneid) {

            $scope.geneid = geneid;

            // email validation
            if (typeof($scope.loginemail) == 'undefined' || ($scope.loginemail == '')){
                $scope.emailValid = true;
            }else {
                $scope.emailValid = false;
            }

            if (($scope.loginemail != '') && (typeof($scope.loginemail) != 'undefined')) {
                var method = 'POST';
                var url = calculateService.getCurrentUrl() + '/diseasedata.php?loginemail=' + $scope.loginemail + '&geneid=' + $scope.geneid;

                /*var FormData = {
                    'email': $scope.email
                };*/

                $http({
                    method: method,
                    url: url,
                    //data: FormData,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (response) { //alert(response)
                    if(response == 0){
                        $("#registerLink").show();
                    } else {
                        var seperate = response.split("@");
                        calculateService.addGenelist (seperate[0], seperate[1], seperate[2], seperate[3], seperate[4]);
                        //$scope.close();
                        $("#emailform").hide();
                        $("#geneResult").show();
                    }
                }).error(function (response) {
                    alert("Error Result");
                });
            }
            else
                $scope.downloadform = true;
        }
        ///////////////// End Submit ////////////////////////////
    });
    angular.module('diseaseApp').controller('registerCtrl', function ($scope, $http, $modal, $rootScope, $uibModalStack, geneId, calculateService){

        // open login modal after register
        $scope.openEmailFormFromRegisterForm = function(geneid) {
            $rootScope.$emit("CallParentMethod", geneid);
        }
        // test

        $scope.geneid = geneId; // store the gene list

        $scope.closeRegisterModal = function () {
            $uibModalStack.dismissAll();
        };

        ///////////////////// Submit the register form /////////////////////////
        $scope.registerSubmit = function () {

            // name validation
            if (typeof($scope.name) == 'undefined' || ($scope.name == '')){
                $scope.nameValid = true;
            }else {
                $scope.nameValid = false;
            }

            // email validation
            if (typeof($scope.email) == 'undefined' || ($scope.email == '')){
                $scope.emailValid = true;
            }else {
                $scope.emailValid = false;
            }

            // mobile validation
            if (typeof($scope.mobile) == 'undefined' || ($scope.mobile == '')){
                $scope.mobileValid = true;
            }else {
                $scope.mobileValid = false;
            }

            if (($scope.name != '') && (typeof($scope.name) != 'undefined') && ($scope.email != '') && (typeof($scope.email) != 'undefined') && ($scope.mobile != '') && (typeof($scope.mobile) != 'undefined')) {
                var method = 'POST';
                var url = calculateService.getCurrentUrl() + '/diseasedata.php?name=' + $scope.name + '&email=' + $scope.email + '&mobile=' + $scope.mobile + '&organization=' +$scope.organization;

                /*var FormData = {
                 'email': $scope.email
                 };*/

                $http({
                    method: method,
                    url: url,
                    //data: FormData,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (response) { //alert(response)
                    if(response == 0){
                        $scope.registerValid = true;
                    } else {
                        //$scope.closeRegisterModal();
                        $("#registerform").hide();
                        $("#registersuccess").show();
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
    angular.module('diseaseApp').factory('calculateService', function(){

        var productList = [];
        var url = '';

        var addGenelist  = function(generesult, code, testname, method, tat) {
            productList.length = 0;
            productList.push(generesult, code, testname, method, tat);
        };

        // set url
        var setCurrentUrl = function(curl){ //alert(curl);
            url = curl;
        }

        var getGenelist = function(){
            return productList;
        };

        // get url
        var getCurrentUrl = function(){
            return url;
        }

        return {
            addGenelist: addGenelist,
            getGenelist: getGenelist,
            setCurrentUrl: setCurrentUrl,
            getCurrentUrl: getCurrentUrl
        };

    });

    