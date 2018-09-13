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
			<p>preimplantation  genetic screening/diagnosis (PGS/ PGD)</p>
			<span>Maximise the success of your IVF procedures. And help transform your patients’ life.</span>
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
			<p class="claria-pgs-text">Preimplantation  Genetic Screening/Diagnosis (PGS/ PGD)</p>
			<div class="claria-sub-text">Maximise the success of your IVF procedures. And help transform your patients’ life.</div>
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
			<a href="nipt.php">NIPT (With Microdeletions)</a>
			<a href="pgs-pgd.php" class="active">PGS + PGD</a>
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

		<a name="T2"/>
		<!--<div id="T2" class="diganosticsInnerContent clariaVideo">
			<div class="heading">
				<span>Overview of Claria Preimplantation Genetic Screening</span>
			</div>
			<div class="diganosticsInnerText">
				<div class="leftCont">
					<img src="images/claria-blue.png" alt="claria" />
					<h2>Watch video and learn more about the Claria preimplantation genetic screening</h2>
				</div>
				<div class="rightCont">
					<div class="singleVideo">
						<div class="videoImage">
							<img src="images/genetic-screen-img.jpg" alt="videos"/>
						</div>
						<div class="overlayBtn"><a href="javascript:;"><span class="bg"></span>
								<span class="txt">PLAY VIDEO</span></a></div>
					</div>
				</div>
			</div>
		</div>-->

		<div id="T2" class="diganosticsInnerContent">
			<div class="heading">
				<span>Overview of Claria Preimplantation Genetic Screening</span>
			</div>
			<div class="row diganosticsInnerText">
				<div class="col-md-12 col-lg-7">
					<img class="img-fluid" src="images/claria-blue.png" alt="claria" style="width: auto;" /><br><br>
					<h2>Watch video and learn more about the Claria Career Screening</h2>
				</div>
				<div class="col-md-12 col-lg-5">
					<img class="img-fluid" src="images/genetic-screen-img.jpg" alt="claria" style="width: auto;" />
					<!--<div class="videoPadding embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/P-KDIfjT2E4"></iframe>
					</div>-->
				</div>
			</div>
		</div>
		<a name="T3"/>
	  	<div id="T3" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Why is screening an embryo before implantation critical?</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<div class="individualDiv noAfter paddingTopLow">
		  			<ul class="regularListing number">
		  				<li>One-in-two human preimplantation embryos from IVF (in vitro fertilized) are chromosomally abnormal#</li>
		  				<li>Even up to 40% of morphologically normal embryos harbour aneuploidies*</li>
		  				<li>70% pregnancy rate with PGS vs 40% without</li>
		  				<li>Reduces number of IVF cycles the patient has to undergo</li>
		  				<li>Improves the overall success rate of the IVF Center</li>
		  			</ul>
	  			</div>
	  			<p class="light"><sup>#</sup> McCoy RC. Mosaicism in Preimplantation Human Embryos: When chromosomal abnormalities are the norm. Trends Genet. 33(7): 448–463 (2017).</p>
	  			<p class="light"><sup>*</sup> Harton GL, Munne S, Surrey M, et al. Diminished effect of maternal age on implantation after preimplantation genetic diagnosis with array comparative genomic hybridization. Fertil Steril. 2013;100(6):1695–1703.</p>
		  	</div>
	  	</div>
		<a name="T4"/>
	  	<div id="T4" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Why PGS?</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<div class="individualDiv noAfter paddingTopLow">
		  			<ul class="regularListing number">
		  				<li>Leads to greater implantation rates and improved IVF outcomes</li>
						<li>Reduces the number of IVF cycles required to achieve a successful pregnancy</li>
						<li>Increases success rate for single embryo transfer</li>
						<li>Reduces the likelihood of miscarriage due to Aneuploidies</li>
						<li>Increases reproductive success rates in women above 35 years</li>
		  			</ul>
	  			</div>
		  	</div>
	  	</div>
		<a name="T5"/>
	  	<div id="T5" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>When should a biopsy be done?</span>
	  		</div>
	  		<div class="diganosticsInnerText whenBiopsy">

				<div class="row m-1 p-5 left">
					<div class="col-sm|md|lg|xl mx-auto">
						<div class="left-img"><img class="img-fluid" src="images/calender.png" alt="Calender" style="width: auto;" /></div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col">
								<div class="row">
									<div class="col">
										<p>A biopsy can be done on Day 3 (Blastomere) or Day 5 (Trophectoderm).</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="row">
									<div class="col">
										<p class="mt-3">On Day 3, a fresh embryo transfer is possible. However, on Day 5,a frozen embryo transfer is possible, which is why Day 5 biopsy is recommended.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

	  			<!--<div class="whenBiopsyDiv">
	  				<div class="imgBlock">
	  					<img src="images/calender.png" alt="calender"/>
	  				</div>
	  				<div class="whenBiopsyDivInner">
		  				<p>A biopsy can be done on Day 3 (Blastomere) or Day 5 (Trophectoderm).<br><br>
		  				On Day 3, a fresh embryo transfer is possible. However, on Day 5,a frozen embryo transfer is possible, which is why Day 5 biopsy is recommended.</p>
	  				</div>
	  			</div>-->
	  			<div class="row">
					<div class="col"><h4>Why is Day 5 biopsy preferred for PGS?</h4></div>
				</div>
				<div class="row">
					<div class="col">
		  			<ul class="regularListing number">
		  				<li>At this stage, there are sufficient number of cells from which DNA can be isolated, thus ensuring success of the test</li>
						<li>Mosaicism of Aneuploidies can be detected at this stage</li>
						<li>Vitrification (rapid-freezing) of embryos after biopsy also  allows the clinician to determine the optimum conditions for implantation</li>
		  			</ul>
					</div>
		  		</div>

				<div class="row text-center chromosomal">
					<!-- first column -->
					<div class="col-main col-md-5 col-lg ml-3 mr-4 mb-2 p-5 mt-3 col-sm-5">
						<div class="col-top">
							<div class="row top p-4">
								<div class="col-lg">
									<div class="image-border"><img class="mx-auto d-block float-none w-auto bg-white" src="images/calender3.png" alt="Calender 5"></div>
								</div>
							</div>
							<div class="row top text-white font-weight-bold pt-0">
								<h4 class="mt-2 mb-4">BLASTOMERE BIOPSY</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-sm col-md-12 col-lg-12">
								<ul>
									<li class="col-lg">Poorer representation of embryo’s cells (1 cell only)</li>
									<li class="col-lg">Higher Test Failure Rate, as only one/two cell(s) is available for analysis</li>
									<li class="col-lg">Cannot detect Mosaicism</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- second column -->
					<div class="col-main col-md-5 col-lg ml-3 mr-4 mb-2 p-5 mt-3 col-sm-5">
						<div class="row top p-4">
							<div class="col-lg">
								<div class="image-border"><img class="mx-auto d-block float-none w-auto bg-white" src="images/calender5.png" alt="Calender 5"></div>
							</div>
						</div>
						<div class="row top text-white font-weight-bold pt-0">
							<h4 class="mt-2 mb-4">BLASTOCYST BIOPSY</h4>
						</div>
						<div class="row">
							<div class="col-sm col-md-12 col-lg-12">
								<ul>
									<li>More cells (8-10 cells) = More DNA</li>
									<li>Better representation of embryo’s cells (few cells)</li>
									<li>Lower Test Failure Rate, as more number of cells are available for analysis</li>
									<li>Can detect Mosaicism</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

		  		<!--<div class="biopsyBlock">
	  				<div class="biopsyInnerBlock">
	  					<div class="imgBlock">
		  					<img src="images/calender3.png" alt="calender3">
	  					</div>
	  					<h4>Blastomere Biopsy</h4>
	  					<div class="individualDiv noAfter paddingTopLow">
		  					<ul class="regularListing center">
		  						<li>Single cell = Less DNA</li>
								<li>Poorer representation of embryo’s cells  (1 cell only)</li>
								<li>Higher Test Failure Rate, as only one/two cell(s) is available for analysis</li>
								<li>Cannot detect Mosaicism</li>
		  					</ul>
	  					</div>
	  				</div>
	  				<div class="biopsyInnerBlock">
	  					<div class="imgBlock">
		  					<img src="images/calender5.png" alt="calender5">
	  					</div>
	  					<h4>Blastocyst Biopsy</h4>
  						<div class="individualDiv noAfter paddingTopLow">
		  					<ul class="regularListing center">
								<li>More cells (8-10 cells) = More DNA</li>
								<li>Better representation of embryo’s cells (few cells)</li>
								<li>Lower Test Failure Rate, as more number of cells are available for analysis</li>
								<li>Can detect Mosaicism</li>
		  					</ul>
		  				</div>
	  				</div>
	  			</div>-->
	  		</div>
	  	</div>
		<a name="T6"/>
	  	<div id="T6" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Why Claria PGS is better?</span>
	  		</div>
	  		<div class="diganosticsInnerText blockCont">
	  			<h6>With our wealth of technical expertise in Genomics, we have the most powerful solution for your needs.</h6>
	  			<h6>Inherent flexibility to suit your needs without any compromise on quality.</h6>
	  			<h6>We provide end-to-end support:  From site validation and embryo biopsy training, to result data interpretation, phenotype correlation and genetic counselling</h6>
	  			<h6>Robust sequencing technology that provides sensitive and replicable results.</h6>
		  	</div>
	  	</div>
		<a name="T7"/>
	  	<div id="T7" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Technology</span>
	  		</div>
	  		<div class="diganosticsInnerText pgsTechnology">
	  			<h4 class="text-left">Claria PGS is carried out using advanced Next-Generation Sequencing (NGS) technology</h4>
	  			<h5 class="block text-left">What are the advantages of NGS based techniques?</h5>
	  			<div class="individualDiv noAfter">
		  			<ul class="regularListing text-left pl-4">
						<li>Rapid and convenient</li>
						<li>Screening of all 23 pairs of chromosomes for abnormalities in one test</li>
						<li>Able to detect greater than 20 Mb gains and losses in chromosomes</li>
						<li>Higher resolution - 1Mb areas are analysed to provide data with high con dence</li>
						<li>High sensitivity in detecting Aneuploidy (100 % sensitivity)</li>
						<li>High speci city and accuracy (99.98% speci city)</li>
						<li>Lower chances of test failure with NGS</li>
					</ul>
				</div>
	  			<h5 class="block text-left">Externally validated results</h5>
	  			<div class="individualDiv noAfter text-left">
	  				<p>MedGenome’s PGS test has shown 100% accuracy in Aneuploidy detection, when external validation was done using Proficiency Testing (PT) samples by the American Association of Bioanalysts.</p>
	  			</div>
		  	</div>
	  	</div>
		<a name="T8"/>
	  	<div id="T8" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Advantages of PGS by NGS vs. other screening approaches</span>
	  		</div>
	  		<div class="diganosticsInnerText table-responsive">
				<table class="tg3">
				  <tr>
				    <th class="tg-y3bo">Fluorescent In Situ Hybridisation (FISH)</th>
				    <th class="tg-y3bo">Array Comparative Genomic Hybridisation (aCGH)</th>
				    <th class="tg-y3bo">Single Nucleotide Polymorphism (SNP) Microarray</th>
				    <th class="tg-5sxq">NGS</th>
				  </tr>
				  <tr>
				    <td class="tg-zowg">A largely manual process, highly skill/ operator dependant.</td>
				    <td class="tg-zowg">Requires normal DNA for each sample to provide a comparison. A prolonged hybridisation step.</td>
				    <td class="tg-zowg">SNP array analysis of DNA, extracted from a cell population, cannot indicate the mosaicism within the sample.</td>
				    <td class="tg-zowg blue">NGS detects partial chromosomal gains and losses more precisely. NGS detects Aneuploidy and segmental imbalances at the same time.</td>
				  </tr>
				  <tr>
				    <td class="tg-jiga">Screening all 24 chromosomes at once requires a special probes set, requiring separate software at higher cost per sample.</td>
				    <td class="tg-jiga">Levels of mosaicism of 20% or less will not be detected.</td>
				    <td class="tg-jiga">Longer time needed to complete intended test.</td>
				    <td class="tg-jiga blue">NGS provides more accurate detection of mosaicism of the Trophectoderm cells from blastocyst biopsy.</td>
				  </tr>
				  <tr>
				    <td class="tg-zowg ">Dif cult to resolve chromosomal overlaps/ split signals.</td>
				    <td class="tg-zowg">Relatively expensive.</td>
				    <td class="tg-zowg">Relatively expensive.</td>
				    <td class="tg-zowg blue">NGS offers reduced costs and enhanced precision. It allows parallel analysis for multiple embryos for a single patient. In a single run, samples from different patients can be analysed together as well.</td>
				  </tr>
				</table>
		  	</div>
	  	</div>
		<a name="T9"/>
	  	<div id="T9" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>What can Claria PGS detect?</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<div class="individualDiv noAfter paddingTopLow">
		  			<ul class="regularListing">
		  				<li>Turner Syndrome</li>
		  				<li>Klinefelter Syndrome</li>
		  				<li>Down Syndrome</li>
		  				<li>Edwards Syndrome</li>
		  				<li>Patau Syndrome</li>
		  				<li>Other trisomies and monosomies which could increase the risk of implantation failure and miscarriage</li>
		  				<li>Segmental Gain and Losses (>20Mb) in chromosomes which can lead to abnormalities in the embryo</li>
		  			</ul>
	  			</div>
		  	</div>
	  	</div>
		<a name="T10"/>
	  	<div id="T10" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Claria  PGS workflow</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<img class="img-fluid" src="images/pgs-workflow.png" alt="pgsworkflow">
		  	</div>
	  	</div>
		<a name="T11"/>
	  	<div id="T11" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>What is Preimplantation Genetic Diagnosis (PGD)</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<p>PGD is a diagnostic procedure to test the material collected from an embryo for the presence of mutations carried by one or both parents. This is carried out when one or both genetic parents has a known genetic abnormality. In PGD every test is prepared on a case-by-case basis.</p>
		  	</div>
	  	</div>
		<a name="T12"/>
	  	<div id="T12" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>Possible candidates for PGD</span>
	  		</div>
	  		<div class="diganosticsInnerText">
	  			<div class="individualDiv noAfter paddingTopLow">
		  			<ul class="regularListing">
		  				<li>Carriers of X-linked genetic disorders</li>
						<li>Carriers of single gene disorders</li>
						<li>Couples who have a child/ children affected by a single gene disorder</li>
						<li>Couples who have a family history of a single gene disorder</li>
		  			</ul>
	  			</div>
		  	</div>
	  	</div>
		<a name="T13"/>
	  	<div id="T13" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>What are the benefits of PGD?</span>
	  		</div>
	  		<div class="diganosticsInnerText blockCont">
	  			<h6>PGD can test for most single gene disorders</h6>
	  			<h6>PGD allows the clinician to select embryos that do not carry the single gene disorder being tested for the implantation</h6>
	  			<h6>By using PGD, the single gene disorder can be prevented from being passed on from one generation to the next</h6>
		  	</div>
	  	</div>

		<a name="T14"/>
		<div id="T14" class="diganosticsInnerContent">
			<div class="heading">
				<span>How to order the Embryo Biopsy Kit</span>
			</div>
			<div class="diganosticsInnerText blockCont">
				<div class="embryoBiopsyBlock">
					<div class="row">
						<div class="column col-lg col-md col-sm ml-2 p-3 mt-1">
							<h3>Contact Customer Support</h3>
							<p>MedGenome Labs Pvt. Ltd., </p>
							<p>Bangalore</p>
							<p>Ph: 91-80-67154931</p>
							<!--<a href="#">(At least 2 days in advance)</a>-->
							<p style="color: #004d85;">(At least 2 days in advance)</p>
						</div>
						<div class="column col-lg col-md col-sm ml-2 p-3 mt-1">
							<h3>Clearly indicate number of kits required</h3>
						</div>
						<div class="column col-lg col-md col-sm ml-2 p-3 mt-1">
							<h3>Kits will be transported to the provided address at room temperature</h3>
						</div>
						<div class="column col-lg col-md col-sm ml-2 p-3 mt-1">
							<h3>Ensure the contents of the kit are intact before proceeding with the biopsy. Refer to the instructions on the kit</h3>
						</div>
					</div>
					<div class="border border-bottom my-5"></div>
					<?php require 'includes/sms-email.php';?>
					<!--<div class="individualDiv paddingTopLow">
						<ul>
							<li>
								<h3>Contact Customer Support</h3>
								<p>MedGenome Labs Pvt. Ltd., </p>
								<p>Bangalore</p>
								<p>Ph: 91-80-67154931</p>
								<a href="#">(At least 2 days in advance)</a>
							</li>
							<li>
								<h3>Clearly indicate number of kits required</h3>
							</li>
							<li>
								<h3>Kits will be transported to the provided address at room temperature</h3>
							</li>
							<li>
								<h3>Ensure the contents of the kit are intact before proceeding with the biopsy. Refer to the instructions on the kit</h3>
							</li>
						</ul>
					</div>-->
				</div>

			</div>
		</div>
		<!--<a name="T14"/>
	  	<div id="T14" class="diganosticsInnerContent">
	  		<div class="heading">
	  			<span>How to order the Embryo Biopsy Kit</span>
	  		</div>
	  		<div class="diganosticsInnerText bgcont">
		  		<div class="embryoBiopsyBlock">
	  				<div class="individualDiv paddingTopLow">
			  			<ul>
			  				<li>
			  					<h3>Contact Customer Support</h3>
			  					<p>MedGenome Labs Pvt. Ltd., </p>
			  					<p>Bangalore</p>
			  					<p>Ph: 91-80-67154931</p>
 								<a href="javascript:;">(At least 2 days in advance)</a>
			  				</li>
			  				<li>
			  					<h3>Clearly indicate number of kits required</h3>
			  				</li>
			  				<li>
			  					<h3>Kits will be transported to the provided address at room temperature</h3>
			  				</li>
			  				<li>
			  					<h3>Ensure the contents of the kit are intact before proceeding with the biopsy. Refer to the instructions on the kit</h3>
			  				</li>
			  			</ul>
			  		</div>
		  		</div>
				<?php /*require 'includes/sms-email.php';*/?>
		  	</div>
	  	</div>-->

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
<script src="js/pgs-scroll.js"></script>
</body>
</html>