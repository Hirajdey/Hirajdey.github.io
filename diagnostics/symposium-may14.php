<?php
require 'config/db.php';
require 'config/config.php';
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="robots" content="noindex,nofollow" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;user-scalable=true;"/>
		<meta name="HandheldFriendly" content="True"/>
		<meta name="robots" content="noindex, nofollow"/>
		<title>Medgenome | Press</title>

		<script src="js/vendors/angular-1.5.8.min.js"></script>
		<script src="js/vendors/angular-sanitize.js"></script>
		<script src="js/vendors/ui-bootstrap-tpls-0.14.3.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
		<link rel="stylesheet" href="css/font-awesome.css"/>
		<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script src="js/vendors/jquery-2.1.4.min.js"></script>
	</head>
<body>
<div class="header">

	<?php require 'includes/logo.php';?>

	<div class="headerMenu">
		<?php require 'includes/menu.php';?>
	</div>
	<div class="mobileMenu">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="dropDown mobmenu" style="display: none;">
		<ul>
			<li><a title ="HOME" href="javascript:;">Home</a></li>
			<!--<li><a title ="TEST CATALOG" href="javascript:;">test cATALOG</a></li>-->
			<li><a title ="CLINICIANS LOGIN" href="javascript:;">Clinicians login</a></li>
			<li><a title ="FAQ’S" href="javascript:;">FAQ’S</a></li>
			<!--<li><a title ="KNOWLEDGE HUB" href="javascript:;">knowledge Hub</a></li>-->
			<li><a title ="RESEARCH" href="https://www.medgenome.com/research">research</a></li>
			<li><a title ="ABOUT" href="javascript:;">ABOUT</a></li>
		</ul>
	</div>

	<?php require 'includes/header-contact.php';?>

</div>

<div class="order-body" id="order-body">
	<div ng-app="symposiumApp">
		<div ng-controller="symposiumCtrl">

			<!-- Event-->
			<div class="container symposium">

				<div class="row">
					<div class="col-md-24">
						<h1>Symposium on cancer genomics on May 14, 2018, 1.30 PM - 4.00 PM at MedGenome Foster City</h1><br>
					</div>
				</div>

				<div class="row row-eq-height">
					<div class="col-md-12 speach1">
						<b>Dr. Henry Lynch</b>, Chairman - Founder of Lynch Syndrome, Northshore University Healthcare System, Creighton University Cancer Center, Omaha, Nebraska<br>
						<b>Topic:</b> Lynch Syndrome: Diagnosis, treatment and management
					</div>
					<div class="col-md-12 speach1">
						<b>Dr. Kishore Guda</b>, Assistant Professor, General Medical Sciences (Oncology) Case Western Reserve University<br>
						<b>Topic:</b> <strong>In silico to In vivo:</strong> Systems Approaches in decoding complex Gastrointestinal malignancies
					</div>
				</div>
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-12 speach1">
						<b>Dr. Aju Mathew</b>, Assistant Professor of Medicine UK Healthcare<br>
						<b>Topic:</b> Applications of Genomics in Breast Cancer Clinic
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
						<div class="col-md-8"></div>
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
		<div class="text-success"><img src="<?php echo $site_path;?>/images/symposium/loading-img1.gif" alt="Busy symbol" style="width: 400px;"></div>
	</div>
</div>

<div class="container order-mail-sent" style="display: none" id="mail-sent">
	<div class="row">
		<div class="text-success"><h2>Thanks for registering</h2></div>
	</div>
</div>
<div class="container order-mail-failed" style="display: none" id="mail-sent-failed">
	<div class="row">
		<div class="text-danger"><h2>Mail Sent Failed</h2></div>
	</div>
</div>

<script src="<?php echo $site_path;?>/js/angularjs/symposium.js"></script>

<?php require 'includes/footer-contact.php';?>
<script type="text/javascript" src="js/flag.js"></script>