<?php require 'php-templates/header.php';?>

<div class="order-body" id="order-body">
	<div ng-app="symposiumApp">
		<div ng-controller="symposiumCtrl">

			<!-- Event-->
			<div class="container symposium">

				<div class="row">
					<div class="col-md-24">
						<h1>Symposium on Metabolic and Cardiovascular Disorders on April 24, 2017 <br> at MedGenome Foster City</h1><br>
					</div>
				</div>

				<div class="row row-eq-height">
					<div class="col-md-8 speach1">
						<b>Dr. Srinivasan Vedantham</b>, Disease Program Lead – Diabetes, MedGenome Inc. <br> <b>Topic:</b> Introduction to Diabetome: A novel clinical database/analytic platform based on 300,000 individuals with diabetes
						<br><b>Time:</b> 2:30 pm - 2:45 pm PST,  April 24, 2017
					</div>

					<div class="col-md-8 speach2">
						<b>Dr. Ravichandran Ramasamy</b>, Associate Professor, Department of Medicine, NYU School of Medicine <br><b>Topic:</b> Therapeutic interventions for diabetic complications: challenges and opportunities
						<br><b>Time:</b> 2:45 pm - 3:15 pm PST, April 24, 2017
					</div>

					<div class="col-md-8 speach3">
						<b>Dr. Chad L. Myers</b>, Faculty, Computer Science and Engineering, University of Minnesota <br><b>Topic:</b> Translating insights from yeast to discover genetic interactions underlying human disease
						<br><b>Time:</b> 3:15 pm - 3:45 pm PST, April 24, 2017
					</div>
				</div>

				<div class="row row-eq-height">
					<div class="col-md-12 col-md-offset-2 speach1">
						<b>Dr. Dharambir K. Sanghera</b>, Professor of Pediatrics Genetics, The University of Oklahoma College of Medicine
						<br> <b>Topic:</b> Genome, metabolome and Type 2 diabetes: challenges and opportunities for translational research
						<br><b>Time:</b> 3:45 pm - 4:15 pm PST, April 24, 2017
					</div>

					<div class="col-md-12 speach2">
						<b>Dr. Noel Burtt</b>, Associate Director of Operations for Diabetes Research at the Broad Institute
						<br><b>Topic:</b> T2D knowledge portal and our efforts for T2D genetics
						<br><b>Time:</b> 4:15 pm - 4:45 pm PST, April 24, 2017
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

<?php require 'php-templates/footer.php' ?>