<?php require '../php-templates/header.php';?>

<div class="container admin text-center" ng-app="adminApp">
	<div class="row well" ng-controller="adminCtrl">
		<div class="lead">Admin Login</div>
		<div ng-show="authorizedValid" class="text-danger">You are not authorized </div>
		<div class="col-md-24">
			<input type="text" placeholder="Username" ng-model="username" class="form-control input-md">
			<div ng-show="usernameValid" class="text-danger">Username field is not valid</div>
		</div>
		<br><br>
		<div class="col-md-24">
			<input type="password" placeholder="Password" class="form-control input-md" ng-model="password">
			<div ng-show="passwordValid" class="text-danger">Password field is not valid</div>
		</div>
		<br><br>
		<div class="col-md-24"><button ng-click="submit()" type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-info">Submit</button></div>
	</div>
</div>

<script src="<?php echo $site_path;?>/admin/js/admin_login.js"></script>
<?php require 'php-templates/footer.php' ?>