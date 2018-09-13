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
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/responsive.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
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

<div class="bestInClass giagnosticsPage media">
	<div class="wrapper">
		<!--Press-->
		<h3 class="pressHeading">Test List</h3>
		<?php require 'includes/disease-body.php';?>
	</div>
</div>
<script src="js/disease.js"></script>
<?php require 'includes/footer-contact.php';?>
<script type="text/javascript" src="js/flag.js"></script>
</body>
</html>