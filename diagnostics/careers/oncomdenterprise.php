<?php require 'php-templates/header.php' ?>
<nav id="mainNav">
	<div class="one-page">
  <a href="#page-one"><label class="home-banner-outer"></label></a>
  <a href="#page-two"><label class="home-banner-outer"></label></a>
  <a href="#page-three"><label class="home-banner-outer"></label></a>  
  </div>
</nav>
<div class="enterprise-banner inner-banner">
	<div class="container full-height" id="page-one">
		<div class="row">
			<div class="head-row col-sm-24">
				<nav class="navbar navbar-default">
  					<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a class="navbar-brand col-sm-5" href="<?php echo $site_path;?>/oncomd.php"><img src="<?php echo $site_path;?>/img/oncomd/logo/logo.png" class="img-responsive"></a>
		<!-- Collect the nav links, forms, and other content for toggling -->
		      <ul class="left-margn nav navbar-nav col-md-15">
		       					 <li><a href="<?php echo $site_path;?>/oncomdresearch.php">Researchers</a></li>
                                    <li><a href="<?php echo $site_path;?>/oncomdclinician.php">Clinicians</a></li>
                                    <li><a href="<?php echo $site_path;?>/oncomdenterprise.php"  class="active">Enterprise</a></li>
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
				<div class="menu-drop-toggle hide">
					<ul>
						<li class="mob-togle"><a class="mob-log" href="<?php echo $site_path;?>/oncomd.php">OncoMD</a>
						<div id="mob-close-butn" class="mob-togle-butn"><img src="<?php echo $site_path;?>/img/oncomd/icons/menu-close-butn.png"></div>
						</li>
						<li><a href="<?php echo $site_path;?>/oncomdresearch.php">Researchers</a></li>
                                    <li><a href="<?php echo $site_path;?>/oncomdclinician.php">Clinicians</a></li>
                                    <li><a href="<?php echo $site_path;?>/oncomdenterprise.php"  class="active">Enterprise</a></li>
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
			</div>
            	</div><!-- /.container-fluid -->
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
			<div class="banner-title-wrp col-sm-24 redce-padg-hd">
				<h3>OncoMD enterprise solution combines an up-to-date knowledge base of cancer mutations with embedded software and data analysis tools to analyze and annotate variant data
				</h3>
			</div>
			<div class="arrw-down"><a href="#page-two"><img src="<?php echo $site_path;?>/img/oncomd/icons/arrw-bttm.png"></a></div>
	</div>
</div>
</div>
</div>
<div class="data-info col-sm-24" id="page-two">
	<div class="container">
		<h4>Data</h4>
	</div>
</div>
<div class="data-mid-section col-sm-24">
	<div class="container">
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/genetic-alterations.png">
			<h3>Genetic alterations</h3>
			<p>Cancer-relevant genetic alterations in >18,000 genes</p>
		</div>
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/gene-fusions.png">
			<h3>Gene fusions</h3>
			<p>Provides information and structure of each partner gene forming the fusion</p>
		</div>
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/cancer-mutations.png">
			<h3>Cancer mutations</h3>
			<p>Mutational landscape of all human cancers</p>
		</div>
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/approved-drugs.png">
			<h3>Approved drugs</h3>
			<p>Data on all approved drugs against genetically altered genes</p>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="analytics-info col-sm-24">
	<div class="container">
		<h4>Analytics</h4>
	</div>
</div>
<div class="analytics-data-mid-section col-sm-24">
	<div class="container">
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/anal-img-1.png">
			<h3>Analyze genomics <br>data</h3>
			<p>Advanced search algorithms enable large scale analysis of genomics data</p>
		</div>
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/anal-img-2.png">
			<h3>Analyze multiple <br>VCF files</h3>
			<p>Easy upload of one or many VCF files for annotation</p>
		</div>
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/anal-img-3.png" >
			<h3>Powerful mutation <br>viewer</h3>
			<p>Powerful visualization tools produce mutation maps and mutation hotspots in genes enabling comparison between multiple tumor samples</p>
		</div>
		<div class="data-content col-sm-12 col-lg-6">
			<img src="<?php echo $site_path;?>/img/oncomd/icons/anal-img-4.png">
			<h3>Generate customizable clinical report</h3>
			<p>Including clinical interpretation, NCCN guidelines, mutation drug and
			clinical trial information</p>
		</div>
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
<div class="lts-figt">
		<div class="center col-sm-24">
			<h4>OncoMD helps to infer the impact of genomic alterations on cancer development</h4>
			<p>MedGenome Inc. is a genomics-based research company headquartered in California with the mission to improve global health by decoding genetic information contained in an individual's genome. It is also a founding member of GenomeAsia 100K initiative to sequence 100,000 Genomes in South, North and East Asia.</p>
    <p>Our NGS lab in Foster City, California is ISO 15189 compliant, CLIA certified, and CAP accredited.</p>
		</div>
	</div>	
<div class="clear"></div>
<div class="wrapper-white">
		<div class="container">
			<h5>Let’s fight cancer together</h5>
			<h6>
				<a class="mailto" href="mailto:youremailaddress">oncomd@medgenome.com</a> <span class="family">|</span>
				<a class="family f-bold mailto" href="tel:(203) 823-6510">(203) 823-6510</a>
				<!-- <a class="family f-bold mailto" <access origin="tel:(203) 823-6510" launch-external="yes"/>(203) 823-6510</a> -->
			</h6>
			<div class="clear"></div>
			<ul>
				<li><a href="https://www.facebook.com/MedGenomeGenomics" target="_blank"></a></li>			
				<li><a href="https://twitter.com/MedGenomeLabs" target="_blank"></a></li>
				<li><a href="https://www.linkedin.com/company/medgenome-labs-pvt-ltd" target="_blank"></a></li>
			</ul>
		</div>
	</div>

<?php require 'php-templates/footer.php' ?>