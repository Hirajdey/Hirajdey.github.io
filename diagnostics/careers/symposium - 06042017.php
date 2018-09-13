<?php require 'php-templates/header.php';?>

<div class="order-body" id="order-body">
	<div ng-app="symposiumApp">
		<div ng-controller="symposiumCtrl">

			<!-- Event-->
			<div class="container symposium">

				<div class="row">
					<div class="col-md-24">
						<h1>Symposium on Cancer Genomics on March 20, 2017 at MedGenome Foster City Facility</h1><br>
					</div>
				</div>

				<div class="row row-eq-height">
					<div class="col-md-7 speach1">
						<b>Dr. Amit Chaudhri</b>, VP, R&D, MedGenome Inc. <br> <b>Topic:</b> OncoPept - Immunogenetics Solution from MedGenome <br><b>Time:</b> 6:00 pm - 6.15 pm PST,
						March 20, 2017
					</div>

					<div class="col-md-8 speach2">
						<b>Dr. Pramod Srivastava</b>, University of Connecticut Health <br><b>Topic:</b> Finding the needle(s) in the haystack
						<br><b>Time:</b> 6:15 pm - 7:00 pm PST, March 20, 2017
					</div>

					<div class="col-md-8 speach3">
						<b>Dr. Beatrix Ueberheide</b>, NYU School of Medicine <br><b>Topic:</b> Application of mass spectrometry in Immunology: Characterization of MHC presented peptides and patient specific antibody repertoires <br><b>Time:</b> 7:00 pm -
						7:45 pm PST, March 20, 2017
					</div>
				</div>

			<h1>Register Here</h1>
			<form class="symposium-register-form form-horizontal" novalidate>
				<fieldset>
					<!-- Form Name -->

					<!-- Name Text input-->
					<div class="form-group">
						<div class="col-md-10">
							<input ng-model="name" placeholder="Your full name *" class="form-control input-md" type="text">
							<div ng-show="nameValid" class="text-danger">Name field is not valid</div>
						</div>


					<!-- University/Organisation Text input-->
						<div class="col-md-10">
							<input ng-model="organization" id="organization" name="organization" placeholder="Your university/organisation *" class="form-control input-md" type="text">
							<div ng-show="orgValid" class="text-danger">University/Organisation field is not valid</div>
						</div>
					<!--</div>-->

					<!-- Email Text input-->
					<!--<div class="form-group">-->
						<div class="col-md-10">
							<input ng-model="email" placeholder="Your email *" class="form-control input-md" type="email">
							<div ng-show="emailValid" class="text-danger">Email field is not valid</div>
						</div>
						
					<!-- Research Interests Text input-->
						<div class="col-md-10">
							<input ng-model="research" id="research" name="research" placeholder="Your research interests" class="form-control input-md" type="text">
							<div ng-show="researchValid" class="text-danger">Research Interests field is not valid</div>
						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<div class="col-md-8">
							<button ng-click="submit()" type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-info btn-lg">Submit</button>
						</div>
					</div>
				</fieldset>
			</form>

			</div>
		</div>
	</div>
</div>

<!-- Busy Symbol -->
<div class="container" style="display: none; padding: 0 0;" id="busy-symbol">
	<div class="row text-center">
		<div class="text-success"><img src="<?php echo $site_path;?>/img/symposium/loading-img1.gif" alt="Busy symbol" style="width: 400px;"></div>
	</div>
</div>

<div class="container order-mail-sent" style="display: none" id="mail-sent">
	<div class="row">
		<div class="text-success"><h2>Thanks for registration</h2></div>
	</div>
</div>
<div class="container order-mail-failed" style="display: none" id="mail-sent-failed">
	<div class="row">
		<div class="text-danger"><h2>Mail Sent Failed</h2></div>
	</div>
</div>

<script src="<?php echo $site_path;?>/js/angularjs/symposium.js"></script>

<?php require '../php-templates/footer.php' ?>