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
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aKvur5hdz_M"></iframe>
					</div>
				</div>
		  	</div>
	  	</div>
		<!--<a name="carrier"></a>-->
		<a name="T4"/>
	  	<div id="T4" class="diganosticsInnerContent">
	  		<div class="heading">
				<span class="mt-2">Carrier Screening is Critical in India</span>
	  		</div>
	  		<div class="diganosticsInnerText carrierInIndia px-2">
				<div class="row text-center">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-2 mr-lg-5 col-md-3 col-sm-3 col-6">
								<div class="card blockList">
									<div class="topIcon"><img class="img-fluid" src="images/career-screen-india1.png" alt="career-screen-india" /></div>
									<div class="text-center">
										<p>Over</p>
										<h2>50 Million</h2>
										<h4>People with single gene disorder</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-2 mr-lg-5 col-md-3 col-sm-3 col-6">
								<div class="card blockList">
									<div class="topIcon"><img class="img-fluid" src="images/career-screen-india2.png" alt="career-screen-india" /></div>
									<div class="text-center">
										<p>Over</p>
										<h2>1 Million</h2>
										<h4>Babies born with genetic disorders each year</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-2 mr-lg-5 col-md-3 col-sm-3 col-6">
								<div class="card blockList">
									<div class="topIcon"><img class="img-fluid" src="images/career-screen-india3.png" alt="career-screen-india" /></div>
									<div class="text-center">
										<p>Over</p>
										<h2>20% to 30%</h2>
										<h4>Of all deaths are due to genetic disorders</h4>
									</div>
								</div>
							</div>

							<div class="col-lg-2 col-md-3 col-sm-3 col-6">
								<div class="card blockList">
									<div class="topIcon"><img class="img-fluid" src="images/career-screen-india4.png" alt="career-screen-india" /></div>
									<div class="text-center">
										<p>Over</p>
										<h2>1 in 100</h2>
										<h4>Babies born with an genetic disorder</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-2"></div>
						</div>
					</div>
				</div>
				<div class="row mx-1">
					<div class="col"><h3>CLARIA CARRIER SCREENING helps SCREEN FOR GENETIC VARIATIONS, AND DISEASES THAT ARE VERY SPECIFIC TO INDIAN POPULATION.</h3></div>
				</div>
				<div class="row mx-1">
					<div class="col">
						<p>The unique ‘Claria Carrier screening Test’ is based on the Next Generation Sequencing (NGS) technology and leverages the Indian
							population genetic variant database created by Sir Ganga Ram Hospital over the last twenty years. Therefore enabling MedGenome
							to develop a highly focussed and cost effective test to screen for diseases and genetic variations that are very specific to
							Indian population. The Claria Carrier Screening provides you with : </p>
					</div>
				</div>
				<div class="row mx-1">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-6 second-row-images"><img class="img-fluid col-lg-12 mt-4 background-circle" src="images/critical-in-india-bottom.png" alt="career-screen-india" /></div>
							<div class="col-lg-8 col-md-8 col-sm-8"><h4 class="text-primary">Best in class accuracy and easily interpretable reporting</h4></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-6 second-row-images"><img class="img-fluid col-lg-12 mt-4 background-circle" src="images/critical-in-india-bottom1.png" alt="career-screen-india" /></div>
							<div class="col-lg-8 col-md-8 col-sm-8"><h4 class="text-primary">Detection of all known common and rare disease-causing mutations</h4></div>
						</div>
					</div>
				</div>
		  	</div>
	  	</div>
		<a name="T5"/>
		<div id="T5" class="diganosticsInnerContent">
			<div class="heading">
				<span class="mt-2">Superior Technology</span>
			</div>
			<div class="diganosticsInnerText superiorTech hasBtn">
				<div class="row">
				<p>The Claria Carrier Screening is based on Next-Generation Sequencing (NGS) and Multiplex Ligation Probe Amplification (MLPA) technologies. This enables you to detect disease-causing mutations in over 2000 genes which are responsible for the Autosomal Recessive and X-Linked Recessive genetic disorders.</p>
				<p>Next-Generation Sequencing is a best in class and superior technology to detect all common and rare disease-causing mutations while MLPA is used to detect deletion and duplication in specific genes ( eg. SMN, DMD, CYP21A2).</p>
				<p>Our team of experts adhere to the recommendations of the American College of Medical Genetics and Genomics (ACMG).</p>
				<h4>Next-Generation Sequencing vs. Genotyping</h4>
</div>
				<!-- Table for mobile view -->
				<div class="row border border-info text-center d-block d-sm-none">
					<div class="col-12 col-lg-3">
						<div class="row">
							<div class="col bg-info text-white font-weight-bold p-2">Usage</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">Genotyping</div>
						</div>
						<div class="row border-bottom">
							<div class="col small">Used by many companies for routine carrier screening</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">NGS</div>
						</div>
						<div class="row">
							<div class="col small">Used by a few providers to comprehensively evaluate the gene</div>
						</div>
					</div>
				</div>

				<div class="row border border-info text-center d-block d-sm-none">
					<div class="col-12 col-lg-3">
						<div class="row">
							<div class="col bg-info text-white font-weight-bold p-2">Mutation detection</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">Genotyping</div>
						</div>
						<div class="row border-bottom">
							<div class="col small">Tests for a limited set of common mutations</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">NGS</div>
						</div>
						<div class="row">
							<div class="col small">Tests for 5 to 10 times more pathogenic mutations, and detects all common and rare disease-causing mutations</div>
						</div>
					</div>
				</div>

				<div class="row border border-info text-center d-block d-sm-none">
					<div class="col-12 col-lg-3">
						<div class="row">
							<div class="col bg-info text-white font-weight-bold p-2">Accuracy</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">Genotyping</div>
						</div>
						<div class="row border-bottom">
							<div class="col small">Provides limited utility beyond Caucasian and Jewish ethnicities</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">NGS</div>
						</div>
						<div class="row">
							<div class="col small">Delivers high accuracy across ethnicities</div>
						</div>
					</div>
				</div>

				<div class="row border border-info text-center d-block d-sm-none">
					<div class="col-12 col-lg-3">
						<div class="row">
							<div class="col bg-info text-white font-weight-bold p-2">Detection of new pathogenic mutations</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">Genotyping</div>
						</div>
						<div class="row border-bottom">
							<div class="col small">Fails</div>
						</div>
						<div class="row border-bottom">
							<div class="col small">Fails</div>
						</div>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row border-bottom">
							<div class="col text-info">NGS</div>
						</div>
						<div class="row">
							<div class="col small">Enables the discovery of rare and novel mutations in a pan-ethnic population</div>
						</div>
						<div class="row">
							<div class="col small">Low residual risk, regardless of ethnicity</div>
						</div>
					</div>
				</div>
				<!-- End for mobile view -->

				<div class="table-responsive d-none d-sm-block">
					<table class="tg table">
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
				</div>

				<!-- 5 column -->
				<div class="row text-center fivecolumn mt-4">
					<!-- first column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="col-top">
							<div class="row top">
								<div class="col-lg">
									<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-img1.png" alt="superior-img">
								</div>
							</div>
							<div class="row top text-white font-weight-bold pt-0">
								<div class="col-lg lead font-weight-bold">Diseases Covered</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Over 1300 recessive disorders. These disorders include those not commonly offered by other tests,
											such as Spinal Muscular Atrophy, Duchenne Muscular Dystrophy &amp; Thalassemia, among others.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- second column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-img2.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold">Who should get screened?</div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Over 1300 recessive disorders. These disorders include those not commonly offered by other tests.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- third column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-img3.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold">Screening Options</div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>With three screening options available, offer your patients the one that’s best suited for them</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- fourth column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-img4.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold">Free Genetic Counselling Service</div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Claria offers Genetic counselling services to all your patients absolutely FREE.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- fifth column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-img5.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold">Test Process & Turnaround Time</div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Results sent to physician in 4-6 weeks.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Process -->
				<div id="process" class="row text-center mt-4">
					<h3 class="py-4 text-primary font-weight-normal">THE TEST PROCESS</h3>
					<!-- first column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="col-top">
							<div class="row top">
								<div class="col-lg main-image">
									<div class="process-number">1.</div>
									<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-cont-img1.png" alt="superior-img">
								</div>
							</div>
							<div class="row top text-white font-weight-bold pt-0">
								<div class="col-lg lead font-weight-bold mb-0"><h4 class="mt-3 mb-0">TRF</h4></div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Physician orders the test.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- second column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<div class="process-number">2.</div>
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-cont-img2.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold"><h4 class="mt-3 mb-0">SAMPLE</h4></div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Samples are shipped to MedGenome and analyzed.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- third column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<div class="process-number">3.</div>
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-cont-img3.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold"><h4 class="mt-3 mb-0">TESTING</h4></div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Results sent to physician in 4-6 weeks.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- fourth column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<div class="process-number">4.</div>
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-cont-img4.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold"><h4 class="mt-3 mb-0">REPORTING</h4></div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Our genetic counsellor answer questions and provide additional resources.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- fifth column -->
					<div class="col-main col-lg ml-2 mb-2">
						<div class="row top">
							<div class="col-lg">
								<div class="process-number">5.</div>
								<img class="mx-auto d-block float-none w-auto bg-white rounded-circle" src="images/superior-cont-img5.png" alt="superior-img">
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<div class="col-lg lead font-weight-bold"><h4 class="mt-3 mb-0">COUNSELLING</h4></div>
						</div>
						<div class="row">
							<div class="col-lg">
								<div class="row bottom">
									<div class="col-lg">
										<p>Free pre-test and post-test counselling.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="superiorFeatCont">
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
				</div>-->
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
	  		<!--<div class="diganosticsInnerText bgcont">
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
	  		</div>-->
				<div id="qa" class="diganosticsInnerText row pb-3">
					<h3 class="border border-0">What are some of the most Common Genetic Disorders in India ?</h3>

						<div class="col-sm col-md-6 col-lg-6">
							<ul>
								<li class="col-lg">Autosomal Recessive Disorders</li>
								<li class="col-lg">Beta Thalassemia</li>
								<li class="col-lg">Sickle Cell Anaemia</li>
								<li class="col-lg">Cystic Fibrosis</li>
								<li class="col-lg">Congenital Adrenal Hyperplasia</li>
								<li class="col-lg">Spinal Muscular Atrophy</li>
							</ul>
						</div>
						<div class="col-sm col-md-6 col-lg-6">
							<ul>
								<li class="col-lg">X-linked Recessive Disorders</li>
								<li class="col-lg">Duchenne Muscular Dystrophy</li>
								<li class="col-lg">Haemophilia A/B</li>
								<li class="col-lg">Hunter Syndrome</li>
								<li class="col-lg">G6PD Deficiency</li>
								<li class="col-lg">X-Linked Mental Retardation</li>
							</ul>
						</div>

		<h3>What does a Carrier Mean?</h3>
		<div class="col">
			<p>
				A carrier, is a person that has inherited a recessive variant gene for a genetic trait or mutation but does not display that trait or show symptoms
				of the disease. Carriers are, however, able to pass the allele onto their offspring, who may then express the genetic if they inherit the recessive allele from
				both parents. The chance of two carriers having a child with the disease is 25%. This phenomenon is a direct result of the recessive nature of many genes.
			</p>
		</div>

		<h3>Why screen for inherited genetic conditions?</h3>
		<div class="col">
			<div class="lead font-weight-bold">Each individual harbours an average of 2.8 known severe recessive mutations.#</div>
			<p>
				Carriers are usually healthy or unaffected; but, they have a risk of passing on their genetic
				condition to their children. Traditionally, carrier
				screening has been offered to patients based on their ethnic background or family history.
				However, more than 80% of babies born with inherited genetic diseases have no known
				family history.<br>
				*# Bell CJ, et al. Carrier Testing For Severe Childhood Recessive Diseases by NGS. Sci Transl Med. 2011 Jan 12;3 (650:65ra4) <br>
				* Blythe and Farrell. Advances in the Diagnosis and Management of Cystic Fibrosis. Clinical Biochemistry. 1984
			</p>
		</div>

		<h3>Why trust the Claria Carrier Screening?</h3>
		<div class="col">
			<p class="pl-2">
				The Claria Carrier Screening detects for genetic variations, and diseases that are very specific to Indian population.The unique
				‘Claria Carrier Screening is based on the Next-Generation Sequencing (NGS) technology and leverages the Indian population genetic variant database.
			</p>
		</div>

			<ul class="col">
				<li>Best in class accuracy and easily interpretable reporting</li>
				<li>Detection of all known common and rare disease-causing mutations</li>
				<li>Free expert genetic counselling sessions with certified, multilinguistic genetic counsellors</li>
				<li>Option of three customized screening panels covering over 2000 genes associated with AR/XLR disorders</li>
				<li>State-of-the-art labs based out of India, to process all samples with immediate access to the status of the sample</li>
				<li>Higher accuracy and low residual risk, regardless of ethnicity</li>
				<li>Pan-India presence for easy sample collection</li>
				<li>Turnaround time of just 28 days for Silver and Gold panels and 42 days for Platinum panel</li>
			</ul>

		<h3>What are the benefits of Claria Carrier Screening?</h3>
		<ul class="col">
			<li>Detection of all known common and rare disease-causing mutations.</li>
			<li>Preconception carrier screening for pathogenic gene mutations and genetic counseling can reduce the incidence of disease</li>
			<li>Best in class accuracy and easily interpretable reporting.</li>
			<li>Informed decision making</li>
			<li>Three customized screening panels on NGS & MLPA covering 1300 unique conditions.</li>
			<li>Higher accuracy and low residual risk, regardless of ethnicity.</li>
			<li>Turnaround time of just 28 days*</li>
			<li>Reduce unnecessary testing</li>
			<li>Reduce genetic disorder burden</li>
		</ul>

		<div class="col-md-12 col-lg-6 contact">
			<div class="row">
				<div class="col-sm-2 col-md-2 col-lg-2 dial-img-div"><img src="images/phone-icon.png"></div>
				<div class="col-sm-10 col-md-10 col-lg-10 font-weight-bold dial-text">Dial 1800 103 3691</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-2 col-md-2 col-lg-2 dial-img-div"><img src="images/mail-icon.png"></div>
				<div class="col-sm-10 col-md-10 col-lg-10 font-weight-bold dial-text">diagnostics@medgenome.com</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-5 ml-4">
			<p class="text-primary text-justify">Our representative will get in touch with you within 24 hours to help you with the registration.
			You can start prescribing the test right away and help your patients gain clarity about their genetic health.</p>
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
<script src="js/carrier-scroll.js"></script>
</body>
</html>