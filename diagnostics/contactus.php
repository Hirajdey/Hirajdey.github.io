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
	<?php require 'includes/mobile-menu.php';?>
	
  <?php require 'includes/header-contact.php';?>

</div>

<div class="bestInClass giagnosticsPage media">
	<div class="wrapper">
		<!--Press-->
		<h3 class="pressHeading">Contact Us</h3>
		<?php require 'includes/contactus-body.php';?>
	</div>
</div>
<?php require 'includes/footer-contact.php';?>
<script type="text/javascript" src="js/flag.js"></script>
</body>
</html>