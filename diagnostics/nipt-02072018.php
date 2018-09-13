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
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap4.min.css">
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/responsive.css"/>
<link rel="stylesheet" href="css/font-awesome.css"/>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/custom.js"></script>
</head>
<body>

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
			<p>Non-invasive prenatal test</p>
			<span>Provide the best clarity and reassurance to your patients.</span>
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
			<p class="claria-nipt-text">Non-invasive prenatal test</p>
			<div class="claria-sub-text">Provide the best clarity and reassurance to your patients.</div>
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
			<a href="carrier.php">CARRIER</a>
			<a href="nipt.php" class="active">NIPT (With Microdeletions)</a>
			<a href="pgs-pgd.php">PGS + PGD</a>
	  	</div>
		<a name="T1"/>
	  	<div id="T1" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Claria From MedGenome</span>
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
		<a name="T2"/>
	  	<div id="T2" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Claria NIPT</span>
	  		</div>
	  		<div class="diganosticsInnerText">
		  		<p>MedGenome Claria NIPT is a simple, safe and non-invasive prenatal screening test that provides assurance to expectant parents with accurate genetic information about their baby. This screening test can be performed from as early as the 9th week of a pregnancy. Compared to first trimester screening, Claria NIPT screens for more chromosomal abnormalities, has a higher sensitivity and lower false positive rate for the conditions screened.
		  		</p>
	  		</div>
	  	</div>
		<a name="T3"/>
	  	<div id="T3" class="diganosticsInnerContent clariaVideo">
	  		<div class="heading">
	  			<span>Overview of Claria Non-Invasive Parental Test</span>
	  		</div>
	  		<div class="row diganosticsInnerText">
				<div class="col-md-12 col-lg-7">
					<img class="img-fluid" src="images/claria-blue.png" alt="claria" style="width: auto;" /><br><br>
					<h2>Watch video and learn more about the Claria Career Screening</h2>
				</div>
				<div class="col-md-12 col-lg-5">
					<div class="videoPadding embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/P-KDIfjT2E4"></iframe>
					</div>
				</div>
	  			<!--<div class="leftCont">
		  			<img src="images/claria-blue.png" alt="claria" />
		  			<h2>Watch video and learn more about the Claria Non-invasive parental test</h2>
		  		</div>
		  		<div class="rightCont">
		  			<div class="singleVideo">
						<div class="videoImage">
							<img src="images/claria-single-nipt-video.jpg" alt="videos"/>
							<iframe width="530" height="315"
									src="https://www.youtube.com/embed/P-KDIfjT2E4">
							</iframe>
						</div>
					</div>
		  		</div>-->
		  	</div>
	  	</div>
		<a name="T4"/>
	  	<div id="T4" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Claria NIPT now screens for microdeletions</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<p>Claria NIPT now covers clinically relevant microdeletions that occur in 1-1.7% of all structurally normal pregnancies. In younger women, the risk for a clinically significant deletion exceeds the risk for Down syndrome. These sub-chromosomal abnormalities which collectively have a population incidence of approximately 1 in 1000 will result in severe physicaland /or intellectual impairments.</p>			 
		  	</div>
	  	</div>
		<a name="T5"/>
	  	<div id="T5" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Chromosomal abnormalities in India</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<div class="individualDiv noAfter paddingTopLow">
		  			<ul class="regularListing">
		  				<li>High prevalence of chromosomal abnormalities: 1 in 200 births</li>
		  				<li>Over 25 million births every year in India</li>
		  				<li>Over 130,000 births with chromosomal abnormalities in India every year</li>
		  				<li>Incidence of Down Syndrome is 1 in 850 live births in India</li>
		  				<li>1 in 1000 is the population incidence for microdeletions, the disorders included are 22q11.2 deletion syndrome, 1p36 deletion syndrome, Cri du chat syndrome, Prader-Willi syndrome, Angelman syndrome*</li>
		  			</ul>
	  			</div>
	  			<p>A woman’s risk of having a term pregnancy with certain chromosomal abnormalities increases with age.</p>
	  			<p class="light">* Combined prevalence using higher end of published ranges from Gross et al. Prenatal Diagnosis 2011; 39, 259-266; and www.genetests.org. Total prevalence may range from 1/1071 - 1/2206.</p>
		  	</div>
	  	</div>
		<a name="T6"/>
	  	<div id="T6" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>The risk of having a baby with Down Syndrome*</span>
	  		</div>
	  		<div class="diganosticsInnerText riskHavingBaby">
		  		<div class="riskFactor">
		  			<div class="firstDiv">
		  				<p>1 in 1300</p>
		  				<span>For a 26 yr old woman</span>
		  			</div>
		  			<div class="secondDiv">
		  				<p>1 in 270</p>
		  				<span>For a 36 yr old woman</span>
		  			</div>
		  			<div class="thirdDiv">
		  				<p>The risk factor increases by almost <span>5x</span></p>
		  			</div>
		  		</div>
		  		<img src="images/graph-nipt.jpg" alt="graph" />
		  		<div class="individualDiv noAfter">
			  		<p class="light">* Morris JK1, Wald NJ, Mutton DE, Alberman E. Comparison of models of maternal age-specific risk for Down syndrome live births. Prenat Diagn. 2003 Mar;23(3):252-8.</p>
					<p class="light"> <sup>1</sup> Snijders, et al. Ultrasound Obstet Gynecol 1999; 13: 167-170.</p>
					<p class="light"><sup>2</sup> Combined prevalence using higher end of published ranges from Gross et al. Prenatal Diagnosis  2011; 39, 259-266;</p>
					<p class="light">and www.genetests.org. Total prevalence may range from 1/1071 - 1/2206.</p>
				</div>
		  	</div>
	  	</div>
		<a name="T7"/>
	  	<div id="T7" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>What are the chromosomal and structural anomalies detected by Claria NIPT?</span>
	  		</div>
	  		<div class="diganosticsInnerText structuralAnomalies">
				<div class="row">
					<div class="col">
						<p>Common aneuploidies T21, T18, T13, Sex Chromosomes abnormalities, triploidy and 5 common microdeletion syndromes from fetal DNA obtained from maternal blood.</p>
					</div>
				</div>

				<div class="row text-center chromosomal">
					<!-- first column -->
					<div class="col-main col-md-5 col-lg ml-3 mr-4 mb-2 pb-5 mt-3 col-sm-5">
						<div class="col-top">
							<div class="row top p-4">
								<div class="col-lg">
									<div class="image-border"><img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/aneuploidy.png" alt="superior-img"></div>
								</div>
							</div>
							<div class="row top text-white font-weight-bold pt-0">
								<h4 class="mt-2 mb-4">ANEUPLOIDY</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm col-md-12 col-lg-12">
								<ul>
									<li class="col-lg">Autosomal Recessive Disorders</li>
									<li class="col-lg">Beta Thalassemia</li>
									<li class="col-lg">Sickle Cell Anaemia</li>
									<li class="col-lg">Cystic Fibrosis</li>
									<li class="col-lg">Congenital Adrenal Hyperplasia</li>
									<li class="col-lg">Spinal Muscular Atrophy</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- second column -->
					<div class="col-main col-md-5 col-lg ml-3 mr-4 mb-2 pb-5 mt-3 col-sm-5">
						<div class="row top p-4">
							<div class="col-lg">
								<div class="image-border"><img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/microdeletions.png" alt="superior-img"></div>
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<h4 class="mt-2 mb-4">MICRODELETIONS</h4>
						</div>
						<div class="row">
							<div class="col-sm col-md-12 col-lg-12">
								<ul>
									<li>22q11.2 Deletion Syndrome</li>
									<li>1p36 Deletion Syndrome</li>
									<li>Prader-Willi Syndrome</li>
									<li>Angelman Syndrome</li>
									<li>Cri-du-chat Syndrome</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

	  			<!--<div class="syndromeBlock">
	  				<div class="syndromeInnerBlock">
	  					<div class="imgBlock">
		  					<img src="images/aneuploidy.png" alt="aneuploidy" />	  					
	  					</div>
	  					<h4>Aneuploidy</h4>
	  					<div class="individualDiv noAfter paddingTopLow">
		  					<ul class="regularListing center">
		  						<li>Trisomy 21 (Down Syndrome)</li>
								<li>Trisomy 18 (Edwards’ Syndrome)</li>
								<li>Trisomy 13 (Patau syndrome)</li>
								<li>Triploidy</li>
								<li>Monosomy X (Turner Syndrome)</li>
								<li>Klinefelter Syndrome, Triple X Syndrome, Jacob’s Syndrome</li>
		  					</ul>
	  					</div>
	  				</div>
	  				<div class="syndromeInnerBlock">
	  					<div class="imgBlock">
		  					<img src="images/microdeletions.png" alt="microdeletions" />	  			
	  					</div>
	  					<h4>Microdeletions</h4>	
  						<div class="individualDiv noAfter paddingTopLow">
		  					<ul class="regularListing center">
		  						<li>22q11.2 Deletion Syndrome</li>
								<li>1p36 Deletion Syndrome</li>
								<li>Prader-Willi Syndrome</li>
								<li>Angelman Syndrome</li>
								<li>Cri-du-chat Syndrome</li>
		  					</ul>
		  				</div>
	  				</div>
	  			</div>-->
	  			<p>Unlike other tests, Claria NIPT also tests for triploidy and vanishing twin. It is the only  test that differentiates between maternal and fetal DNA, which helps avoid false positives.</p>
				<p>Claria NIPT does not test for the gender of the foetus. MedGenome is a PC &amp; PNDT certified company.</p>
				<div class="individualDiv noAfter whyScreen">
					<h4>Why screening is important</h4>
					<div class="whyScreenBlock">
						<div class="imgBlock">
							<img src="images/reasurance-icon.png" alt="reasurance" />
						</div>
						<p>Reassurance for expecting parents</p>
					</div>
					<div class="whyScreenBlock">
						<div class="imgBlock">
							<img src="images/better-management.png" alt="reasurance" />
						</div>
						<p>Early information for better management</p>
					</div>
					<div class="whyScreenBlock">
						<div class="imgBlock">
							<img src="images/prepration.png" alt="reasurance" />
						</div>
						<p>Preparation for the birth and early intervention wherever possible</p>
					</div>
				</div>
	  		</div>
	  	</div>
		<a name="T8"/>
	  	<div id="T8" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Who is Claria NIPT for?</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<p>All pregnant women who need insight into their baby’s development can avail the test, regardless of their age. Claria NIPT is recommended for all pregnancies.</p>
	  			<p>Medical societies today support the use of NIPT as the first line of screening for all pregnancies, irrespective of the risk. For physicians, it is important to recommend this test for pregnancies where</p>
	  			<div class="individualDiv noAfter paddingTopLow">
		  			<ul class="regularListing">
		  				<li>The woman is above 30 years of age</li>
		  				<li>An abnormal ultrasound report</li>
		  				<li>Couples with a family history of chromosomal conditions or birth defects</li>
		  				<li>Couples who have had a child with a chromosomal disorder</li>
		  				<li>Couples with a history of infertility or pregnancy loss (miscarriages or stillbirths)</li>
		  			</ul>
	  			</div>
		  	</div>
	  	</div>
		<a name="T9"/>
	  	<div id="T9" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Traditional screening test vs. Claria NIPT</span>
	  		</div>
	  		<div class="diganosticsInnerText table-responsive">
				<table class="tg2">
				  <tr>
				    <th class="tg-jd3z">Traditional screening test</th>
				    <th class="tg-doj6">Claria NIPT</th>
				  </tr>
				  <tr>
				    <td class="tg-ahsb">Test accuracy: 75-90%</td>
				    <td class="tg-ak5x">Test accuracy: >99.9%</td>
				  </tr>
				  <tr>
				    <td class="tg-ahsb">False positives: 5%</td>
				    <td class="tg-ak5x">False positives: &lt; 0.1%</td>
				  </tr>
				  <tr>
				    <td class="tg-ahsb">Affected, undetected cases: 10-15% </td>
				    <td class="tg-ak5x">Affected, undetected cases: &lt; 0.1%</td>
				  </tr>
				  <tr>
				    <td class="tg-ahsb">Can only be done from the 11th week onwards and within certain gestational time frames</td>
				    <td class="tg-ak5x">Can be done from as  early as the 9th week of pregnancy</td>
				  </tr>
				</table>
		  	</div>
	  	</div>
		<a name="T10"/>
	  	<div id="T10" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Claria NIPT in 5 simple steps</span>
	  		</div>
	  		<div class="diganosticsInnerText five-simple-steps pl-4">
				<!-- 1 -->
				<!--<div class="col-lg">
					<div class="row pt-3">
						<div class="col-sm-1 col-md-1 col-lg-1"><div class="number">1.</div></div>
						<div class="col-sm-11 col-md-11 col-lg-11">Ask about Claria NIPT</div>
					</div>

					<div class="row">
						<div class="col-lg-12 text-justify">
							<p>To book the test, dial 1800 -1037590 or visit www.medgenomeclaria.com and we will help you locate the sample collection centre closest to your patient.</p>
						</div>
					</div>
				</div>-->
				<!-- 2 -->
				<!--<div class="col-lg">
					<div class="row pt-3 mt-3 border-top">
						<div class="col-sm-1 col-md-1 col-lg-1"><div class="number">2.</div></div>
						<div class="col-sm-11 col-md-11 col-lg-11">Quick and simple blood draw</div>
					</div>

					<div class="row">
						<div class="col-lg-12 text-justify">
							<p>A small sample of blood is drawn from the mother’s arm. This is a non-invasive procedure and poses no risk to the baby.</p>
						</div>
					</div>
				</div>-->
				<!-- 3 -->
				<!--<div class="col-lg">
					<div class="row pt-3 mt-3 border-top">
						<div class="col-sm-1 col-md-1 col-lg-1"><div class="number">3.</div></div>
						<div class="col-sm-11 col-md-11 col-lg-11">Receive your personalized report</div>
					</div>

					<div class="row">
						<div class="col-lg-12 text-justify">
							<p>The entire testing process is carried out in India. This enables us to analyze your sample accurately,
								and deliver the personalized report to you . We are the only lab to process NIPT samples in India,
								enabling for accurate and faster reporting at the earliest.</p>
						</div>
					</div>
				</div>-->
				<!-- 4 -->
				<!--<div class="col-lg">
					<div class="row pt-3 mt-3 border-top">
						<div class="col-sm-1 col-md-1 col-lg-1"><div class="number">4.</div></div>
						<div class="col-sm-11 col-md-11 col-lg-11">Review the test results</div>
					</div>

					<div class="row">
						<div class="col-lg-12 text-justify">
							<p>Our Genetic Counsellor and Scientists will help you understand the detailed report and guide you accordingly.</p>
						</div>
					</div>
				</div>-->
				<!-- 5 -->
				<!--<div class="col-lg">
					<div class="row pt-3 mt-3 border-top">
						<div class="col-sm-1 col-md-1 col-lg-1"><div class="number">5.</div></div>
						<div class="col-sm-11 col-md-11 col-lg-11">Get in touch with us for counselling</div>
					</div>

					<div class="row">
						<div class="col-lg-12 text-justify">
							<p>Your patients can call our toll-free number and fix an appointment to get a free counselling session with one of our genetic counselling experts.</p>
						</div>
					</div>
				</div>-->
				<ul class="stepList">
					<li>
						<span>1.</span>
						<h4>Ask about Claria NIPT</h4>
						<p>To book the test, dial 1800 -1037590 or visit www.medgenomeclaria.com and we will help you locate the sample collection centre closest to your patient.</p>
					</li>
					<li>
						<span>2.</span>
						<h4>Quick and simple blood draw</h4>
						<p>A small sample of blood is drawn from the mother’s arm. This is a non-invasive procedure and poses no risk to the baby.</p>
					</li>
					<li>
						<span>3.</span>
						<h4>Receive your personalized report</h4>
						<p>The entire testing process is carried out in India. This enables us to analyze your sample accurately, and deliver the personalized report to you . We are the only lab to process NIPT samples in India, enabling for accurate and faster reporting at the earliest.</p>
					</li>
					<li>
						<span>4.</span>
						<h4>Review the test results</h4>
						<p>Our Genetic Counsellor and Scientists will help you understand the detailed report and guide you accordingly.</p>
					</li>
					<li>
						<span>5.</span>
						<h4>Get in touch with us for counselling</h4>
						<p>Your patients can call our toll-free number and fix an appointment to get a free counselling session with one of our genetic counselling experts.</p>
					</li>
				</ul>
		  	</div>
	  	</div>
		<a name="T11"/>
	  	<div id="T11" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>The Claria NIPT advantage for your patients</span>
	  		</div>
	  		<div class="diganosticsInnerText ">
				<!--<div class="row advantage">
					<div class="col-lg-12">
						<h5 class="my-3">The CLARIA NIPT ADVANTAGE for your patients:</h5>
						<ul>
							<li class="my-3">Over 99.9% accuracy</li>
							<li class="my-3">Can be screened from as early as 9th week of a pregnancy</li>
							<li class="my-3">A simple, and safe blood draw from mothers arm, posing no risk to the foetus</li>
							<li class="my-3">The only SNP technology based NIPT in India</li>
							<li class="my-3">Reports foetal fraction in each case</li>
							<li class="my-3">FREE Pre & Post test genetic counseling for all patients</li>
							<li class="my-3">The only lab to process NIPT samples in India, enabling for accurate and faster reporting.</li>
						</ul>
					</div>
				</div>-->
				<!--<div class="row">
					<div class="col-lg-6 contact">
						<div class="row">
							<div class="col-md-1 col-lg-2 dial-img-div">
								<img src="./images/phone-icon.png" class="mx-auto d-block float-none">
							</div>
							<div class="col-md-11 col-lg-10 font-weight-bold dial-text text-sm-center text-md-left">Dial 1800 103 3691</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-1 col-lg-2 sms-img-div">
								<img src="./images/mail-icon.png" class="mx-auto d-block float-none">
							</div>
							<div class="col-md-11 col-lg-10 font-weight-bold dial-text text-sm-center text-md-left">diagnostics@medgenome.com</div>
						</div>
					</div>
					<div class="col-lg-6">
						<p class="text-primary text-justify">Our representative will get in touch with you within 24 hours to help you with the registration.
							You can start prescribing the test right away and help your patients gain clarity about their genetic health.</p>
					</div>
				</div>-->

				<div class="row mt-4">
					<div class="col-lg-12">
						<div class="individualDiv">
							<h5>The CLARIA NIPT ADVANTAGE for your patients:</h5>
							<ul class="regularListing">
								<li>Over 99.9% accuracy</li>
								<li>Can be screened from as early as 9th week of a pregnancy</li>
								<li>A simple, and safe blood draw from mothers arm, posing no risk to the foetus</li>
								<li>The only SNP technology based NIPT in India</li>
								<li>Reports foetal fraction in each case</li>
								<li>FREE Pre & Post test genetic counseling for all patients</li>
								<li>The only lab to process NIPT samples in India, enabling for accurate and faster reporting.</li>
							</ul>
						</div>
					</div>
				</div>
		  		<?php require 'includes/sms-email.php';?>
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
<script src="js/nipt-scroll.js"></script>
</body>
</html>