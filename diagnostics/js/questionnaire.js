(function(angular) {
    'use strict';
angular
    .module("questionnaireApp",[])
        .controller("questionnaireCtrl", function ($scope, $http, $timeout, $anchorScroll, $location) {

            // global declaration
            //$scope.timeMinus = 0;

          var timer; // declare time variable
          $scope.timeout = '';
          $scope.missed_question = '';

          $scope.submit = function () {

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
            if (typeof($scope.mobile) == 'undefined' || ($scope.mobile == null)){
              $scope.mobileValid = true;
            }else {
              $scope.mobileValid = false;
            }

            if((typeof($scope.email) == 'string') &&  (typeof($scope.mobile) == 'number') && (typeof($scope.email) == 'string') && ($scope.email != '') && ($scope.mobile != null)) {

              var method = 'POST';
              var url = 'questionnaireconnection.php?name='+ $scope.name +'&email=' + $scope.email + '&mobile=' + $scope.mobile;

              var FormData = {
                'email': $scope.email,
                'mobile': $scope.mobile
              };

              $http({
                method: method,
                url: url,
                data: FormData,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
              }).success(function (response) { //alert(response)
                if(response == 1)
                  $scope.emailExist = true; // error show for email exist
                else if(response == 2)
                  $scope.mobileExist = true; // error show for contact exist
                else if(response == 4){
                  //$scope.emailExist = false; // hide email error
                  //$scope.mobileExist = false; // hide contact number error
                  $("#questionnaire-body").hide();
                  $("#mail-sent").show();
                  $("#mail-sent-failed").hide();
                } else{
                    $("#questionnaire-body").hide();
                    $("#mail-sent-failed").show();
                }
                //alert(response.subnews[1]['id']);

              }).error(function (response) {
                alert("Error Result");
              });
            }
          }

            $scope.testTotalTime = 20;

            // Set time for auto time out
            $scope.testTimeOut = function () {
                //alert("Time out");
                $("#myModal").show();
                //$scope.timeout = "Time Out!!!";
                $scope.questionnaire = false;
                $scope.testSubmit($current_user_id, 0, 0);
                //$scope.resultsection = false;
            }

            // Back to questionnaire page
            $scope.back = function(){
                $("#activation").hide();
                $scope.questionnaire = true;
                $scope.resultsection = false;
                $scope.missedQuestionsAlert = false;
                $scope.testTime = 60000 * $scope.timeMinus;

                timer = $timeout(function(){$scope.testTimeOut()}, $scope.testTime); // 1000 milliseconds = 1 sec (60000 * 20 = 20 minutes)
            };

          // Test page view and Missed question Back
          $scope.questionnairepage = function ($current_user_id) {

              //$scope.testTime = 60000 * 20; //(60000 ms = 1 minutes)
              $scope.testTime = 60000 * $scope.testTotalTime; //(60000 ms = 1 minutes) test
              //$scope.testTime = 20000;
              if(typeof($scope.timeMinus) == "undefined")
                $scope.timeMinus = $scope.testTotalTime;
              else
                  $scope.timeMinus = $scope.timeMinus;

              // Time shown
              $scope.tickInterval = 60000 //ms

              var tick = function() {
                  //$scope.clock = Date.now() // get the current time
                  $scope.timeMinus = Number($scope.timeMinus) - 1;
                  //$scope.timeMinus = $scope.timeMinusCalculation;
                  if(Number($scope.timeMinus) > 0 && ($scope.timeMinus) <= 20)
                    $timeout(tick, $scope.tickInterval); // tick - is the function name, tickInterval - interval to start again the function
              }

              // Start the timer
              if(Number($scope.timeMinus) > 0)
                $timeout(tick, $scope.tickInterval);

                //$scope.activation = true;
                $("#activation").hide();
                $scope.questionnaire = true;
                $scope.resultsection = false;
                $scope.missedQuestionsAlert = false;

                timer = $timeout(function(){$scope.testTimeOut()}, $scope.testTime); // 1000 milliseconds = 1 sec (60000 * 20 = 20 minutes)
          }

          // Time out pop up box
          $scope.timeoutclose = function () {
            $("#myModal").hide();
            $("#missedQuestionsAlert").hide();
            $scope.resultsection = true;
          }

            // Missed question OK
            $scope.missedQuestion = function ($current_user_id) { //alert("Current User Id in OK: "+$current_user_id);
                $("#myModal").hide();
                $("#missedQuestionsAlert").hide();
                $scope.testSubmit($current_user_id, 1, 1);
            }

          // Test Submit section
          $scope.testSubmit = function ($current_user_id, $time_out, $missed_question) {
            //alert($scope.question2);
            $scope.formData = {
              'var1': '1',
              'var2': '2',
              'var3': '3'
            };

            $timeout.cancel(timer); // stop the "testTimeOut" function

            var queries = 'question1='+$scope.question1
                +'&question2='+$scope.question2
                +'&question3='+$scope.question3
                +'&question4='+$scope.question4
                +'&question5='+$scope.question5
                +'&question6='+$scope.question6
                +'&question7='+$scope.question7
                +'&question8='+$scope.question8
                +'&question9='+$scope.question9
                +'&question10='+$scope.question10
                +'&question11='+$scope.question11
                +'&question12='+$scope.question12
                +'&question13='+$scope.question13
                +'&question14='+$scope.question14
                +'&question15='+$scope.question15
                +'&question16='+$scope.question16
                +'&question17='+$scope.question17
                +'&question18='+$scope.question18
                +'&question19='+$scope.question19
                +'&question20='+$scope.question20
                +'&id='+$current_user_id
                +'&missed_question='+$missed_question;

            $http.post('questionnaireconnection.php?'+queries, {user:$scope.formData})
                .success(function(data){ //alert(data)
                  //$scope.response = data
                  $scope.complete = '';
                  $scope.correctAnswer = '';
                  $scope.wrongAnswer = '';
                  $scope.attended_questions = 0;
                  $scope.testResult = '';
                  $scope.totalQuestions = 20;
                  $scope.passMark = 12;

                  var split = data.split("*");

                  $scope.complete = split[0];
                  $scope.correctAnswer = split[1];
                  $scope.wrongAnswer = split[2];
                  $scope.attendedQuestions = Number($scope.correctAnswer) + Number($scope.wrongAnswer);
                  $scope.balanceQuestions = $scope.totalQuestions - Number($scope.attendedQuestions);

                    if(($scope.balanceQuestions > 0) && ($time_out != 0) && ($missed_question != 1)){
                        $scope.missedQuestionsAlert = true;
                        $time_out = 0;
                        $scope.alert = $current_user_id;
                    }

                  $scope.score = Math.round(($scope.correctAnswer / $scope.totalQuestions) * 100);
                  if($scope.correctAnswer >= $scope.passMark){
                    $scope.testResult = "passed"
                    $("#testResult").css('color','green')
                  }else{
                    $scope.testResult = "failed"
                    $("#testResult").css('color','red')
                  }
                  $anchorScroll(); // after submit the test page scroll up
                  $scope.questionnaire = false;
                  if($time_out == 1)
                    $scope.resultsection = true;
                  else if($time_out == 0)
                    $scope.resultsection = false;
                }).error(function (response) {
                  alert("Error Result");
                });
          }

            /*$scope.gotoAnchor = function(x) { //alert(x);
                    $anchorScroll();
            };*/
        })
})(window.angular);