<?php require 'php-templates/header.php' ?>

<div ng-app="oncomdApp">
	<div ng-controller="oncomdCtrl">

		<div ng-view></div>

		<nav id="mainNav">
			<div class="one-page">
		  <a href="#page-one"><label class="home-banner-outer"></label></a>
		  <a href="#page-two"><label class="home-banner-outer"></label></a>
		  <a href="#page-three"><label class="home-banner-outer"></label></a>
		  <a href="#page-four"><label class="home-banner-outer"></label></a>
		  </div>
		</nav>

		<div class="home-banr" id="page-one">
			<div class="container full-height">
				<div class="row">
					<div class="head-row col-sm-24">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
							<div class="navbar-header">
								<a class="navbar-brand col-xs-10 col-sm-5 col-lg-5" href="oncomd.php"><img src="<?php echo $site_path;?>/img/oncomd/logo/logo.png" class="img-responsive"></a>
								<ul class="left-margn nav navbar-nav col-md-15">
									<li><a href="<?php echo $site_path;?>/oncomdresearch.php">Researchers</a></li>
									<li><a href="<?php echo $site_path;?>/oncomdclinician.php">Clinicians</a></li>
									<li><a href="<?php echo $site_path;?>/oncomdenterprise.php">Enterprise</a></li>
									<li><a href="<?php echo $site_path;?>/oncomdpartner.php">Partners</a></li>
									<li><a href="<?php echo $site_path;?>/oncomdabout.php">About</a></li>
									<li><a href="<?php echo $site_path;?>/oncomdpress.php">Press</a></li>
								</ul>
								<div class="hom-tp-butn col-sm-4 hom-top-round">
									<ul class="nav navbar-nav navbar-right">
										<li><a target="_blank" href="http://medgenome.com/"><button class="btn btn-white-trns">Visit MedGenome</button></a></li>
										<li><a href="#footer-section" class="top-mrgn"><button class="btn btn-white-trns">Get in touch Today</button></a></li>
									</ul>
								</div>
								<div class="mob-menuwp">
									<div class="mob-menu" id="js-mob-menu">
										<a href="#"><img src="<?php echo $site_path;?>/img/oncomd/icons/menu-butn.png"></a>
									</div>
									<div class="menu-drop-toggle hide" id="js-menu-items">
										<ul>
											<li class="mob-togle"><a class="mob-log" href="<?php echo $site_path;?>/oncomd.php">OncoMD</a>
											<div id="mob-close-butn" class="mob-togle-butn"><img src="<?php echo $site_path;?>/img/oncomd/icons/menu-close-butn.png"></div>
											</li>
											<li><a href="<?php echo $site_path;?>/oncomdresearch.php">Researchers</a></li>
											<li><a href="<?php echo $site_path;?>/oncomdclinician.php">Clinicians</a></li>
											<li><a href="<?php echo $site_path;?>/oncomdenterprise.php">Enterprise</a></li>
											<li><a href="<?php echo $site_path;?>/oncomdpartner.php">Partners</a></li>
											<li><a href="<?php echo $site_path;?>/oncomdabout.php">About</a></li>
											<li><a href="<?php echo $site_path;?>/oncomdpress.php">Press</a></li>
										</ul>
										<div class="mob-menu-butn hom-tp-butn">
											<ul class="navbar-right">
												<li><a href="http://medgenome.com/" target="_blank"><button class="btn btn-white-trns">Visit MedGenome</button></a></li>
												<li><a class="top-mrgn" href="#footer-section"><button class="btn btn-white-trns">Get in touch Today</button></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div><!-- /.container-fluid -->
							</div>
						</nav>

					<div class="clear"></div>
						<!-- Onco MD lite and Advanced -->
						<div class="container text-center lite-advanced">
							<div class="row">
								<div class="col-md-12"><a href="http://oncomd.medgenome.com/OncoMDLite" target="_blank"><img src="<?php echo $site_path;?>/img/oncomd/banners/oncomd-lite.png" alt="OncoMD Lite"></a></div>
								<div class="col-md-12"><a href="http://oncomd.medgenome.com" target="_blank"><img src="<?php echo $site_path;?>/img/oncomd/banners/oncomd-advanced.png" alt="OncoMD Advanced"></a></div>
							</div>
						</div>
						<!-- End -->
						<!--<div class="col-xs-0 col-sm-2 col-md-5"></div>
						<div class="col-xs-12 col-sm-11 col-md-8"><img src="<?php /*echo $site_path;*/?>/img/oncomd/banners/oncomd-lite.png" alt="OncoMD Lite"></div>
						<div class="col-xs-12 col-sm-10 col-md-8"><img src="<?php /*echo $site_path;*/?>/img/oncomd/banners/oncomd-advanced.png" alt="OncoMD Advanced"></div>
						<div class="col-xs-0 col-sm-1 col-md-3"></div>-->
					<div class="banner-head col-sm-24">
						<h2>Revolutionize Cancer<br><span class="blue">Research</span> and <span class="blue">Diagnostics</span></h2>
						<h3>OncoMD is an extensively annotated knowledge base of genomic alterations in cancer that provides deep insights into the disease at a genetic and molecular level</h3>
					</div>
					<div class="arrw-down"><a href="#page-two"><img src="<?php echo $site_path;?>/img/oncomd/icons/arrw-bttm.png"></a></div>
				</div>
			</div>
			</div>
		</div>
		<div class="wrapper-blue1 col-sm-24" id="page-two">
			<div class="container">
				<h4>OncoMD is brought to the end user as an Enterprise solution and as a web-based plug in</h4>
			</div>
		</div>
		<div class="research-wrp col-sm-24">
			<div class="half-col1 col-sm-12 col-xs-24">
				<h4>For Researchers</h4>
				<p>Customized Research Solutions</p>
				<a class="btn btn-blk-trns lear-nmore" href="<?php echo $site_path;?>/oncomdresearch.php">Learn More</a>
			</div>
			<div class="half-col2 col-sm-12 col-xs-24">
				<h4>For Clinicians</h4>
				<p>Actionable Clinical Report</p>
				<a class="btn btn-blk-trns lear-nmore" href="<?php echo $site_path;?>/oncomdclinician.php">Learn More</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="wrapper-black col-md-24" id="page-three">
			<div class="container">
				<ul>
					<li class="col-sm-6 col-xs-12"><span class="size">1.9+</span> million cancer mutations</li>
					<li class="mob-rate col-sm-6 col-xs-12"><span class="size">7,000+</span> peer reviewed publications</li>
					<li class="col-sm-6 col-xs-12"><span class="size">17,000+</span> exome studies</li>
					<li class="mob-rate col-sm-6 col-xs-12"><span class="size">650,000+</span> samples</li>
				</ul>
			</div>
		</div>
		<div class="devlop-wp center col-sm-24" id="page-four">
				<h4>OncoMD helps to infer the impact of genomic alterations on cancer development</h4>
				<p>MedGenome Inc. is a genomics-based research company headquartered in California with the mission to improve global health by decoding genetic information contained in an individual's genome. It is also a founding member of GenomeAsia 100K initiative to sequence 100,000 Genomes in South, North and East Asia.</p>
			  <p>Our NGS lab in Foster City, California is ISO 15189 compliant, CLIA certified, and CAP accredited.</p>
			</div>
		<div class="clear"></div>
		<div class="wrapper-white">
			<div class="container">
				<h5>Let’s fight cancer together</h5>
				<h6>
					<a class="mailto" href="mailto:youremailaddress">oncomd@medgenome.com</a> <span class="family">|<span/>
					<a class="family f-bold mailto" href="tel:(203) 823-6510">(203) 823-6510</a>
				</h6>
				<ul>
					<li><a href="https://www.facebook.com/MedGenomeGenomics" target="_blank"></a></li>
					<li><a href="https://twitter.com/MedGenomeLabs" target="_blank"></a></li>
					<li><a href="https://www.linkedin.com/company/medgenome-labs-pvt-ltd" target="_blank"></a></li>
				</ul>
			</div>
		</div>

		<div class="top-arrow hide hidden-xs" id="scroll-top">
			<div class="fa fa-arrow-up"></div>
		</div>
	</div>
</div>

<!--<script src="<?php /*echo $site_path;*/?>/js/angularjs/oncomd.js">-->

<?php require 'php-templates/footer.php' ?>