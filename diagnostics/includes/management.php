<div class="management">
	<div ng-app="ngApp">
		<div class="wrapper about-wrapper-index visible-xs visible-sm visible-md visible-lg management" ng-controller="ngManagement">

			<!-- Popup-->
			<!--<div class="popup" id="myModal" role="dialog" ng-show="managementPopup">-->
			<div class="popup" id="myModal" role="dialog" style="display: none">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" ng-click="closePopup(description)">&times;</button>
							<h4 class="modal-title">{{name}}</h4>
						</div>
						<div class="row modal-body">
							<div class="col-md-6 management-image"><img alt="" src="<?php echo $site_path;?>/images/management/{{photo}}" width="150px" height="150px"></div>
							<div class="col-md-16 management-description">

								<!-- SAM -->
								<div id="sam" class="display-none">
									<p>Mr. Sam Santhosh is an entrepreneur with over 25 years of experience in initiating and running successful businesses. Sam is an investor and mentor for many companies and is currently a board member at Impelsys Inc, New York, ePay Healthcare, San Francisco, SciGenom Labs, Cochin, Emerge Ventures, Singapore and the Centre for Commercialization of Antibodies (CCAB) Toronto, Canada.</p>
									<p>Prior to this Sam was the CEO and Managing Director of California Software Limited (Calsoft) from 1992-2012. He founded Calsoft in 1992 and under Sam’s vision Calsoft rapidly grew from a niche player in the Silicon Valley to a global player with over 1200 employees and presence in 8 countries. Sam took Calsoft public and listed the company in the Indian Stock Exchanges. From 2004 to 2009, Sam focused on inorganic growth through eight acquisitions including companies in U.S, UK, Japan and India. Post 2009, Sam oversaw the sale of the Calsoft group companies to different buyers across the world. Sam holds a degree in Mechanical Engineering and an MBA from IIM Calcutta. He is based in San Francisco and visits India every alternate month.</p>
								</div>

								<!-- Sanjay -->
								<div id="sanjay" class="display-none">
									<p>Sanjay has been a part of Indian and multinational corporate scenario for many years, and has deftly handled roles of increased responsibility. He is a hybrid professional and comes from a background of pharmaceuticals, OTC, diagnostic & healthcare. His experience spans sales & marketing, as well as operations and includes excellence in a P&L management role as business unit head. He has won several awards, of which he regards the “Jewel in the crown” and “Regional Appreciate” awards at Ranbaxy as the most precious to him. He has a strong interest in scaling up innovative business models requiring an entrepreneurial approach to business building. Sanjay is an alumni of BIM Tech and IIFT Delhi.</p>
								</div>

								<!-- Ram -->
								<div id="ram" class="display-none">
									<p>Dr. Ramprasad holds a Master’s Degree and PhD from BITS, PILANI. After his post doctoral training he worked for 6 years as Scientist (Molecular Genetics) at Vision Research Foundation, Sankara Nethralaya, Chennai, India and then went on to work for 4 years at Spinco Biotech, India handling Affymetrix and Illumina technologies. He also worked as Principal Scientist at SciGenom Labs,Cochin, for a year. He has 17 peer reviewed publications to his credit.</p>
								</div>

								<!-- Rohit -->
								<div id="rohit" class="display-none">
									<p>Dr Rohit Gupta is Chief Information Officer (CIO) at MedGenome and comes with a broad expertise in the areas of computational biology, genomics, data science and bioinformatics. He has more than 14 years of experience developing and applying data-driven methods in diverse application areas such as civil infrastructure, earth sciences, e-commerce, medicine, computational biology and clinical genomics.</p>
									<p>Dr Gupta currently also holds the position of adjunct professor at IIT-Madras and at IIIT-Delhi, where he actively participates in teaching and research activities to bridge the gap between academia and industry. As part of his appointment at IIT-Madras, he is also associated with Initiative for Biological Systems Engineering (IBSE) and Interdisciplinary Laboratory for Data Sciences (ILDS).</p>
									<p>Among his significant previous positions, he has served as Director of Bioinformatics at Strand Life Sciences, India. He was Associate Scientist for more than a year at Genentech, USA and research collaborator for more than 6 years at Mayo Clinic, Rochester USA where he won several prestigious awards for his work. </p>
									<p>Dr Gupta holds a B.Tech degree from IIT Roorkee and M.S & Ph.D (CS) degrees from the University of Minnesota, USA. He has several peer reviewed publications to his credit in reputed journals and international conferences.</p>
								</div>

								<!-- Bose -->
								<div id="bose" class="display-none">
									<p>Dr. Bose is a strategist in the medical diagnostic industry & has played key roles in the establishment and successful operational take-off of large scale Pathology labs which function as pro-patient, pro-clinician, information & technology rich yet cost effective business modules with remarkably productive outcomes. A pathologist by training, he has executed a multitude of leadership responsibilities spanning across medical oversight, quality management, business development, IT systems management & development, & material management. He is also a certified ISO 15189 auditor for National Accreditation Board for testing and calibration laboratories (NABL) & has vast experience in quality systems in medical laboratories . He is also an international fellow member of the College of American Pathologists (IFCAP). Prior to joining MedGenome, Dr Bose worked as Laboratory Director of AmPath (American Institute of Pathology), Hyderabad.</p>
								</div>

								<!-- Surajit -->
								<div id="surajit" class="display-none">
									<p>Surajit is an avid finance professional with over 15 years of experience in well diversified sectors like E-Commerce, Retail, Media & Advertising, and Manufacturing. Prior to MedGenome, he worked with Redbus.in. His core strengths being process implementation, he is adept at building an organisation’s eco system from scratch. He has handled multiple crucial projects successfully like ERP implementation and internal control system design. He has also won many accolades, and was featured as one amongst India’s 100 Stars of Tomorrow (100 future CFOs) in 2013 in CFO-India magazine – a 9.9 Media publication. Surajit is a Chartered Accountant from ICAI.</p>
								</div>

								<!-- Amit -->
								<div id="amit" class="display-none">
									<p>Dr. Chaudhuri has over 15 years experience in oncology target discovery and validation at Genentech Inc, Inpharmatica Inc, and CuraGen Corporation. He holds a Ph.D. in Biochemistry from the Indian Institute of Science, Bangalore and did his Post Doctoral research at Massachusetts General Hospital, Harvard Medical School and at the Department of Molecular & Cellular Biology, Harvard University. His graduate and post-graduate research was to understand the molecular and biochemical basis of cell surface receptor signaling, cellular metabolism and establishment and maintenance of cellular polarity. He has co-authored several papers in Science and Nature.</p>
								</div>

								<!-- Tim -->
								<div id="tim" class="display-none">
									<p>Timothy J. Triche, MD, PhD, trained as an anatomic pathologist at Wash U. Medical Center, then spent 15 years at the National Cancer Institute as a staff pathologist and researcher studying cancer biology, with an emphasis on pediatric cancer. He subsequently moved to USC/CHLA as Chair, Dep’t of Pathology and Laboratory Medicine, where he established a grant funded research program in cancer genomics. More recently he founded the Center for Personalized Medicine at CHLA and has developed a series of next-gen based cancer diagnostics and prognostics. His current research is focused on the role of long non-coding RNA in cancer progression and development of a targeted nanoparticle therapeutic platform useful in delivering a wide range of therapeutics, including small molecule agents, nucleic acid, and gene editing constructs, among others. He also serves as Laboratory Director for MedGenome NGS lab in Foster City, California.</p>
								</div>

								<!-- Michael -->
								<div id="michael" class="display-none">
									<p>Michael comes with over 25 years of experience in the lifescience industry. He has excellent relationships in pharmaceutical, biotech and academic markets which he has built and managed over these 25 years. Substantial top leadership experience in marketing, general management, business development and sales roles in complex international life science businesses.</p>
									<p>He grew revenues at 3 different companies from $0 to $25M in RareCyte, from $10M to $40M in Velocity 11 and from $20 to $70M in Affymetrix.</p>
									<p>He comes with a good understanding in Genomics, DNA Sequencing, Drug Discovery, Cell Biology, Immunology, Proteomics and Microbiome Analysis.</p>
								</div>

								<!-- Hiran -->
								<div id="hiran" class="display-none">
									<p>Hiranjith is a strategy and consulting professional with a consistent track record of delivering sustained business value through actionable business insights and recommendations. His work experience spans across multinationals such as Novartis, ZS Associates, Accenture Management Consulting and Infosys. He has partnered with global brand teams on strategic planning across multiple specialty therapeutic areas such as Transplant, Auto-immune, Anti-inflammatory and Virology and across geographies. He has also been consultant to pharmaceutical majors such as Centocor Ortho Biotech, GE, Eli Lilly & Medimmune and Telecom / Finance majors on multiple projects, driving their strategic direction. Hiranjith holds a Master’s in Business Administration and a Bachelor’s degree in Electronics & Communication.</p>
								</div>

								<!-- Arati -->
								<div id="arati" class="display-none">
									<p>Dr. Arati Khanna Gupta has over twenty years of research experience in the general area of molecular medicine. Prior to joining MedGenome, Arati was an Assistant Professor of Medicine at the Harvard Medical School and a Research Scientist at the Brigham and Women’s Hospital in Boston, USA. She has been an Affiliated Member of the Harvard Stem Cell Institute (HSCI) and an Associate member of the Dana Farber Cancer Institute, Boston.</p>
									<p>Primarily interested in the general area of molecular hematology, she has made significant contributions to understanding the transcriptional regulation of normal and leukemia-associated myeloid differentiation, neutrophil biology and the molecular mechanism underlying bone marrow failure syndromes. Arati has over thirty publications to her credit in well regarded scientific publications, including several first and last author papers, editorials, and chapters in Hematology text books. She is currently on the editorial board of an online Hematology journal. She holds a Ph.D. in Molecular Biology (Lehigh University, PA, USA) as well as a Masters degree in Biochemistry (Maharaja Sayajirao University, Baroda, India), and has several years of post-doctoral research experience (at Yale University School of Medicine, New Haven, CT, USA).</p>
								</div>

							</div>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" ng-click="closePopup(description)">Close</button>
						</div>
					</div>

				</div>
			</div>
			<!-- End of Popup-->

			<!-- Rearrange -->
			<div class="container">
				<div class="row"><div class="col-md-6"><h3>Management</h3></div></div>
					<div class="col-xs-0 col-md-6"></div>
					<div class="col-xs-24 col-md-24 photo hvr-grow text-center">
						<img width="167px" height="157px" alt="Sam Santhosh" src="<?php echo $site_path;?>/images/management/Sam.jpg" ng-click="detailedView('Sam.jpg','Sam Santhosh – Founder and Chairman','sam')">
						<span class="name"><br>Sam Santhosh </span><br><span class="designation">Founder and Chairman</span>
					</div>
					<div class="col-xs-0 col-md-6"></div>
				</div>

			<div class="container">
				<div class="row top">
					<!-- Left -->
					<div class="col-md-12">
						<div class="row"><div class="col-md-24 text-center"><h2>US</h2></div></div><br>
								<div class="row left">
									<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
										<img width="167px" height="157px" alt="Amitabha Chaudhuri" src="<?php echo $site_path;?>/images/management/Amit.jpg" ng-click="detailedView('Amit.jpg','Dr. Amitabha Chaudhuri – VP, Research & Development','amit')">
										<span class="name"><br>Dr. Amitabha Chaudhuri <br><span class="designation"> VP, Research & Development</span>
									</div>
									<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
										<img width="167px" height="157px" alt="Michael Nemzek" src="<?php echo $site_path;?>/images/management/Michael-Nemzek.jpg" ng-click="detailedView('Michael-Nemzek.jpg','Michael Nemzek – Chief Commercial Officer, USA','michael')">
										<span class="name"><br>Michael Nemzek<br><span class="designation"> Michael Nemzek – Chief Commercial Officer, USA</span>
									</div>
								</div>

								<div class="row">
									<!-- Timothy J. Triche -->
									<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
										<img width="167px" height="157px" alt="Timothy J. Triche" src="<?php echo $site_path;?>/images/management/Timothy.jpg" ng-click="detailedView('Timothy.jpg','Dr. Timothy J. Triche – Laboratory Director','tim')">
										<span class="name"><br>Dr. Timothy J. Triche<br><span class="designation"> Laboratory Director </span>
									</div>

									<!-- Hiranjith -->
									<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
										<img width="167px" height="157px" alt="Hiranjith G H" src="<?php echo $site_path;?>/images/management/Hiran.jpg" ng-click="detailedView('Hiran.jpg','Hiranjith G H – Director, Corporate Planning, Marketing & Communications','hiran')">
										<span class="name"><br>Hiranjith G H <br><span class="designation"> Director, Corporate Planning, Marketing & Communications</span>
									</div>
								</div>
					</div>
					<!-- End Left -->

					<!-- Right -->
					<div class="col-md-12 management-divider">
						<div class="row"><div class="col-md-24 text-center"><h2>INDIA</h2></div></div><br>
						<div class="row right">
							<!-- Girish Mehta -->
							<!--<div class="col-xs-12 col-md-12 photo hvr-grow">
								<img width="167px" height="157px" alt="Girish Mehta" src="<?php /*echo $site_path;*/?>/images/management/Girish-Mehta.png" ng-click="detailedView('Girish-Mehta.png','Girish Mehta – CEO (India)','grish')">
								<span class="name"><br>Girish Mehta <br> <span class="designation"> CEO (India)</span>
							</div>-->

							<!-- V L Ramprasad -->
							<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
								<img width="167px" height="157px" alt="V L Ramprasad" src="<?php echo $site_path;?>/images/management/Ram.jpg" ng-click="detailedView('Ram.jpg','Dr. V L Ramprasad – COO','ram')">
								<span class="name"><br>Dr. V L Ramprasad <br><span class="designation"> COO</span>
							</div>

							<!-- Rohit Gupta -->
							<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
								<img width="167px" height="157px" alt="Rohit Gupta" src="<?php echo $site_path;?>/images/management/Rohit.jpg" ng-click="detailedView('Rohit.jpg','Dr. Rohit Gupta – CIO','rohit')">
								<span class="name"><br>Dr. Rohit Gupta <br><span class="designation"> CIO</span>
							</div>
						</div>

						<div class="row">
							<!-- Surajit Chakrabartty -->
							<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
								<img width="167px" height="157px" alt="Surajit Chakrabartty" src="<?php echo $site_path;?>/images/management/Surajit.jpg" ng-click="detailedView('Surajit.jpg','Surajit Chakrabartty – CFO','surajit')">
								<span class="name"><br>Surajit Chakrabartty <br><span class="designation"> CFO</span>
							</div>

							<!-- Sanjay Kumar Sharma -->
							<div class="col-xs-12 col-md-12 photo hvr-grow text-center">
								<img width="167px" height="157px" alt="Sanjay Kumar Sharma" src="<?php echo $site_path;?>/images/management/Sanjay.jpg" ng-click="detailedView('Sanjay.jpg','Sanjay Kumar Sharma – CCO','sanjay')">
								<span class="name"><br>Sanjay Kumar Sharma <br><span class="designation"> CCO</span>
							</div>
						</div>
					</div>
					<!-- End Right -->
				</div>
			</div>
		</div>
			<!-- End -->
		</div>
	</div>


<script>
	var app = angular.module("ngApp", []);
	app.controller("ngManagement", function ($scope, $anchorScroll) {
		$( "#myModal").hide();

		$scope.detailedView = function ($photo, $name, $description) { //alert($description)
			$scope.managementPopup = true;
			$scope.managementPage = true;
			$scope.photo = $photo;
			$scope.name = $name;
			$scope.description = $description;
			$( "#myModal").show().fadeIn(10000);
			$("#"+$description).show();
			$anchorScroll(); // after submit the test page scroll up
			$scope.desc = true;
		};

		$scope.closePopup = function ($name) {
			$scope.managementPopup = false;
			$scope.managementPage = false;
			$( "#myModal").hide();
			$("#"+$name).hide();
		}
	});
</script>

<div class="top-arrow hide hidden-xs" id="scroll-top">
	<div class="fa fa-arrow-up"></div>
</div>