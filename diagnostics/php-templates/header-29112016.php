<!DOCTYPE html>
<html>
	<head>
		<?php
		require 'config/config.php';
		//$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		require 'php-templates/meta-data.php';
		?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(isset($title)){?><title><?php echo $title;?></title><?php } ?>
		<?php if(isset($description)){?><meta name="description" content="<?php echo $description;?>" /><?php } ?>
		<?php if(isset($keywords)){?><meta name="keywords" content="<?php echo $keywords;?>" /><?php } ?>
		<link rel="icon" href="<?php echo $site_path;?>/img/logo/favicon.png">
		<link rel="stylesheet" href="<?php echo $site_path;?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $site_path;?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $site_path;?>/css/custom.css">
		<?php if (trim($page_name) == "oncopept") {?>
        <link rel="stylesheet" href="<?php echo $site_path;?>/oncopept/css/custom.css">
		<?php } ?>
		<?php if (trim($page_name) == "admin" || trim($page_name) == "dashboard") {?>
			<link rel="stylesheet" href="<?php echo $site_path;?>/admin/css/admin.css">
		<?php } ?>
        <link rel="stylesheet" href="<?php echo $site_path;?>/igp/css/custom.css">
        <!--<script src="<?php /*echo $site_path;*/?>/js/angular.min.js"></script>-->
		<script src="<?php echo $site_path;?>/js/vendors/angular-1.5.8.min.js"></script>
		<script src="<?php echo $site_path;?>/js/vendors/angular-sanitize.js"></script>
		<script src="<?php echo $site_path;?>/js/vendors/ui-bootstrap-tpls-0.14.3.min.js"></script>
        <script src="<?php echo $site_path;?>/js/vendors/jquery-2.1.4.min.js"></script>
   	</head>
	<body>
    	<!--<div class="topheader navbar navbar-fixed-top">-->
	<div ng-app="headerApp" ng-init="sitepath='<?php echo $site_path;?>';">
		<div ng-controller="headerCtrl">
		<div class="wrapper top-section1 hidden-xs">
			<div class="container">
				<div class="col-sm-8">
					<ul class="social">
						<a href="https://www.facebook.com/MedGenomeGenomics/" target="_blank"><li class="fa fa-facebook"></li></a>
						<a href="https://twitter.com/MedGenomeLabs" target="_blank"><li class="fa fa-twitter"></li></a>
						<a href="#"><li class="g-plus"></li></a>
						<a href="https://www.linkedin.com/company/medgenome-labs-pvt-ltd" target="_blank"><li class="fa fa-linkedin"></li></a>
						<a href="https://www.youtube.com/channel/UCfKNyHEEHerCRyXcnY8SXRQ/feed" target="_blank"><li class="fa fa-youtube"></li></a>
					</ul>
				</div>
				<div class="col-sm-16 text-right">
					<ul class="top-menu">
						<li><a href="https://medgenomelabs.wordpress.com/" target="_blank">Blog</a></li>
						<li><a href="<?php echo $site_path;?>/stories.php">Stories </a></li>
						<li><a href="<?php echo $site_path;?>/media.php?year=2016">Media</a></li>
						<li><a href="<?php echo $site_path;?>/careers.php">Careers  </a></li>
						<li><a href="<?php echo $site_path;?>/events.php">Events</a></li>
                        <!--<li><a href="<?php echo $site_path;?>/webinar.php">Webinar</a></li>-->
						<li><a href="<?php echo $site_path;?>/sitemap.php">Sitemap</a></li>
						<li><a href="<?php echo $site_path;?>/contactus.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container top-second hidden-xs">
			<div class="col-sm-8 logo">
				<a href="<?php echo $site_path;?>/index.php"><img src="<?php echo $site_path;?>/img/logo/logo.png"></a>
			</div>
			<div class="col-sm-16 contact text-right">
				<ul>
					<!--<li class="mob">
						<h6>TOLL FREE</h6>
						<a href="tel:1800-102-8401">1800 102 8401</a>
					</li>-->
					<li class="mail">
						<h6>Email Us</h6>
						<a href="mailto:contact@medgenome.com">contact@medgenome.com</a>
					</li>
				</ul>
			</div>
		</div>
		<!--<div class="wrapper nav-section1">-->
  		<div class="wrapper nav-section1" ng-mouseleave="hideServiceSubMenu()">
			<div class="container">
				<div class="logo visible-xs"><a href="<?php echo $site_path;?>/index.php"><img src="<?php echo $site_path;?>/img/logo/logo.png"></a></div>
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
							<li class="drop-down"><a href="#" onmouseover="subMenuHide()">About Us</a>
								<ul class="drop-down-menu ">
									<li><a href="#" ng-click="showRegisterForm()">Ask Doctor</a></li>
									<li><a href="<?php echo $site_path;?>/company.php">Company</a></li>
									<li><a href="<?php echo $site_path;?>/management.php">Management</a></li>
									<li><a href="<?php echo $site_path;?>/directors.php">Directors</a></li>
									<li><a href="<?php echo $site_path;?>/advisors.php">Advisors</a></li>
									<li><a href="<?php echo $site_path;?>/investors.php">Our Investors</a></li>
									<li><a href="<?php echo $site_path;?>/medgenome-iec.php">MedGenome Institutional Ethics Committee (MG-IEC)</a></li>
								</ul>
							</li>
							<li class="drop-down"><a href="#" onmouseover="subMenuHide()">Genetic Testing</a>
								<ul  class="drop-down-menu ">
									<li class="sub-drop-down clearfix"><a href="#">By Disease</a>
										<span class="glyphicon glyphicon-menu-right"></span>
										<ul class="sub-drop-down-menu">
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=cardiology" id="top_menu_cardiology">Cardiology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=connective-tissue-disorder">Connective Tissue Disorders</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=dermatology" id="top_menu_dermatology">Dermatology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=endocrinology" id="top_menu_endocrinology">Endocrinology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=ent" id="top_menu_ent">ENT</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=haematology" id="top_menu_haematology">Haematology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=immunology" id="top_menu_immunology">Immunology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=metabolic-disorders" id="top_menu_metabolic-disorders">Metabolic Disorders</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=miscellaneous" id="top_menu_miscellaneous">Miscellaneous</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=nephrology" id="top_menu_nephrology">Nephrology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=neurology" id="top_menu_neurology">Neurology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=oncology" id="top_menu_oncology">Oncology</a></li>
                                        </ul>
									</li>
									<li><a href="http://medgenomenipt.com/" target="_blank">Non-Invasive Prenatal Test</a></li>
								</ul>
							</li>
							<li class="drop-down">
								<a href="<?php echo $site_path;?>/service.php" onmouseover="subMenuShow();">Services</a>
								<!--<ul class="drop-down-menu">
									<li class="sub-drop-down clearfix">
										<a href="#">Genomic Solutions</a>
										<span class="glyphicon glyphicon-menu-right"></span>
										<ul class="sub-drop-down-menu">
											<li><a href="<?php echo $site_path;?>/oncomd.php">OncoMD</a></li>
											<li><a href="<?php echo $site_path;?>/oncopept.php">OncoPept</a></li>
										</ul>
									</li>
                                    <li><a href="#">Next Generation Sequencing</a></li>
									<li><a href="<?php echo $site_path;?>/ngs.php">NGS Informatics</a></li>
                                    <li><a href="#">Cloning</a></li>
                                    <li><a href="#">Stable Cell Line Development</a></li>
                                    <li><a href="#">CLIA Certified Services </a></li>
								</ul>-->
							</li>
							
							<li class="drop-down"><a href="#" onmouseover="subMenuHide()">Immunotherapy Solutions</a>
								<ul class="drop-down-menu ">
									<li><a href="<?php echo $site_path;?>/oncomd.php">OncoMD</a></li>
									<li><a href="<?php echo $site_path;?>/oncopept.php">OncoPept</a></li>
								</ul>
							</li>
                            
                            <li class="drop-down"><a href="#" onmouseover="subMenuHide()">Research</a>
								<ul class="drop-down-menu ">
									<li><a href="<?php echo $site_path;?>/disease-program.php">Disease Programs</a></li>
									<li><a href="<?php echo $site_path;?>/integratedgenomicsplatform.php">Integrated Genomics Platform</a></li>
                                    <li><a href="http://genomeasia100k.com/" target="_blank">GenomeAsia 100K </a></li>
								</ul>
							</li>
                            
                            <li><a href="<?php echo $site_path;?>/publications.php" onmouseover="subMenuHide()">Publications</a></li>
						</ul>
                        
                        <!-- Mobile css---->
						<ul class="nav navbar-nav visible-xs visible-sm">
							<li class=""><a href="#">About Us</a>
								<ul class="mob-submenu">
									<li><a href="<?php echo $site_path;?>/company.php">Company</a></li>
									<li><a href="<?php echo $site_path;?>/management.php">Management</a></li>
									<li><a href="<?php echo $site_path;?>/directors.php">Directors</a></li>
									<li><a href="<?php echo $site_path;?>/advisors.php">Advisors</a></li>
									<li><a href="<?php echo $site_path;?>/investors.php">Our Investors</a></li>
									<li><a href="<?php echo $site_path;?>/medgenome-iec.php">MedGenome Institutional Ethics Committee (MG-IEC)</a></li>
								</ul>
							</li>
							<li><a href="#">Genetic Testing</a>
								<ul  class="mob-submenu">
									<li class="clearfix"><a href="#">- By Disease</a>
                                          <ul class="sub-drop-down-menu">
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=cardiology" id="top_menu_cardiology">Cardiology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=connective-tissue-disorder">Connective Tissue Disorders</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=dermatology" id="top_menu_dermatology">Dermatology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=endocrinology" id="top_menu_endocrinology">Endocrinology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=ent" id="top_menu_ent">ENT</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=haematology" id="top_menu_haematology">Haematology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=immunology" id="top_menu_immunology">Immunology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=metabolic-disorders" id="top_menu_metabolic-disorders">Metabolic Disorders</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=miscellaneous" id="top_menu_miscellaneous">Miscellaneous</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=nephrology" id="top_menu_nephrology">Nephrology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=neurology" id="top_menu_neurology">Neurology</a></li>
                                           <li><a href="<?php echo $site_path;?>/disease.php?act=oncology" id="top_menu_oncology">Oncology</a></li>
                                          </ul>
									</li>
									<li><a href="#">Non-Invasive Prenatal Test</a></li>
								</ul>
							</li>
                            
                            <li class="drop-down">
      						  <a href="<?php echo $site_path;?>/service.php" onmouseover="subMenuShow();">Services</a>
                              <ul class="mob-submenu">
                              <li class="clearfix"><a href="#">Next Generation Sequencing</a>
                                  <ul class="sub-drop-down-menu">
                                     <li><a href="<?php echo $site_path;?>/servicestypes.php?act=genome">Whole Genome Sequencing</a></li>
                                     <li><a href="#">Whole Exome Sequencing</a></li>
                                     <li><a href="#">RNA Sequencing</a></li>
                                     <li><a href="#">miRNA Sequencing</a></li>
                                     <li><a href="#">ChIP Sequencing</a></li>
                                     <li><a href="#">MethylSeq</a></li>
                                  </ul>   
                              </li>
                              <li class="clearfix"><a href="<?php echo $site_path;?>/ngs.php">NGS Bioinformatics</a></li>
     					     <li class="clearfix"><a href="#">Cloning & Stable Cell Line Development</a></li>
        					 <li class="clearfix"><a href="#">CAP / CLIA Certified Services</a>
                                <ul class="sub-drop-down-menu">
                                     <li><a href="#">Exome Sequencing</a></li>
                                     <li><a href="#">RNA Sequencing</a></li>
                                     <li><a href="#">Panel Sequencing</a></li>
                                </ul>
                              </li>
                              </ul>
       						</li>
         					
							<li class="visible-xs visible-sm">
								<a href="<?php echo $site_path;?>/service.php">Immunotherapy Solutions</a>
								<ul class="mob-submenu">
									<li><a href="<?php echo $site_path;?>/oncomd.php">OncoMD</a></li>
									<li><a href="<?php echo $site_path;?>/oncopept.php">OncoPept</a></li>
								</ul>
							</li>
                            
                            <li class="visible-xs visible-sm">
								<a href="#">Research</a>
								<ul class="mob-submenu">
									<li><a href="<?php echo $site_path;?>/disease-program.php">Disease Programs</a></li>
									<li><a href="<?php echo $site_path;?>/integratedgenomicsplatform.php">Integrated Genomics Platform</a></li>
                                    <li><a href="http://genomeasia100k.com/" target="_blank">GenomeAsia 100K </a></li>
								</ul>
							</li>
                            
							<li><a href="<?php echo $site_path;?>/publications.php">Publications</a></li>

						</ul>
					</div>
				</nav>
				<div class="col-md-5 col-sm-8 search-wrap hidden-xs pull-right" >
					<input type="text" class="form-control">
					<div class="search"><i class="fa fa-search"></i>
					</div>

				</div>
			</div>
		</div>
        	<!--</div>-->
		


<!-- Service Sub Menu-->
  <div id="serviceSubMenu" class="container-fluid serviceSubMenu" style="display: none;" onmouseleave="subMenuHide()">
    <div class="row">
     <div class="col-md-8">
      <ul>
       <li><a class="serviceSubTitle" href="<?php echo $site_path;?>/servicestypes.php">Next Generation Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=genome">Whole Genome Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=exome">Whole Exome Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=rna">RNA Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=mirna">miRNA Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=chip">ChIP Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=methyl">MethylSeq</a></li>
		  <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=tcr">TCR Sequencing</a></li>
      </ul>
     </div>
     <div class="col-md-8">
      <ul>
       <li><a class="serviceSubTitle" href="<?php echo $site_path;?>/ngs.php">NGS Bioinformatics</a></li>
       <li class="cloningstablecell"><a class="serviceSubTitle" href="<?php echo $site_path;?>/services-cloning.php">Cloning & Stable Cell Line Development</a></li>
		<!--<li><a class="serviceSubTitle" href="<?php /*echo $site_path;*/?>/tcr-sequencing.php">TCR Sequencing</a></li>-->
      </ul>
     </div>
     <div class="col-md-8">
      <ul>
       <li><a class="serviceSubTitle" href="<?php echo $site_path;?>/services-certified.php">CAP / CLIA Certified Services</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=exome">Exome Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=rna">RNA Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/services-certified.php">Panel Sequencing</a></li>
      </ul>
     </div>
    </div>
   </div>
   </div>
</div>
   <script src="<?php echo $site_path;?>/js/header.js"></script>
  <!-- End-->