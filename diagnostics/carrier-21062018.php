<?php require 'config/config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="True"/>
<title>Medgenome | Index</title>
	<script src="js/vendors/angular-1.5.8.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap4.min.css">
<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/responsive.css"/>
<link rel="stylesheet" href="css/font-awesome.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body style="height:1500px">

<div class="header navbar-fixed-top">

	<?php require 'includes/logo.php';?>

  <div class="headerMenu">
	  <?php require 'includes/menu.php';?>
  </div>
	<?php require 'includes/mobile-menu.php';?>


	<?php require 'includes/header-contact.php';?>

</div>


<!--<div class="banner diganosticsBanner">
	<div class="bannerImage">
		<img src="images/clariabg.jpg" alt="banner" />
	</div>
	<div class="bannerContent">
		<div class="wrapper">
			<img src="images/clarialogo.png" alt="clarialogo"/>
			<p>Carrier Screening Test</p>
			<span>Provide the best clarity and reassurance for couples planning a baby.</span>
			<a href="javascript:;">Book Test Now</a>
		</div>
	</div>
</div>-->

<!-- Claria Banner -->
<div id="claria-banner" class="banner">
	<div class="bannerImage">
		<img src="images/clariabg.jpg" alt="banner" class="clsFirstImg" />
		<img src="images/clarialogo.svg" class="clsSecondImg claria-carrier-logo" width="16%" height="17%">
	</div>
	<div class="bannerContent">
		<div class="wrapper">
			<!--<p class="claria-carrier-text">Carrier Screening Test</p>-->
			<a href="<?php echo $site_path;?>/testlist.php">Book Test Now</a>
		</div>
	</div>
</div>
<!-- Actia banner -->
<div id="actia-banner" class="banner">
	<div class="bannerImage">
		<img src="images/actia-banner.jpg" alt="banner" class="clsFirstImg" />
		<img src="images/logo-actia-vector.svg" class="clsSecondImg">
	</div>
	<div class="bannerContent">
		<div class="wrapper">
			<!--<h1>Ocular Genetics</h1>-->
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

<div class="homeTab">
	<div class="wrapper">

		<?php require 'includes/common-tab.php';?>

  	<div id="tabs-1" class="diganosticsCont inner">
	  	<div id="fixed-top" class="links">
	  		<a href="carrier.php" class="active">CARRIER</a>
	  		<a href="nipt.php">NIPT (With Microdeletions)</a>
	  		<a href="pgs-pgd.php">PGS + PGD</a>
	  	</div>
		<!--<a name="intro"></a>-->
		<a name="T1"/>
	  	<div id="T1" class="diganosticsInnerContent">
	  		<div class="heading">
				<span class="mt-2">Claria From MedGenome</span>
	  		</div>

	  		<!--<div class="diganosticsInnerText imageRight">
		  		<p>MedGenome is driven to enable clinicians to deliver the best outcomes to  their patients. Our passion to deliver actionable insights to clinicians has resulted in the development of “Claria” - a suite of NGS (Next-Generation Sequencing) technology-based solutions for reproductive testing.</br>
					Claria offers the most accurate Non-Invasive Prenatal Screening Test (NIPT), the Genetic Carrier Screening Test and the Preimplantation Genetic Screening/Diagnosis (PGS/PGD). </br>
					Additionaly, Claria offers an absolutely free, on-demand pre and post-test genetic counselling to all your patients.</p>
		  		<img src="images/claria-medgenome.png" alt="claria-medgenome" />
		  	</div>-->
			<div class="row diganosticsInnerText">
				<div class="col-md-12 col-lg-7 text-justify">
					MedGenome is driven to enable clinicians to deliver the best outcomes to  their patients. Our passion to deliver actionable insights to clinicians has resulted in the development of “Claria” - a suite of NGS (Next-Generation Sequencing) technology-based solutions for reproductive testing.</br>
					Claria offers the most accurate Non-Invasive Prenatal Screening Test (NIPT), the Genetic Carrier Screening Test and the Preimplantation Genetic Screening/Diagnosis (PGS/PGD). </br>
					Additionaly, Claria offers an absolutely free, on-demand pre and post-test genetic counselling to all your patients.
				</div>
				<div class="col-md-12 col-lg-5"><img class="img-fluid" src="images/claria-medgenome.png" alt="claria-medgenome" /></div>
			</div>
	  	</div>
		<!--<a name="claria"></a>-->
		<a name="T2"/>
	  	<div id="T2" class="diganosticsInnerContent">
	  		<div class="heading">
				<span class="mt-2">Claria Carrier Screening</span>
	  		</div>
	  		<div class="diganosticsInnerText hasBtn">
		  		<p>With state-of-the-art technology, the Claria Career Screening from MedGenome has been designed for maximum detection rates to help couples planning for a baby know about their risks, for passing on genetic conditions to their child.
		  		</p>
		  		<!--<a href="javascript:;">PRESCRIBE  CLARIA CAREER SCREENING</a>
		  		<a href="javascript:;">Need help</a>-->
	  		</div>
	  	</div>
		<!--<a name="overviewClaria"></a>-->
		<a name="T3"/>
	  	<div id="T3" class="diganosticsInnerContent clariaVideo">
	  		<div class="heading">
				<span class="mt-2">Overview of Claria Career Screening</span>
	  		</div>
	  		<div class="row diganosticsInnerText">
				<div class="col-md-12 col-lg-7">
					<img class="img-fluid" src="images/claria-blue.png" alt="claria" style="width: auto;" /><br><br>
					<h2>Watch video and learn more about the Claria Career Screening</h2>
				</div>
				<div class="col-md-12 col-lg-5">
					<div class="videoPadding embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
					</div>
				</div>
	  			<!--<div class="leftCont">
		  			<img src="images/claria-blue.png" alt="claria" />
		  			<h2>Watch video and learn more about the Claria Career Screening</h2>
		  		</div>-->
		  		<!--<div class="rightCont">
		  			<div class="singleVideo">
						<div class="videoImage">
							<iframe width="530" height="315"
									src="https://www.youtube.com/embed/aKvur5hdz_M">
							</iframe>
						</div>
					</div>
		  		</div>-->
		  	</div>
	  	</div>
		<!--<a name="carrier"></a>-->
		<a name="T4"/>
	  	<div id="T4" class="diganosticsInnerContent">
	  		<div class="heading">
				<span class="mt-2">Carrier Screening is Critical in India</span>
	  		</div>
	  		<div class="diganosticsInnerText carrierInIndia">
				<!--<div class="row">
					<div class="col-12 col-md-4 col-lg-2 text-center mx-4 px-0">
						<div class="card blockList">
							<div class="topIcon"><img class="img-fluid" src="images/career-screen-india1.png" alt="career-screen-india" /></div>
							<div class="card-body text-center">
								<p>Over</p>
								<h2>1 Million</h2>
								<h4>Babies born with genetic disorders each year</h4>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-2 text-center mx-4 px-0">
						<div class="card blockList">
							<div class="topIcon"><img class="img-fluid" src="images/career-screen-india2.png" alt="career-screen-india" /></div>
							<div class="card-body text-center">
								<p>Over</p>
								<h2>20% to 30%</h2>
								<h4>Of all deaths are due to genetic disorders</h4>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-2 text-center mx-4 px-0">
						<div class="card blockList">
							<div class="topIcon"><img class="img-fluid" src="images/career-screen-india3.png" alt="career-screen-india" /></div>
							<div class="card-body text-center">
								<p>Over</p>
								<h2>1 in 100</h2>
								<h4>Babies born with an genetic disorder</h4>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 col-lg-2 text-center mx-4 px-0">
						<div class="card blockList">
							<div class="topIcon"><img class="img-fluid" src="images/career-screen-india4.png" alt="career-screen-india" /></div>
							<div class="card-body text-center">
								<p>Over</p>
								<h2>50 Million</h2>
								<h4>People with single gene disorder</h4>
							</div>
						</div>
					</div>
				</div>-->
	  			<div class="blockList">
	  				<ul>
	  					<li>
	  						<div class="topIcon">
	  							<img src="images/career-screen-india1.png" alt="career-screen-india" />
	  						</div>
	  						<p>Over</p>
	  						<h2>50 Million</h2>
	  						<h4>People with single gene disorder</h4>
	  					</li>
	  					<li>
	  						<div class="topIcon">
	  							<img src="images/career-screen-india2.png" alt="career-screen-india" />
	  						</div>
	  						<p>Over</p>
	  						<h2>1 Million</h2>
	  						<h4>Babies born with genetic disorders each year</h4>
	  					</li>
	  					<li>
	  						<div class="topIcon">
	  							<img src="images/career-screen-india3.png" alt="career-screen-india" />
	  						</div>
	  						<p>Over</p>
	  						<h2>20% to 30%</h2>
	  						<h4>Of all deaths are due to genetic disorders</h4>
	  					</li>
	  					<li>
	  						<div class="topIcon">
	  							<img src="images/career-screen-india4.png" alt="career-screen-india" />
	  						</div>
	  						<p>Over</p>
	  						<h2>1 in 100</h2>
	  						<h4>Babies born with an genetic disorder</h4>
	  					</li>
	  				</ul>
	  			</div>
				<h3>CLARIA CARRIER SCREENING helps SCREEN FOR GENETIC VARIATIONS, AND DISEASES THAT ARE VERY SPECIFIC TO INDIAN POPULATION.</h3>
				<p>The unique ‘Claria Carrier screening Test’ is based on the Next Generation Sequencing (NGS) technology and leverages the Indian
					population genetic variant database created by Sir Ganga Ram Hospital over the last twenty years. Therefore enabling MedGenome
					to develop a highly focussed and cost effective test to screen for diseases and genetic variations that are very specific to
					Indian population. The Claria Carrier Screening provides you with : </p>
				<!--<div class="row">
					<div class="col"><h3>CLARIA CARRIER SCREENING helps SCREEN FOR GENETIC VARIATIONS, AND DISEASES THAT ARE VERY SPECIFIC TO INDIAN POPULATION.</h3></div>
				</div>
				<div class="row">
					<div class="col">
						<p>The unique ‘Claria Carrier screening Test’ is based on the Next Generation Sequencing (NGS) technology and leverages the Indian
							population genetic variant database created by Sir Ganga Ram Hospital over the last twenty years. Therefore enabling MedGenome
							to develop a highly focussed and cost effective test to screen for diseases and genetic variations that are very specific to
							Indian population. The Claria Carrier Screening provides you with : </p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-4"><img class="img-fluid col-lg-12 mt-4 background-circle" src="images/critical-in-india-bottom.png" alt="career-screen-india" /></div>
							<div class="col-lg-8"><h4 class="text-primary">Best in class accuracy and easily interpretable reporting</h4></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-4"><img class="img-fluid col-lg-12 mt-4 background-circle" src="images/critical-in-india-bottom1.png" alt="career-screen-india" /></div>
							<div class="col-lg-8"><h4 class="text-primary">Detection of all known common and rare disease-causing mutations</h4></div>
						</div>
					</div>
				</div>-->
			  	<div class="leftCont">
			  		<div class="leftImg">
			  			<img src="images/critical-in-india-bottom.png" alt="career-screen-india" />
			  		</div>
			  		<h4>Best in class accuracy and easily interpretable reporting</h4>
			  	</div>
			  	<div class="leftCont">
			  		<div class="leftImg">
			  			<img src="images/critical-in-india-bottom1.png" alt="career-screen-india" />
			  		</div>
			  		<h4>Detection of all known common and rare disease-causing mutations</h4>
			  	</div>
		  	</div>
	  	</div>
		<a name="T5"/>
		<div id="T5" class="diganosticsInnerContent">
			<div class="heading">
				<span class="mt-2">Superior Technology</span>
			</div>
			<div class="diganosticsInnerText superiorTech hasBtn">
				<p>The Claria Carrier Screening is based on Next-Generation Sequencing (NGS) and Multiplex Ligation Probe Amplification (MLPA) technologies. This enables you to detect disease-causing mutations in over 2000 genes which are responsible for the Autosomal Recessive and X-Linked Recessive genetic disorders.</p>
				<p>Next-Generation Sequencing is a best in class and superior technology to detect all common and rare disease-causing mutations while MLPA is used to detect deletion and duplication in specific genes ( eg. SMN, DMD, CYP21A2).</p>
				<p>Our team of experts adhere to the recommendations of the American College of Medical Genetics and Genomics (ACMG).</p>
				<h4>Next-Generation Sequencing vs. Genotyping</h4>
				<table class="tg">
					<tr>
						<th class="tg-373e"></th>
						<th class="tg-ejid">Genotyping</th>
						<th class="tg-ejid">NGS</th>
					</tr>
					<tr>
						<td class="tg-7lto">Usage</td>
						<td class="tg-kwqk">Used by many companies for routine carrier screening</td>
						<td class="tg-kwqk">Used by a few providers to comprehensively evaluate the gene</td>
					</tr>
					<tr>
						<td class="tg-euh3">Mutation detection</td>
						<td class="tg-do35">Tests for a limited set of common mutations</td>
						<td class="tg-do35">Tests for 5 to 10 times more pathogenic mutations, and detects all common and rare disease-causing mutations</td>
					</tr>
					<tr>
						<td class="tg-7lto">Accuracy</td>
						<td class="tg-kwqk">Provides limited utility beyond Caucasian and Jewish ethnicities</td>
						<td class="tg-7df3">Delivers high accuracy across ethnicities</td>
					</tr>
					<tr>
						<td class="tg-euh3">Detection of new pathogenic mutations</td>
						<td class="tg-do35">Fails</td>
						<td class="tg-do35">Enables the discovery of rare and novel mutations in a pan-ethnic population</td>
					</tr>
					<tr>
						<td class="tg-srvq"></td>
						<td class="tg-ua64">Fails</td>
						<td class="tg-ua64">Low residual risk, regardless of ethnicity </td>
					</tr>
				</table>
				<div class="superiorFeat">
					<div class="featureBlock">
						<div class="topDiv">
							<img src="images/superior-img1.png" alt="superior-img"/>
							<h2>Diseases Covered</h2>
						</div>
						<div class="middleDiv">
							<p>Over 1300 recessive disorders. These disorders include those not commonly offered by other tests, such as Spinal Muscular Atrophy, Duchenne Muscular Dystrophy &amp; Thalassemia, among others.</p>
						</div>

					</div>
					<div class="featureBlock">
						<div class="topDiv">
							<img src="images/superior-img2.png" alt="superior-img" />
							<h2>Who should get screened? </h2>
						</div>
						<div class="middleDiv">
							<p>Couples planning on starting a family. Screening is strongly recommended in some cases </p>
						</div>
					</div>
					<div class="featureBlock">
						<div class="topDiv">
							<img src="images/superior-img3.png" alt="superior-img" />
							<h2>Screening Options</h2>
						</div>
						<div class="middleDiv">
							<p>With three screening options available,  offer your patients the one that’s best suited for them</p>
						</div>
					</div>
					<div class="featureBlock">
						<div class="topDiv">
							<img src="images/superior-img4.png" alt="superior-img" />
							<h2>Free Genetic Counselling Service</h2>
						</div>
						<div class="middleDiv">
							<p>Claria offers Genetic counselling services to all your patients absolutely FREE.</p>
						</div>
					</div>
					<div class="featureBlock">
						<div class="topDiv">
							<img src="images/superior-img5.png" alt="superior-img" />
							<h2>Test Process &amp; Turnaround Time</h2>
						</div>
						<div class="middleDiv">
							<p>Results sent to physician in 4-6 weeks.</p>
						</div>
					</div>
				</div>

				<div class="superiorFeatCont">
					<!--<a href="javascript:;" class="closeFeature">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve">
							<g>
								<path d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
								c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
								l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
								c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
							</g>
						</svg>
					</a>-->
					<h2>The Test Process</h2>
					<div class="featureBlockCont">
						<div class="topDiv">
							<img src="images/superior-cont-img1.png" alt="superior-img" />
							<p>1.</p>
						</div>
						<div class="middleDiv">
							<h4>TRF</h4>
							<p>Physician orders the test.</p>
						</div>
					</div>
					<div class="featureBlockCont">
						<div class="topDiv">
							<img src="images/superior-cont-img2.png" alt="superior-img" />
							<p>2.</p>
						</div>
						<div class="middleDiv">
							<h4>Sample</h4>
							<p>Samples are shipped to MedGenome and analyzed.</p>
						</div>
					</div>
					<div class="featureBlockCont">
						<div class="topDiv">
							<img src="images/superior-cont-img3.png" alt="superior-img" />
							<p>3.</p>
						</div>
						<div class="middleDiv">
							<h4>Testing</h4>
							<p>Results sent to physician in 4-6 weeks.</p>
						</div>
					</div>
					<div class="featureBlockCont">
						<div class="topDiv">
							<img src="images/superior-cont-img4.png" alt="superior-img" />
							<p>4.</p>
						</div>
						<div class="middleDiv">
							<h4>reporting</h4>
							<p>Our genetic counsellor answer questions and provide additional resources.</p>
						</div>
					</div>
					<div class="featureBlockCont">
						<div class="topDiv">
							<img src="images/superior-cont-img5.png" alt="superior-img" />
							<p>5.</p>
						</div>
						<div class="middleDiv">
							<h4>Counselling</h4>
							<p>Free pre-test and post-test counselling.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!--<a name="micro"></a>-->
		<a name="T6"/>
		<div id="T6" class="diganosticsInnerContent">
			<div class="heading">
				<span class="mt-2">Claria NIPT now screens for microdeletions</span>
			</div>
			<div class="diganosticsInnerText">
				<p>Preimplantation Genetic Screening (PGS) is a test that examines the chromosomal material of an IVF embryo  before implanation. It involves removing one or more cells from an IVF embryo to test for chromosome number and check for any numerical chromosomal abnormalities (Aneuploidy). This screening method facilitates the selective implantation of embryos that have the normal number of chromosomes (Euploid Embryos).</p>
			</div>
		</div>
		<!--<a name="about"></a>-->
		<a name="T7"/>
	  	<div id="T7" class="diganosticsInnerContent">
	  		<div class="heading">
				<span class="mt-2">About Recessive Disorders</span>
	  		</div>
	  		<div class="diganosticsInnerText">
		  		<img src="images/autosomal1.png" alt="autosomal" />
		  		<img src="images/x-linked.png" alt="autosomal" />
		  	</div>
	  	</div>
		<!--<a name="form"></a>-->
		<a name="T8"/>

		<p id="anchor1">
	  	<div id="T8" class="diganosticsInnerContent">
	  		<div class="heading">
				<span class="mt-2">Questions Answered</span>
	  		</div>
	  		<div class="diganosticsInnerText bgcont">
	  			<div class="listingTogether">
	  				<h3>What are some of the most Common Genetic Disorders in India ?</h3>
		  			<ul>
		  				<li>Autosomal Recessive Disorders</li>
		  				<li>Beta Thalassemia</li>
						<li>Sickle Cell Anaemia</li>
						<li>Cystic Fibrosis</li>
						<li>Congenital Adrenal Hyperplasia</li>
						<li>Spinal Muscular Atrophy</li>
		  			</ul>
		  			<ul>
		  				<li>X-linked Recessive Disorders</li>
		  				<li>Duchenne Muscular Dystrophy</li>
						<li>Haemophilia A/B</li>
						<li>Hunter Syndrome</li>
						<li>G6PD Deficiency</li>
						<li>X-Linked Mental Retardation</li>
		  			</ul>
		  		</div>

	  	</div>

	  	<?php //require 'includes/videos.php';?>
  	</div>

		<?php require 'includes/actia-prima-tab.php';?>

  	</div>
</div>

<div class="bestInClass giagnosticsPage">
	<div class="serviceFormDiv outerWrapper diagnostic">
		<div class="wrapper">
			<h1>Talk with one of our Genetic experts for free today</h1>
			<h2>Our certified, genetic specialists are available right now to discuss your queries before, during and after screenings.
			</h2>
		</div>
		<?php require 'includes/contact-form.php';?>
	</div>
</div>
<?php require 'includes/footer-contact.php';?>
<script>

	/*$(document).ready(function(){

		$( "a.scrollLink" ).click(function( event ) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
		});
	});*/

	function scrollToAnchor(aid){
		var aTag = $("a[name='"+ aid +"']");
		$('html,body').animate({scrollTop: aTag.offset().top},'slow');
	}

	$(".diganosticsInnerContent").click(function() { //alert("Current ID: "+this.id)
		//scrollToAnchor('id3');
		//console.log(this.id);
		scrollToAnchor(this.id);
	});
	/*$(".diganosticsInnerContent").on("click", function() { //alert("test: "+$(window).width());
		//alert("test: "+$(window).height());
		//$("body").scrollTop(0);
		var divId = ["T1","T2","T3","T4","T5","T6","T7","T8"];
		var topSizeXs = ["750","798","910","990","1070","1140","1210","1290"];
		var topSizeMd = ["700","798","910","990","1070","1140","1210","1290"];
		var topSizeLg = ["550","600","650","700","750","800","850","900"];
		if($(window).width() <= 480 ){ //alert("<=480")
			for (i = 0; i < 8; i++) { //alert("Window Top: "+topSizeXs[i])
				if (this.id == divId[i]) $(window).scrollTop(topSizeXs[i]);
			}
		}/!*else if($(window).width() > 480 && $(window).width()<=768 ){ //alert("<=1024")
			for (i = 0; i < 8; i++) { //alert("Window Top: "+topSizeXs[i])
				if (this.id == divId[i]) $(window).scrollTop(topSizeMd[i]);
			}
		} else {
			for (i = 0; i < 8; i++) {
				if (this.id == divId[i]) $(window).scrollTop(topSizeLg[i]);
			}
		}*!/
		/!*if(this.id == 'T1') $(window).scrollTop(550);
		else if(this.id == 'T2')$(window).scrollTop(600);
		else if(this.id == 'T3')$(window).scrollTop(650);
		else if(this.id == 'T3')$(window).scrollTop(650);
		else if(this.id == 'T3')$(window).scrollTop(650);
		else if(this.id == 'T3')$(window).scrollTop(650);
		else if(this.id == 'T3')$(window).scrollTop(650);
		else if(this.id == 'T3')$(window).scrollTop(650);*!/
	});

	/!*$("#T2").on("click", function() { //alert("test")
		//$("body").scrollTop(0);
		$(window).scrollTop(550);
	});*!/*/
</script>
</body>
</html>