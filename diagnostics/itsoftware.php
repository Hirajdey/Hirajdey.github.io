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
		<link rel="stylesheet" href="css/career.css"/>
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

<div class="g1-section " id="g1-section-1" ng-app="careerApp">
	<div class="g1-layout-inner" ng-controller="careerCtrl">
<h2>IT / Software Openings India</h2>
<table cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<th><strong>#</strong></th>
			<th><strong>Role </strong></th>
		</tr>
		<tr ng-repeat="career in careers | it">
			<td>{{$index + 1}}</td>
			<td><a href="<?php echo $site_path;?>/{{career.url}}" title="Careers">{{career.name}}</a></td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="top-arrow hide hidden-xs" id="scroll-top">
	<div class="fa fa-arrow-up"></div>
</div>
	<script src="<?php echo $site_path;?>/js/angularjs/careers.js"></script>
<?php require 'includes/footer-contact.php';?>
<script type="text/javascript" src="js/flag.js"></script>