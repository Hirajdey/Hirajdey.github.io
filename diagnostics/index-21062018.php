<?php require 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;user-scalable=true;"/>
<meta name="HandheldFriendly" content="True"/>
<meta name="robots" content="noindex, nofollow"/>
<title>Medgenome | Index</title>

<script src="js/vendors/angular-1.5.8.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/responsive.css"/>
<link rel="stylesheet" href="css/font-awesome.css"/>
<link rel="stylesheet" href="css/mobile-tab.css"/>
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
	
</head>
<body>
<?php
//echo $_SERVER['REQUEST_TIME'];
//echo date('m/d/Y H:i:s', $_SERVER['REQUEST_TIME']);
//echo date("h:i:sa");

//require 'includes/events-popup.php';?>
<div class="header navbar-fixed-top">
	<?php require 'includes/logo.php';?>

  <div class="headerMenu"> 
  	<?php require 'includes/menu.php';?>
  </div>
  <?php require 'includes/mobile-menu.php';?>

  <?php require 'includes/header-contact.php';?>

</div>

<!-- Claria Banner -->
<div id="claria-banner" class="banner">
	<!--<div class="bannerImage">
		<img src="images/claria-banner.jpg" alt="banner" />
	</div>-->
	<div class="bannerImage">
		<img src="images/claria-banner.jpg" alt="banner" class="clsFirstImg" />
		<img src="images/clarialogo.svg" class="clsSecondImg claria-carrier-logo">
	</div>
	<div class="bannerContent">
		<div class="wrapper">
			<!--<p>India's Leading Genomics Based<br/>
				Diagnostics Company</p>-->
			<a href="<?php echo $site_path;?>/testlist.php">Book Test Now</a>
		</div>
	</div>
</div>
<!-- Actia banner -->
<div id="actia-banner" class="banner">
	<div class="bannerImage">
		<img src="images/actia-banner.jpg" alt="banner" class="clsFirstImg" />
		<img src="images/logo-actia-vector.svg" class="clsSecondImg actia-logo">
	</div>
	<div class="bannerContent">
		<div class="wrapper">
			<!--<h1>Cardio Genetics</h1>-->
			<a href="<?php echo $site_path;?>/testlist.php">Book Test Now</a>
		</div>
	</div>
</div>
<!-- Prima banner -->
<div id="prima-banner" class="banner">
	<div class="bannerImage">
		<img src="images/prima-banner.jpg" alt="banner" class="clsFirstImg" />
		<img src="images/logo-prima-top.svg" class="clsSecondImg prima-logo">
	</div>
	<div class="bannerContent">
		<div class="wrapper">
			<!--<h1>Somatic Mutation Panel</h1>-->
			<a href="<?php echo $site_path;?>/testlist.php">Book Test Now</a>
		</div>
	</div>
</div>

<?php require 'includes/index-tabs.php';?>

<div class="bestInClass giagnosticsPage">
	<div class="wrapper">
		<!--Press-->
		<h3 class="pressHeading">Press</h3>
		<?php require 'includes/press.php';?>
	</div>
	<?php require 'includes/bottom-banner.php';?>
	<div class="wrapper">
		<!-- Events -->
		<?php require 'includes/events.php';?>
		<?php //require 'includes/videos.php';?>
	</div>

		<div class="serviceFormDiv outerWrapper diagnostic">
	<div class="wrapper">
		<h1>Talk with one of our Genetic experts for free today</h1>
		<h2>Our certified, genetic specialists are available right now to discuss your queries before, during and after screenings.</h2>
	</div>
		<?php require 'includes/contact-form.php';?>
</div>
</div>
<?php require 'includes/footer-contact.php';?>
<script type="text/javascript" src="js/flag.js"></script>
</body>
</html>