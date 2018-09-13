<div class="contact-form-body" id="contact-form-body">

			<img src="<?php echo $site_path;?>/img/icons/mail-icon.png" id="mail-icon" ng-click="mailForm()">
			<img src="<?php echo $site_path;?>/img/icons/mail-close-icon.png" id="close-icon" style="display: none" ng-click="mailClose()">
			<form class="form-horizontal" novalidate id="form-body">
				<div class="container">
					<div class="form-group">
						<label class="col-md-3 control-label" for="name"></label>
						<div class="col-md-6">
							<input ng-model="name" id="name" name="name" placeholder="Name" class="form-control input-lg" type="text" style="width: 200px;">
							<div ng-show="nameValid" class="text-danger">Name field is not valid</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email"></label>
						<div class="col-md-6">
							<input ng-model="email" placeholder="Email" class="form-control input-lg" type="email" style="width: 200px;">
							<div ng-show="emailValid" class="text-danger">Email field is not valid</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="message"></label>
						<div class="col-md-6">
							<textarea ng-model="message" id="message" name="message" placeholder="Message" class="form-control input-lg" style="width: 200px;"></textarea>
							<!--<input ng-model="message" id="message" name="message" placeholder="message" class="form-control input-lg" type="text" style="width: 200px;">-->
							<div ng-show="messageValid" class="text-danger">Message field is not valid</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="btnsubmit"></label>
						<div class="col-md-4">
							<button ng-click="submit()" type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-info input-md">SEND</button>
						</div>
					</div>
				</div>
				</fieldset>
			</form>
</div>


<script>
	angular
		.module("contactApp",[])
		.controller("orderCtrl", function ($scope, $http) { alert("Contact Us");
			/*var effect = 'slide';
			var options = { direction: $('up') };
			var duration = 500;*/
			$scope.mailForm = function () { alert("Contact Form")
				//$('#form-body').toggle(effect, options, duration);

				$("#form-body").show(); // Form hide
				$("#mail-icon").hide(); // Mail icon going to hide
				$("#close-icon").show(); // Close icon showing
			}
			$scope.mailClose = function () {
				$("#close-icon").hide(); // Close icon hide
				$("#form-body").hide("slow"); // Form hide
				$("#mail-icon").show(); // Mail icon going to show
			}
			$scope.submit = function () {

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
				// for organization
				if (typeof($scope.message) == 'undefined' || ($scope.message == '')){
					$scope.messageValid = true;
				}else {
					$scope.messageValid = false;
				}
				if((typeof($scope.name) == 'string') && (typeof($scope.email) == 'string') &&  (typeof($scope.message) == 'string') && ($scope.name != null) && ($scope.email != '') && ($scope.message != '')){

					var method = 'POST';
					var url = 'contact-mail.php';

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
						if(response == "success"){
							$("#mail-sent").show();
							$("#contact-form-body").hide();
							$("#mail-sent-failed").hide();
							$("#close-icon").show(); // Close icon showing
						} else {
							$("#mail-sent-failed").show();
							$("#mail-sent").hide();
							$("#contact-form-body").hide();
							$("#close-icon").show(); // Close icon showing
						}
					}).
					error(function(response) {
						alert("Mail sent failed")
					});

				}
			}
		})
</script>