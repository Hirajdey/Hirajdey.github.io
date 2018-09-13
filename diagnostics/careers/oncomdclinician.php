<?php require 'php-templates/header.php' ?>

<nav id="mainNav">
	<div class="one-page">
  <a href="#page-one"><label class="home-banner-outer"></label></a>
  <a href="#page-two"><label class="home-banner-outer"></label></a>
  <a href="#page-three"><label class="home-banner-outer"></label></a>
  <a href="#page-four"><label class="home-banner-outer"></label></a>  
  </div>
</nav>
<div class="clinicians-banner inner-banner" id="page-one">
	<div class="container full-height">
		<div class="row">
			<div class="head-row col-sm-24">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<a class="navbar-brand col-xs-10 col-sm-5 col-lg-5" href="<?php echo $site_path;?>/oncomd.php"><img src="<?php echo $site_path;?>/img/oncomd/logo/logo.png" class="img-responsive"></a>
						<ul class="left-margn nav navbar-nav col-md-15">
							<li><a href="<?php echo $site_path;?>/oncomdresearch.php">Researchers</a></li>
							<li><a href="<?php echo $site_path;?>/oncomdclinician.php" class="active">Clinicians</a></li>
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
								<div class="menu-drop-toggle hide">
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
						</div>
					</div><!-- /.container-fluid -->
				</nav>
			</div>
			<div class="clear"></div>
			<!-- Onco MD lite and Advanced -->
			<div class="container text-center lite-advanced">
				<div class="row">
					<div class="col-md-12"><a href="http://oncomd.medgenome.com/OncoMDLite" target="_blank"><img src="<?php echo $site_path;?>/img/oncomd/banners/oncomd-lite.png" alt="OncoMD Lite"></a></div>
					<div class="col-md-12"><a href="http://oncomd.medgenome.com" target="_blank"><img src="<?php echo $site_path;?>/img/oncomd/banners/oncomd-advanced.png" alt="OncoMD Advanced"></a></div>
				</div>
			</div>
			<!-- End -->
			<div class="banner-title-wrp col-sm-24 clini-banr-title">
				<h3>OncoMD generates clinical report automatically from variant calling files (VCFs)</h3>
				<div class="clear"></div>
			</div>
			<div class="arrw-down"><a href="#page-two"><img src="<?php echo $site_path;?>/img/oncomd/icons/arrw-bttm.png"></a></div>
		</div>
	</div>
</div>
<div class="clinicians-info col-sm-24" id="page-two">
	<div class="container">
		<h3>OncoMD analyzes patient’s mutation profile to deliver clinical diagnostics solutions</h3>
		<div class="clinicians-pic-wrp">
			<div class="clinician-profile hidden-xs">
				<img src="<?php echo $site_path;?>/img/oncomd/banners/clinicians-pic-1.png" class="img-responsive" alt="Responsive image">
			</div>
			<div class="clinician-profile hidden-xs" id="page-three">
				<img src="<?php echo $site_path;?>/img/oncomd/banners/clinicians-pic-2.png" class="img-responsive" alt="Responsive image">
			</div>
			<div class="clinicians-prof-wp visible-xs">
				<div class="clini-analys">
					<div class="profile-wp">Curation of peer-reviewed journals</div>
					<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-pic1.png" class="img-responsive" alt="Responsive image">
				</div>
				<div class="clini-analys">
					<div class="profile-wp">Data captured using controlled vocabularies</div>
					<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-pic-2.png" class="img-responsive" alt="Responsive image">
				</div>
				<div class="clini-analys">
					<div class="profile-wp">Automated bioinformatics accuracy control</div>

					<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-pic-3.png" class="img-responsive" alt="Responsive image">
				</div>
				<div class="clini-analys">
					<div class="profile-wp">Accurate data ready for OncoMD knowledge base</div>
					<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-pic-4.png" class="img-responsive" alt="Responsive image">
				</div>
				<div class="clini-analys">
					<div class="clin-slidr-mobwp">						
						<div class="visible">
							<button id="prevBtn" onclick="prev()"></button><button id="nextBtn" onclick="next()"></button>
							<div class="outer">
								<div class="image five"></div>
								<div class="image four"></div>
								<div class="image three"></div>
								<div class="image two"></div>
								<div class="image one"></div>
							</div>
						</div>
                     </div>
					<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-pic-5.png" class="img-responsive" alt="Responsive image">
				</div>				
			</div>
		</div>
	</div>
	<div class="clini-analytics-wp visible-xs">
		<h3>Analytics</h3>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-10.png"></div>
				<div class="anly-txt">Is the variant novel?</div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-9.png"></div>
				<div class="anly-txt">What is the response of the variant to the drug?</div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-8.png"></div>
				<div class="anly-txt">What are the literature references for the gene mutation?</div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img class="tube-img" src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-7.png"></div>
				<div class="anly-txt">What are the details of the samples from which the mutation data for a particular gene was collected?</div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-6.png"></div>
				<div class="anly-txt">What is the function of the gene containing the variant? </div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-5.png"></div>
				<div class="anly-txt">What is the chromosomal location for the mutation?</div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-4.png"></div>
				<div class="anly-txt">Is there an approved drug against the variant?</div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-3.png"></div>
				<div class="anly-txt">What is the pathway for the variant gene? </div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-2.png"></div>
				<div class="anly-txt">What is the list of open clinical trials for the mutation?</div>
				<div class="clear"></div>
			</div>
			<div class="anal-blk">
				<div class="anly-img"><img src="<?php echo $site_path;?>/img/oncomd/banners/clini-anla-1.png"></div>
				<div class="anly-txt">What is the frequency of the variant in different cancers?</div>
				<div class="clear"></div>
			</div>			
		<div class="clear"></div>	
	</div>
	<div class="visible-xs">
	<div class="col-sm-24 clini-mob-vari">
		<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-arrow.png" class="img-responsive" alt="Responsive image">
	</div>
	<div class="clini-blue-wp">OncoMD analytics provides useful insights to clinically interpret genetic variants</div>

	<div class="col-sm-24 clini-mob-vari">
		<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-arrow-2.png" class="img-responsive" alt="Responsive image">
		<p>The comprehensive clinical information is fed into a structured clinical report</p>	
	</div>
	<div class="clin-pant-wp col-sm-24">
		<div class="pant-inblk">Patient Information / Sample Information</div>
	</div>



	<div class="clin-pant-wp col-sm-24">
		<div class="pant-inblk">Gene Variations Table</div>
	</div>

	<div class="clin-pant-wp col-sm-24">
		<div class="pant-inblk">Gene / Variant Information</div>
	</div>
	<div class="clin-pant-wp col-sm-24">
		<div class="pant-inblk">Test Details / Interpretation<br>
		<span>Background | Test Details | Interpretation </span></div>
	</div>

	<div class="clin-pant-wp col-sm-24">
		<div class="pant-inblk">NCCN Guidelines</div>
	</div>

	<div class="clin-pant-wp col-sm-24">
		<div class="pant-inblk">References</div>
	</div>
	
	<div class="clin-pant-wp col-sm-24">
		<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-brk.png" class="img-responsive" alt="Responsive image">
	</div>
	<div class="clin-pant-wp col-sm-24">
		<img src="<?php echo $site_path;?>/img/oncomd/banners/clini-pic-6.png" class="img-responsive" alt="Responsive image">
	</div>
</div>
    <div class="report-wrp col-sm-24">
        <div class="container">
            <h3>Sample clinical report</h3>
            <div class="clin-btn-wrp">
                <a class="btn btn-primary" href="<?php echo $site_path;?>/pdf/oncomd/mockclinicalreport_v2.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/oncomd/icons/download.png" alt="">Download a sample clinical report</a>
            </div>
        </div>
    </div>
	<div class="clear"></div>
<div class="wrapper-black col-md-24" id="page-four">
	<div class="container">
		<ul>
			<li class="col-sm-6 col-xs-12"><span class="size">1.9+</span> million cancer mutations</li>
			<li class="mob-rate col-sm-6 col-xs-12"><span class="size">7,000+</span> peer reviewed publications</li>
			<li class="col-sm-6 col-xs-12"><span class="size">17,000+</span> exome studies</li>
			<li class="mob-rate col-sm-6 col-xs-12"><span class="size">650,000+</span> samples</li>
			<div class="clear"></div>
		</ul>
	</div>
</div>
<div class="lts-figt">
	<div class="center col-sm-24">
		<h4>Revolutionize cancer diagnostics using OncoMD</h4>
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
		</h6>
		<div class="clear"></div>
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

<?php require 'php-templates/footer.php' ?>