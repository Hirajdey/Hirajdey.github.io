<div id="events-popup" class="events-popup-section" ng-app="contactApp">
	<div class="container" ng-controller="contactCtrl">
		<div class="row main-row">
			<div class="col-md-24 open-close-status">
				<div id="close" class="row title" title="open">Contact Us</div>

				<div id="open-pop-up" class="body-section">

					<form id="form" class="form-horizontal" novalidate id="form-body">
						<div class="container-fluid">
							<div class="form-group">
								<label class="col-md-0 control-label" for="name"></label>
								<div class="col-md-24">
									<input ng-model="name" id="name" name="name" placeholder="Name" class="form-control input-md" type="text">
									<div ng-show="nameValid" class="text-danger">Name field is not valid</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-0 control-label" for="email"></label>
								<div class="col-md-24">
									<input ng-model="email" placeholder="Email" class="form-control input-md" type="email">
									<div ng-show="emailValid" class="text-danger">Email field is not valid</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-0 control-label" for="email"></label>
								<div class="col-md-24">
									<input ng-model="phone" placeholder="Phone" class="form-control input-md" type="text">
									<div ng-show="phoneValid" class="text-danger">Phone field is not valid</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-0 control-label" for="city"></label>
								<div class="col-md-24">
									<input ng-model="city" placeholder="City" class="form-control input-md" type="text">
									<div ng-show="cityValid" class="text-danger">City field is not valid</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-0 control-label" for="organization"></label>
								<div class="col-md-24">
									<input ng-model="organization" placeholder="Organization" class="form-control input-md" type="text">
									<div ng-show="organizationValid" class="text-danger">Organization field is not valid</div>
								</div>
							</div>
							<!--<div class="form-group">
								<label class="col-md-0 control-label" for="message"></label>
								<div class="col-md-20">
									<textarea ng-model="message" id="message" name="message" placeholder="Message" class="form-control input-md"></textarea>
									<div ng-show="messageValid" class="text-danger">Message field is not valid</div>
								</div>
							</div>-->
							<div class="form-group">
								<label class="col-md-0 control-label" for="btnsubmit"></label>
								<div class="col-md-4">
									<button ng-click="submit()" type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-info">SEND</button>
								</div>
							</div>
						</div>
					</form>
					<div id="mail-sent" class="row" style="display: none;">
						<div class="col-md-24 text-center text-success">Thank you for your interest in MedGenome. We are reviewing your request and will get back to you within 1 business day.</div>
					</div>
					<div class="row" style="display: none;">
						<div class="col-md-24 text-center text-danger">Sorry, Mail has not been send</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<script>
	$( function() {
		$("#open-pop-up").hide();
		//$(".open-close-status").addClass("open-pop-up");
		$(".open-close-status").addClass("close-pop-up");
	} );
	$("#close").click(function () {
		var text = $("#close").text();
		var current_title = $("#close").attr('title');
		if(current_title == 'minimize') {
			$(".open-close-status").addClass("close-pop-up");
			$(".open-close-status").removeClass("open-pop-up");
			$("#open-pop-up").hide();
			$("#close").attr("title", "open");
		} else{
			$(".open-close-status").addClass("open-pop-up");
			$(".open-close-status").removeClass("close-pop-up");
			$("#open-pop-up").show();
			$("#close").attr("title", "minimize");
		}
	});
</script>
<script src="../js/claria-index-contact.js"></script>