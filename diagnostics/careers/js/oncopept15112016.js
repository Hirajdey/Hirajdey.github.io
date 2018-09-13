var oncopeptApp = angular.module("oncopeptApp",['ui.bootstrap']);
oncopeptApp.controller("oncopeptCtrl", function ($scope, $http, $location, $modal, $rootScope, $uibModalStack, calculateService) {

    //////// modal //////////////
    // current URL
    calculateService.setAct($scope.act); // set act in default
    url = $scope.sitepath;
    calculateService.setCurrentUrl(url);
    // end

    // email open after register and close the register form
    $rootScope.$on("CallParentMethod", function(event){
        $uibModalStack.dismissAll();
        $scope.open();
    });

    // email popup open
    $scope.open = function (file, path) {
        var modalInstance = $modal.open({
            controller: 'emailCtrl',
            templateUrl: calculateService.getCurrentUrl() + '/oncopeptadditional/emailForm.html',
            resolve: {
                file: function () {
                    return file;
                },
                path: function () {
                    return path;
                },
                act: function () {
                    return calculateService.getAct();
                }
            }
        });
    }
    // end

    $scope.oncopeptDownload = function () {
        $scope.downloadform = true;
    }

    // Initialiation
    $scope.videoName = "../webinar/video/oncopept-webinar.mp4"; // Video initial

    // diseases
    var diseases = ["oncology", "neurology", "cardiovascular", "autoimmune", "genomics", "rare", "prenatal", "ent"];

    // Common function
    $scope.sectionVisible = function($sectionName, $presentations, $video, $posters, $papers, $product, $event, $presentationsClass, $videoClass, $postersClass, $papersClass, $productClass, $eventClass){
        $("."+$sectionName).show(); // section view

        $scope.presentations = $presentations;
        $scope.video = $video;
        $scope.posters = $posters;
        $scope.papers = $papers;
        $scope.product = $product;
        $scope.event = $event;

        $scope.addClassPresentations = function(){
            return $presentationsClass;
        }
        $scope.addClassVideo = function(){
            return $videoClass;
        }
        $scope.addClassPosters = function(){
            return $postersClass;
        }
        $scope.addClassPapers = function(){
            return $papersClass;
        }
        $scope.addClassProduct = function(){
            return $productClass;
        }
        $scope.addClassEvent = function(){
            return $eventClass;
        }
    }
    // End

    // if event page is load directly, then working the tab
    var url = $location.absUrl();
    var query = url.split('=')[1];
    if(query == "events") {
        $scope.sectionVisible('event', false, false, false, false, false, true, 'deactive', 'deactive', 'deactive', 'deactive', 'deactive', 'active');
    }
    
    // Default hover set
    /*$scope.addClassPresentations = function(){
        $scope.presentations = true;
        $(".presentations").show();
        return "active";
    }*/

    // Show the section  by use Tab
    $scope.showPresentations = function () {
        $scope.sectionVisible('presentations',true, false, false, false, false, false, 'active', 'deactive', 'deactive', 'deactive', 'deactive', 'deactive');
        calculateService.setAct("presentations");
    }
    $scope.showPosters = function () {
        $scope.sectionVisible('posters',false, false, true, false, false, false, 'deactive', 'deactive', 'active', 'deactive', 'deactive', 'deactive');
        calculateService.setAct("posters");
    }
    $scope.showProduct = function () {
        $scope.sectionVisible('product',false, false, false, false, true, false,  'deactive', 'deactive', 'deactive', 'deactive', 'active', 'deactive');
        calculateService.setAct("products");
    }
    $scope.showVideo = function () {
        $scope.sectionVisible('video',false, true, false, false, false, false, 'deactive', 'active', 'deactive', 'deactive', 'deactive', 'deactive');
        calculateService.setAct("videos");
    }
    $scope.showPapers = function () {
        $scope.sectionVisible('papers',false, false, false, true, false, false,  'deactive', 'deactive', 'deactive', 'active', 'deactive', 'deactive');
        calculateService.setAct("papers");
    }

    $scope.showEvent = function () {
        $scope.sectionVisible('event',false, false, false, false, false, true,  'deactive', 'deactive', 'deactive', 'deactive', 'deactive', 'active');
        calculateService.setAct("events");
    }

    /*function active(num) { alert(num);
        style = num.valueOf();
        alert(style);
        return $scope.style = 'active';
    }*/

    $scope.leftLink = function (disease_type) {
        //alert(disease_type);
        //var evens = diseases.filter(active);

        for(i=0; i<diseases.length; i++){
            $( "#"+diseases[i] ).removeClass( "active" );
            if(disease_type == diseases[i]){
                $( "#"+diseases[i] ).addClass( "active" );
            }

        }

        /*if($disease_type == 'oncology'){
            $scope.activeOncology = 'active';
        }else if($disease_type == 'neurology'){
            $scope.activeNeurology = 'active';
            $scope.activeOncology = 'deactive';
        }*/
    }

    // Choose Video
    $scope.chooseVideo = function($video_name){
        $scope.videoName = "../webinar/video/"+$video_name;
    }
    
    // Onco Pept Additional enable / disable to download
    /*$scope.oncopeptDownload = function () {
        
    }*/
});
// controller for email popup close
angular.module('oncopeptApp').controller('emailCtrl', function ($scope, $http, $modal, $rootScope, $modalInstance, $rootScope, calculateService, file, path, $window, act) {

    ///// register form open /////
    $scope.showRegisterForm = function () {
        $scope.close();
        var registerModalInstance = $modal.open({
            controller: 'registerCtrl',
            templateUrl: calculateService.getCurrentUrl() + '/oncopeptadditional/registerForm.html'
        });
    }
    // end

    ///// forgot password form open /////
    $scope.showForgotPasswordForm = function () {
       $scope.close();
         var forgotPasswordModalInstance = $modal.open({
            controller: 'registerCtrl',
            templateUrl: calculateService.getCurrentUrl() + '/oncopeptadditional/forgotPasswordForm.html'
        });
    }
    // end

    /*// get gene result
    $scope.products = calculateService.getGenelist();*/

    // email popup close
    $scope.close = function () {
        $modalInstance.dismiss('cancel');
    };

    ///////////////////// Submit the email form /////////////////////////
    $scope.emailSubmit = function (geneid) {

        // email validation
        if (typeof($scope.loginemail) == 'undefined' || ($scope.loginemail == '')){
            $scope.emailValid = true;
        }else {
            $scope.emailValid = false;
        }

        // password validation
        if (typeof($scope.loginpassword) == 'undefined' || ($scope.loginpassword == '')){
            $scope.passwordValid = true;
        }else {
            $scope.passwordValid = false;
        }

        if (($scope.loginemail != '') && (typeof($scope.loginemail) != 'undefined') && ($scope.loginpassword != '') && (typeof($scope.loginpassword) != 'undefined')) {
            var method = 'POST';
            var url = calculateService.getCurrentUrl() + '/oncopeptdownload.php?loginemail=' + $scope.loginemail + '&loginpassword=' + $scope.loginpassword;

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
                    $("#loginerror").show();
                } else {
                    $window.location.href = calculateService.getCurrentUrl() + "/download.php?download_file="+ file +"&path="+path;
                    $scope.close();
                    $window.location.href = calculateService.getCurrentUrl() + "/oncopeptadditional/?act=" + act;
                    /*var seperate = response.split("@");
                    calculateService.addGenelist (seperate[0], seperate[1], seperate[2], seperate[3], seperate[4]);
                    //$scope.close();
                    $("#emailform").hide();
                    $("#geneResult").show();*/
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
angular.module('oncopeptApp').controller('registerCtrl', function ($scope, $http, $modal, $rootScope, $uibModalStack, calculateService){

    // open login modal after register
    $scope.openEmailFormFromRegisterForm = function() {
        $rootScope.$emit("CallParentMethod");
    }
    // end

    //$scope.geneid = geneId; // store the gene list

    $scope.closeRegisterModal = function () {
        $uibModalStack.dismissAll();
    };

    // close modal
    $scope.closeModal = function () {
        $uibModalStack.dismissAll();
    };

    ///////////////////// Submit the register form /////////////////////////
    $scope.registerSubmit = function () {

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

        // password validation
        if (typeof($scope.password) == 'undefined' || ($scope.password == '')){
            $scope.passwordValid = true;
        }else {
            $scope.passwordValid = false;
        }

        // organization validation
        if (typeof($scope.organization) == 'undefined' || ($scope.organization == null)){
            $scope.organizationValid = true;
        }else {
            $scope.organizationValid = false;
        }

        if (($scope.name != '') && ($scope.email != '') && (typeof($scope.email) != 'undefined') && ($scope.organization != null) && ($scope.password != '') && (typeof($scope.password) != 'undefined')) {
            var base_url = window.location.origin;
            if (base_url == 'http://localhost')
                base_url = base_url + '/homepage';
            else
                base_url = base_url

            var method = 'POST';
            var url = base_url + '/oncopeptdownload.php?name=' + $scope.name + '&email=' + $scope.email + '&organization=' + $scope.organization + '&designation=' + $scope.designation + '&password=' + $scope.password;

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

    ///////////////////// Submit the forgot password form /////////////////////////
    $scope.forgotPasswordSubmit = function () {

        // forgot password email validation
        if (typeof($scope.forgotpasswordemail) == 'undefined' || ($scope.forgotpasswordemail == '')){
            $scope.forgotpasswordemailValid = true;
        }else {
            $scope.forgotpasswordemailValid = false;
        }

        if (($scope.forgotpasswordemail != '') && (typeof($scope.forgotpasswordemail) != 'undefined')) {
            
            $("#process").show();

            var base_url = window.location.origin;
            if (base_url == 'http://localhost')
                base_url = base_url + '/homepage';
            else
                base_url = base_url

            var method = 'POST';
            var url = calculateService.getCurrentUrl() + '/oncopeptdownload.php?forgotpasswordemail=' + $scope.forgotpasswordemail;

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
                    // after mail sent
                    $("#forgotpasswordform").hide();
                    $("#mailsent").show();
                    $("#process").hide();
                }
                else {
                    $("#process").hide();
                    $("#invalidemailerror").show();
                }
            }).error(function (response) {
                alert("Database not connected");
            });
        }
        else
            $scope.downloadform = true;
    }
    ///////////////// End forgot password Submit ////////////////////////////

});
// factory
angular.module('oncopeptApp').factory('calculateService', function(){

    var url = '';
    var act = '';

    // set url
    var setCurrentUrl = function(curl){ //alert(curl);
        url = curl;
    }

    // set act
    var setAct = function(currentact){ //alert("From Factory: " + currentact)
        act = currentact;
    }

    // get url
    var getCurrentUrl = function(){
        return url;
    }

    // get act
    var getAct = function(){
        return act;
    }

    return {
        setCurrentUrl: setCurrentUrl,
        getCurrentUrl: getCurrentUrl,
        setAct: setAct,
        getAct: getAct
    };

});