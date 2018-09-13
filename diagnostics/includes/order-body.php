<div class="container-fluid order-body" id="order-body">
	<div ng-app="orderApp" ng-init="code='<?php echo $_REQUEST['code']?>'">
		<div ng-controller="orderCtrl">

			<p></p>
			<div class="row waiting-text">
				{{waitingText}}
			</div>

        	<!--<h1>Sample Order Form</h1>-->
			<form class="form-horizontal" novalidate>
				<fieldset>
					<!-- Form Name -->

					<!-- Code Value -->
					<input type="hidden" value="<?php echo $_REQUEST['code'];?>" ng-model="code">

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-0 control-label" for="email"></label>
						<div class="col-md-9">
							<input ng-model="email" placeholder="Email" class="form-control input-md" type="email">
							<div ng-show="emailValid" class="text-danger">Email field is not valid</div>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-0 control-label" for="mobile"></label>
						<div class="col-md-9">
							<input ng-model="mobile" placeholder="Mobile" class="form-control input-md" type="number">
							<div ng-show="mobileValid" class="text-danger">Mobile field is not valid</div>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-0 control-label" for="organization"></label>
						<div class="col-md-9">
							<input ng-model="organization" id="organization" name="organization" placeholder="Organization" class="form-control input-md" type="text">
							<div ng-show="orgValid" class="text-danger">Organization field is not valid</div>
						</div>
					</div>

					<!-- Code input-->
					<div class="form-group">
						<label class="col-md-0 control-label" for="Code"></label>
						<div class="col-md-9">
							<input ng-model="code" id="code" name="code" placeholder="Code (Optional)" class="form-control input-md" type="text">
						</div>
					</div>

					<!-- Test input-->
					<div class="form-group">
						<label class="col-md-0 control-label" for="Test"></label>
						<div class="col-md-9">
							<input ng-model="test" id="test" name="test" placeholder="Test (Optional)" class="form-control input-md" type="text">
						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-0 control-label" for="btnsubmit"></label>
						<div class="col-md-4">
							<button ng-click="submit()" type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-info">Submit</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<div class="container order-mail-sent" style="display: none" id="mail-sent">
	<div class="row">
		<div class="text-success"><h2>Mail Sent Successfully</h2></div>
	</div>
</div>
<div class="container order-mail-failed" style="display: none" id="mail-sent-failed">
	<div class="row">
		<div class="text-danger"><h2>Mail Sent Failed</h2></div>
	</div>
</div>

<script src="js/order.js"></script>
