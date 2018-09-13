<?php require 'config/config.php'; ?>
<!doctype html>

<html lang="en">
	<head>
		<?php require 'php-templates/meta-data.php';?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(isset($title)){?><title><?php echo $title;?></title><?php } ?>
		<?php if(isset($description)){?><meta name="description" content="<?php echo $description;?>" /><?php } ?>
		<?php if(isset($keywords)){?><meta name="keywords" content="<?php echo $keywords;?>" /><?php } ?>
		<link rel="icon" href="<?php echo $site_path;?>/careers/img/logo/favicon.png">

		<link ng-href="<?php echo $site_path;?>/css/{{href}}" type="{{type}}" rel="stylesheet" />

		<link rel="stylesheet" href="<?php echo $site_path;?>/careers/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $site_path;?>/careers/css/font-awesome.min.css">
		<!--<link rel="stylesheet" href="<?php echo $site_path;?>/css/mdb.min.css">
		<link rel="stylesheet" href="<?php /*echo $site_path;*/?>/css/custom.css">-->

		<link rel="stylesheet/less" type="text/css" href="<?php echo $site_path;?>/careers/css/custom.less" />
		<script src="<?php echo $site_path;?>/careers/js/less.js" type="text/javascript"></script>

		<?php if (trim($page_name) == "oncopept") {?>
        <link rel="stylesheet" href="<?php echo $site_path;?>/oncopept/css/custom.css">
		<?php } ?>
		<?php if (trim($page_name) == "admin" || trim($page_name) == "dashboard") {?>
			<link rel="stylesheet" href="<?php echo $site_path;?>/admin/css/admin.css">
		<?php } ?>
		<!-- NGS -->
		<?php if (trim($page_name) == "ngs") {?>
			<link type="text/css" rel="stylesheet" href="<?php echo $site_path;?>/css/ngs.css">
		<?php } ?>
		<!-- End -->
		<!-- IGP -->
		<?php if (trim($page_name) == "integratedgenomicsplatform" || trim($page_name) == "disease-program" || trim($page_name) == "disease-program1") {?>
        	<link rel="stylesheet" href="<?php echo $site_path;?>/css/igp.css">
		<?php } ?>
		<!-- End -->
		<!-- Onco MD -->
		<?php if (trim($page_name) == "oncomd" || trim($page_name) == "oncomdresearch" || trim($page_name) == "oncomdclinician" || trim($page_name) == "oncomdenterprise" || trim($page_name) == "oncomdpartner" || trim($page_name) == "oncomdabout" || trim($page_name) == "oncomdpress") {?>
			<link rel="stylesheet" href="<?php echo $site_path;?>/css/oncomd.css">
			<link rel="stylesheet" href="<?php echo $site_path;?>/css/oncomdigp.css">
		<?php } ?>
		<!-- End -->

		<script src="<?php echo $site_path;?>/js/vendors/angular-1.5.8.min.js"></script>
		<?php if (trim($page_name) == "disease" || trim($page_name) == "cme" || trim($page_name) == "events" || trim($page_name) == "publications" || trim($page_name) == "events1" || trim($page_name) == "disease1") {?>
			<script src="<?php echo $site_path;?>/js/vendors/angular-sanitize.js"></script>
		<?php } ?>
		<script src="<?php echo $site_path;?>/js/vendors/ui-bootstrap-tpls-0.14.3.min.js"></script>
		<script src="<?php echo $site_path;?>/js/vendors/angular-route.min.js"></script>
        <script src="<?php echo $site_path;?>/js/vendors/jquery-2.1.4.min.js"></script>

		<!--<script src="<?php /*echo $site_path;*/?>/js/webpack/scripts.min.js"></script>-->
		
		<!--<script>
			$( document ).ready(function() {
				$("h1").css("color","red");
			});
		</script>-->
		<?php require 'analyticstracking.php';?>
   	</head>
	<body>
	<!--<h1>Web Pack Test</h1>-->
    	<!--<div class="topheader navbar navbar-fixed-top">-->

		<div class="wrapper top-section1 hidden-xs">
			<div class="container">
				<div class="col-sm-8">
					<ul class="social">
						<a href="https://www.facebook.com/MedGenomeGenomics/" target="_blank"><li class="fa fa-facebook"></li></a>
						<a href="https://twitter.com/MedGenomeLabs" target="_blank"><li class="fa fa-twitter"></li></a>
						<!--<a href="#"><li class="g-plus"></li></a>-->
						<a href="https://www.linkedin.com/company/medgenome-labs-pvt-ltd" target="_blank"><li class="fa fa-linkedin"></li></a>
						<a href="https://www.youtube.com/channel/UCfKNyHEEHerCRyXcnY8SXRQ/feed" target="_blank"><li class="fa fa-youtube"></li></a>
					</ul>
				</div>
				<div class="col-sm-16 text-right">
					<ul class="top-menu">
						<!--<li><a href="https://medgenomelabs.wordpress.com/" target="_blank">Blog</a></li>-->
						<li><a href="<?php echo $site_path;?>/press">Media</a></li>
						<li><a href="<?php echo $site_path;?>/careers">Careers  </a></li>
						<li><a href="<?php echo $site_path;?>/events">Events</a></li>
						<li><a href="<?php echo $site_path;?>/contactus">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-flag-section">
			<div class="container-fluid top-second hidden-xs">
				<div class="col-md-16 col-sm-14 col-lg-18 logo">
					<a href="<?php echo $site_path;?>/index"><img src="<?php echo $site_path;?>/careers/img/logo/logo.png"></a>
				</div>
				<!--<div class="col-md-7 col-sm-15 col-lg-11 cap-logo">
					<img src="<?php /*echo $site_path;*/?>/careers/img/logo/cap-logo.jpg">
				</div>-->
				<?php require 'flag.php' ;?>
			</div>
		</div>
		<!--<div class="wrapper nav-section1">-->
  		<div class="wrapper nav-section1" ng-mouseleave="hideServiceSubMenu()">
			<div class="container">
				<div class="logo visible-xs"><a href="<?php echo $site_path;?>/index"><img src="<?php echo $site_path;?>/careers/img/logo/logo.png" alt="Medgenome Logo"></a></div>
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav hidden-xs hidden-sm">
							<li class="drop-down"><a href="<?php echo $site_path;?>" onmouseover="subMenuHide()">Home</a>
							<li class="drop-down"><a href="#" onmouseover="subMenuHide()">About Us</a>
								<ul class="drop-down-menu">
									<li><a href="https://www.medgenome.com/about/#company">Company</a></li>
									<li><a href="https://www.medgenome.com/about/#management">Management</a></li>
									<li><a href="https://www.medgenome.com/about/#directors">Directors</a></li>
									<li><a href="https://www.medgenome.com/about/#advisors">Advisors</a></li>
									<li><a href="https://www.medgenome.com/about/#our-investors">Our Investors</a></li>
									<li><a href="https://www.medgenome.com/about/#medgenome-institutional-ethics-committee">MedGenome Institutional Ethics Committee (MG-IEC)</a></li>
								</ul>
							</li>
							<li class="drop-down"><a href="#" onmouseover="subMenuHide()">Genetic Testing</a>
								<ul  class="drop-down-menu ">
									<li><a href="<?php echo $site_path;?>/disease">Test List</a>
									<li><a href="http://medgenomeclaria.com/" target="_blank">Non-Invasive Prenatal Test</a></li>
								</ul>
							</li>
						</ul>

                        <!-- Mobile css---->
						<ul class="nav navbar-nav visible-xs visible-sm">
							<li class="drop-down"><a href="<?php echo $site_path;?>" onmouseover="subMenuHide()">Home</a></li>
							<li class=""><a href="#">About Us</a>
								<ul class="mob-submenu">
									<li><a href="<?php echo $site_path;?>/company">Company</a></li>
									<li><a href="<?php echo $site_path;?>/management">Management</a></li>
									<li><a href="<?php echo $site_path;?>/directors">Directors</a></li>
									<li><a href="<?php echo $site_path;?>/advisors">Advisors</a></li>
									<li><a href="<?php echo $site_path;?>/investors">Our Investors</a></li>
									<li><a href="<?php echo $site_path;?>/medgenome-iec">MedGenome Institutional Ethics Committee (MG-IEC)</a></li>
								</ul>
							</li>
							<li><a href="#">Genetic Testing in South Asia</a>
								<ul  class="mob-submenu">
									<li><a href="<?php echo $site_path;?>/disease">Test List</a>
									<li><a href="http://medgenomeclaria.com/" target="_blank">Non-Invasive Prenatal Test</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>

				<div class="col-md-5 col-sm-8 search-wrap hidden-xs pull-right" >
					<input type="text" class="form-control">
					<div class="search"><i class="fa fa-search"></i>
					</div>
				</div>
				<!-- Cap logo -->
				<!--<div class="row">
					<div class="col-xs-24 text-center visible-xs">
						<img src="<?php /*echo $site_path;*/?>/careers/img/logo/cap-logo-mobile-version.jpg" alt="Cap Logo">
					</div>
				</div>-->
				<!-- Contact us for mobile version -->
				<?php require 'flag-mobile.php' ;?>
			</div>

		</div>
        	<!--</div>-->

<!-- Service Sub Menu-->
  <div id="serviceSubMenu" class="container-fluid serviceSubMenu" style="display: none;" onmouseleave="subMenuHide()">
    <div class="row">
     <div class="col-md-8">
      <ul>
       <li><a class="serviceSubTitle" href="<?php echo $site_path;?>/servicestypes">Next Generation Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes?act=genome"><span class="glyphicon glyphicon-menu-right"></span>Whole Genome Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes?act=exome"><span class="glyphicon glyphicon-menu-right"></span>Whole Exome Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes?act=rna"><span class="glyphicon glyphicon-menu-right"></span>RNA Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes?act=mirna"><span class="glyphicon glyphicon-menu-right"></span>miRNA Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes?act=chip"><span class="glyphicon glyphicon-menu-right"></span>ChIP Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes?act=methyl"><span class="glyphicon glyphicon-menu-right"></span>MethylSeq</a></li>
	   <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes?act=tcr"><span class="glyphicon glyphicon-menu-right"></span>TCR Sequencing</a></li>
      </ul>
     </div>
     <div class="col-md-8">
      <ul>
       <li><a class="serviceSubTitle" href="<?php echo $site_path;?>/ngs">NGS Bioinformatics</a></li>
       <li class="cloningstablecell"><a class="serviceSubTitle" href="<?php echo $site_path;?>/services-cloning">Cloning & Stable Cell Line Development</a></li>
		<!--<li><a class="serviceSubTitle" href="<?php /*echo $site_path;*/?>/tcr-sequencing">TCR Sequencing</a></li>-->
      </ul>
     </div>
     <div class="col-md-8">
		 <ul>
			 <li><a class="serviceSubTitle">CAP/CLIA Certified Services</a></li>
			 <li><a class="serviceSubText"><span class="glyphicon glyphicon-menu-right"></span>Single-gene Sequencing</a></li>
			 <li><a class="serviceSubText"><li class="serviceSubSubText">BRAF V600E</li></a></li>
		 </ul>
		 <ul>
			 <li><a class="serviceSubTitle">CAP/CLIA/GCLP Clinical Research</a></li>
			 <li><a class="serviceSubText"><span class="glyphicon glyphicon-menu-right"></span>Contact us for more information</a></li>
		 </ul>
		  <ul>
		   	<li><a class="serviceSubTitle">Research and Development Services</a></li>
		   	<li><a class="serviceSubText"><span class="glyphicon glyphicon-menu-right"></span>Exome Sequencing</a></li>
		   	<li><a class="serviceSubText"><span class="glyphicon glyphicon-menu-right"></span>RNA Sequencing</a></li>
		   	<li><a class="serviceSubText"><span class="glyphicon glyphicon-menu-right"></span>Single-gene Sequencing</a></li>
		  </ul>
     </div>
    </div>
   </div>
	<script src="<?php echo $site_path;?>/js/header.js"></script>
	<script src="<?php echo $site_path;?>/js/flag.js"></script>
  <!-- End-->