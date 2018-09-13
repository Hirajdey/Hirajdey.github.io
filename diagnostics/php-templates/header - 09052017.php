<?php require 'config/config.php'; ?>
<!doctype html>

<html lang="en">
	<head>
		<?php require 'php-templates/meta-data.php';?>
		<?php //echo $page_name;?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(isset($title)){?><title><?php echo $title;?></title><?php } ?>
		<?php if(isset($description)){?><meta name="description" content="<?php echo $description;?>" /><?php } ?>
		<?php if(isset($keywords)){?><meta name="keywords" content="<?php echo $keywords;?>" /><?php } ?>
		<link rel="icon" href="<?php echo $site_path;?>/img/logo/favicon.png">

		<link ng-href="<?php echo $site_path;?>/css/{{href}}" type="{{type}}" rel="stylesheet" />

		<link rel="stylesheet" href="<?php echo $site_path;?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $site_path;?>/css/font-awesome.min.css">
		<!--<link rel="stylesheet" href="<?php /*echo $site_path;*/?>/css/custom.css">-->

		<link rel="stylesheet/less" type="text/css" href="<?php echo $site_path;?>/css/custom.less" />
		<script src="<?php echo $site_path;?>/js/less.js" type="text/javascript"></script>

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
		<!--<script src="<?php /*echo $site_path;*/?>/js/vendors/angular-animate.min.js"></script>
		<script src="<?php /*echo $site_path;*/?>/js/vendors/loading-bar.js"></script>-->
        <script src="<?php echo $site_path;?>/js/vendors/jquery-2.1.4.min.js"></script>
		<?php require 'analyticstracking.php';?>
   	</head>
	<body>
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
						<li><a href="https://medgenomelabs.wordpress.com/" target="_blank">Blog</a></li>
						<li><a href="http://www.medgenomeclaria.com/blog/" target="_blank">Blog - Claria</a></li>
						<!--<li><a href="<?php /*echo $site_path;*/?>/stories.php">Stories </a></li>-->
						<!--<li><a href="<?php /*echo $site_path;*/?>/media.php?year=2017">Media</a></li>-->
						<li><a href="<?php echo $site_path;?>/media.php">Media</a></li>
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
			<div class="col-md-16 col-sm-8 logo">
				<a href="<?php echo $site_path;?>/index.php"><img src="<?php echo $site_path;?>/img/logo/logo.png"></a>
			</div>
			<!--<div class="col-md-10 ad hidden-xs hidden-sm hidden-md"><a href="http://www.prnewswire.co.uk/news-releases/medgenome-singapore-announces-whole-genome-sequencing-grant-challenge-for-south-east-asia-607409976.html" target="_blank"><img src="<?php /*echo $site_path;*/?>/img/ad/ad-min.jpg" alt="Whole Genome Sequencing Grant Challenge for South East Asia"></a></div>-->
			<!--<div class="col-md-10 ad visible-xs visible-sm visible-md"><img src="img/ad/ad.jpg" class="img-responsive" alt="Whole Genome Sequencing Grant Challenge for South East Asia"></div>-->
			<div class="col-md-8 col-sm-16 contact text-right">
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
								<ul class="drop-down-menu">
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
                                    <li><a href="http://genomeasia100k.com/" target="_blank">GenomeAsia 100K</a></li>
									<li><a href="<?php echo $site_path;?>/computational-biology.php">Computational Biology</a></li>
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
							<li><a href="#">Genetic Testing in South Asia</a>
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
        					 <li class="clearfix"><a>CAP/CLIA Certified Services</a>
                                <ul class="sub-drop-down-menu">
									<li><a>Single-gene Sequencing</a></li>
									<li style="margin-left: 30px;"><a>BRAF V600E</li></a></li>
                                </ul>
                              </li>
							  <li class="clearfix"><a>CAP/CLIA/GCLP Clinical Research</a>
								  <ul class="sub-drop-down-menu">
									  <li><a>Contact us for more information</a></li>
								  </ul>
							  </li>
							  <li class="clearfix"><a>Research and Development Services</a>
								  <ul class="sub-drop-down-menu">
									  <li><a>Exome Sequencing</a></li>
									  <li><a>RNA Sequencing</a></li>
									  <li><a>Single-gene Sequencing</a></li>
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
									<li><a href="<?php echo $site_path;?>/disease-program.php">Computational Biology</a></li>
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
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=genome"><span class="glyphicon glyphicon-menu-right"></span>Whole Genome Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=exome"><span class="glyphicon glyphicon-menu-right"></span>Whole Exome Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=rna"><span class="glyphicon glyphicon-menu-right"></span>RNA Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=mirna"><span class="glyphicon glyphicon-menu-right"></span>miRNA Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=chip"><span class="glyphicon glyphicon-menu-right"></span>ChIP Sequencing</a></li>
       <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=methyl"><span class="glyphicon glyphicon-menu-right"></span>MethylSeq</a></li>
	   <li><a class="serviceSubText" href="<?php echo $site_path;?>/servicestypes.php?act=tcr"><span class="glyphicon glyphicon-menu-right"></span>TCR Sequencing</a></li>
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
  <!-- End-->