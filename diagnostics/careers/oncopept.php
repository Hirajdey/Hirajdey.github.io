<?php require 'php-templates/header.php' ?>
<div ng-app="oncopeptDownloadApp">
	<div ng-controller="oncopeptDownloadCtrl">
		<div class="wrapper pept-nav-sec">
			<div class="container pad-space">
				<div class="pept-logo">OncoPept<sup>TM</sup></div>
				<ul class="pept-menu" id="myCollapseTab">
					<li class="active">
						<!--<a data-toggle="tab" href="#OncoPeptsolutions" ng-click="showSection('oncopept')">OncoPept<sup>TM</sup>-->
						<a data-toggle="tab" href="" ng-click="showOncoPeptsolutions()">OncoPept<sup>TM</sup>
						<span class="glyphicon glyphicon-menu-right rights"></span>
						<span class="glyphicon glyphicon-menu-down downs"></span>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="" ng-click="showOncoPepttume()">OncoPept<span><i>TUME </i></span><sup> TM</sup>
						<span class="glyphicon glyphicon-menu-right rights"></span>
						<span class="glyphicon glyphicon-menu-down downs"></span>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="" ng-click="showOncoPeptvac()">OncoPept<span><i>VAC </i></span><sup> TM</sup>
						<span class="glyphicon glyphicon-menu-right rights"></span>
						<span class="glyphicon glyphicon-menu-down downs"></span>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="" ng-click="showOncoPepttope()">OncoPept<span><i>TOPE </i></span><sup> TM</sup>
						<span class="glyphicon glyphicon-menu-right rights"></span>
						<span class="glyphicon glyphicon-menu-down downs"></span>
						</a>
					</li>
				</ul>

			</div>
		</div>

		<div id="OncoPeptsolutions" class="container downloads-row">
			<div class="row pull-right">
				<div class="col-xs-24 col-sm-8" id="presentations"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=presentations">Presentations</a></div>
				<div class="col-xs-24 col-sm-8" id="posters"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=posters">Posters</a></div>
				<div class="col-xs-24 col-sm-8" id="products"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=products">Product brochures</a></div>
				<div class="col-xs-24 col-sm-8" id="videos"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=videos">Videos</a></div>
				<div class="col-xs-24 col-sm-8 whitepapers" id="papers"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=whitepapers">White papers</a></div>
				<div class="col-xs-24 col-sm-8" id="events"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=events#events">Events</a></div>
				<!--<div class="downloads col-xs-24 col-sm-7"><a>Downloads</a></div>-->
			</div>
		</div>

<!--<div class="tab-content">-->
	<div id="OncoPeptsolutions" ng-show="OncoPeptsolutions">
		<div class="wrapper pept-bannr-sec">
			<div class="container pad-space">
				<h2>OncoPept<sup>TM</sup>  is a powerful genomics platform to accelerate immuno-oncology research</h2>
				<h6>MedGenome is the only Next Generation Sequencing (NGS) service provider offering immuno-oncology researchers an enduring, science-driven partnership to deliver quicker, more affordable and customized solutions. This enables superior therapeutic impact of checkpoint control inhibitors and cancer vaccines.
</h6>
			</div>
		</div>
		<div class="wrapper pept-solution-sec">
			<div class="container pad-space">
				<h4>OncoPept<sup>TM</sup></h4>

				<div class="clearfix"></div>
				<h6>An genomics platform for cancer immunotherapy companies</h6>
				<div class="solution-block">
					<img src="img/bg/solutions-bg.png" alt="solutions" class="main-img hidden-xs">
					<img src="img/bg/solutions-bg-mob.png" alt="solutions" class="main-img relative visible-xs">
					<div class="pop-block-mob">
						<div class="pop-block-hd visible-xs">OncoPept<span>TUME</span><sup>TM</sup></div>
						<div class="pop-block one">Provides immune phenotyping of the tumor microenvironment and analyses potenial biomarkers of response. </div>
						<div class="pop-block-hd visible-xs">OncoPept<span>VAC</span><sup>TM</sup></div>
						<div class="pop-block two">Characterizes tumor mutanome to identify candidate vaccines</div>

						<div class="pop-block-hd visible-xs">OncoPept<span>TCR</span><sup>TM</sup></div>
						<div class="pop-block three">NGS based TCR repertoire analysis fordifferential diagnosis of T-cell related pathology</div>
						<div class="pop-block-hd visible-xs">OncoPept<span>COMBI</span><sup>TM</sup></div>
						<div class="pop-block four">Provides molecular rationale to combine therapies developed in the immuno-oncology space</div>
						<div class="pop-block-hd visible-xs">OncoPept<span>TOPE</span><sup>TM</sup></div>
						<div class="pop-block bottom visible-xs">A database of neo-antigens and neo-epitopes derived from genetic alterations available in TCGA data. Open access available at <a href="http://oncotope.medgenome.com">http://oncotope.medgenome.com</a></div>
                     
					</div>
				</div>
				<div class="pop-block bottom hidden-xs">OncoPept<i>TOPE </i><sup> TM</sup> : A database of neo-antigens and neo-epitopes derived from genetic alterations available in TCGA data. Open access available at <a href="http://oncotope.medgenome.com">http://oncotope.medgenome.com</a></div>
                   <div class="tobelaunched"><sup>*</sup>To be launched soon</div>
				<table class="benifit-table">
					<tr>
						<th>Benefits</th>
						<th>Value for the customer</th>
					</tr>
					<tr>
						<td>Science driven</td>
						<td>Incorporates latest research insights to allow clients to use their time more efficiently and focus on their core research activities.</td>
					</tr>
					<tr>
						<td>Customized solutions</td>
						<td>Allow seamless integration with clients ongoing research and caters to their specific preclinical and clinical research needs.</td>
					</tr>
					<tr>
						<td>Quicker Turn Around Time at an affordable cost</td>
						<td>Robust and validated pipelines enable clients to complete their research in a shorter timeframe while minimizing the overall cost.</td>
					</tr>
					<tr>
						<td>Partnership</td>
						<td>Supports clients need in creating presentation materials, figures for manuscripts and summary reports.</td>
					</tr>
					<tr class="last-benifit">
						<td colspan="2">Accelerate your immuno-oncology research using OncoPept<sup>TM</sup></td>
					</tr>
				</table>
			</div>
		</div>
	</div>


	<div ng-show="OncoPepttume">
		<div class="wrapper vac_wrapper">
			<div class="container pad-space">
				<div class="row">
					<div class="col-md-12 left-section">
						<h3>OncoPept<span>TUME</span><sup>TM</sup></h3>
						<p>Provides immune phenotyping of the tumor microenvironment and analyses potenial biomarkers of response to enable success of checkpoint inhibitors.</p>
						<h4 class="sub-head">Key benefits</h4>
						<ul class="key_benefits">
							<li><span>Enables patient stratification for single agent or combination therapies</span></li>
							<li><span>Enhances therapeutic benefit of checkpoint control inhibitors</span></li>
							<li><span>Increases durability of response and patient outcome and aids in predicting adverse reaction to the drug</span></li>
						</ul>
					</div>
					<div class="col-md-12 right-section">
						<h4 class="sub-head">Biomarkers of response</h4>
						<div class="img-block">
							<img src="img/bg/line-diagram.jpg" alt="diagram">
						</div>
					</div>
					<div class="col-md-24 table-row">	
						<h4 class="sub-head">Advantages of OncoPept<i>TUME </i><sup> TM</sup> over traditional approaches</h4>
						<p>Tumor microenvironment analysis</p>
						<table class="table table-bordered ">
							<tr>
								<th></th>
								<th>OncoPept<em>TUME</em><sup>TM</sup></th>
								<th>Traditional (IHC/FACS-based)</th>
							</tr>
							<tr>
								<td>Tissue type requirement</td>
								<td>
									<ul>
										<li><span>Requires less tissue material</span></li>
										<li><span>FFPE or fresh frozen</span></li>
										<li><span>All cell types can be analyzed from data</span></li>
									</ul>
								</td>
								<td>
									<ul>
										<li><span>Requires more tissue material</span></li>
										<li><span>FFPE or fresh frozen</span></li>
										<li><span>Limiting cell types can be analyzed</span></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Data generated</td>
								<td>
									<ul>
										<li><span>Information content high</span></li>
										<li><span>Less variability in data</span></li>
										<li><span>Quantitative (relative); spatial distribution not preserved</span></li>
									</ul>
								</td>
								<td>
									<ul>
										<li><span>Information content low</span></li>
										<li><span>High user to user variation</span></li>
										<li><span>Quantitative (relative); spatial distribution preserved (IHC) but not for FACS</span></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Effort, time and cost</td>
								<td>
									<ul>
										<li><span>Quicker Turn Around Time</span></li>
										<li><span>Cost-effective</span></li>
									</ul>
								</td>
								<td>
									<ul>
										<li><span>Labor and time intensive</span></li>
										<li><span>Expensive per unit data generated on content low</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div ng-show="OncoPeptvac">
		<div class="wrapper vac_wrapper">
			<div class="container pad-space">
				<div class="row">
					<div class="col-md-12 left-section">
						<h3>OncoPept<span>VAC</span><sup>TM</sup></h3>
						<p>Delivers prioritized T-cell neo-epitopes, that can be used as DNA vaccine or peptide vaccine for cancer immunotherapy</p>
						<h4 class="sub-head">Key benefits</h4>
						<ul class="key_benefits">
							<li><span>Identify cancer variants with high specificity and sensitivity, cancer mutations that could be potentially HLA-binding and T-cell binding</span></li>
							<li><span>Create optimum length of the DNA vaccine or peptide vaccine and ensure they are processed correctly to produce HLA-binding neo-epitope</span></li>
							<li><span>Assay to determine efficient presentation of peptides by antigen presenting cells and ensure that these predicted peptide can activate <br />T-cells</span></li>
						</ul>
					</div>
					<div class="col-md-12 right-section">
						<h4 class="sub-head">Selecting cancer vaccines from somatic mutations</h4>
						
						<p><span>OncoPept<em>VAC</em><sup>TM </sup></span>uses multiple filters to eliminate greater than 99% of neo-antigens to select true T-cell neo-epitopes </p>
						<h4 class="sub-head center-al"> >2-log enrichment in <br>neo-epitope prioritization </h4>
						<div class="img-block">
							<img src="img/bg/tree-diagram.png" alt="">
						</div>
					</div>
					<div class="col-md-24 table-row">	
                    	<h4 class="sub-head">Advantages of OncoPept<em>VAC</em><sup> TM</sup> over traditional approaches</h4>
						<p>Tumor neo-epitope analysis</p>
						<table class="table table-bordered ">
							<tr>
								<th></th>
								<th>OncoPept<em>VAC</em><sup>TM</sup></th>
								<th>Traditional (Cell-based)</th>
							</tr>
							<tr>
								<td>Pre-clinical studies</td>
								<td>
									<ul>
										<li><span>Any tumor model can be used</span></li>
										<li><span>Scalable</span></li>
										<li><span>Quicker Turn Around Time and cost effective</span></li>
									</ul>
								</td>
								<td>
									<ul>
										<li><span>Requires specific animal models</span></li>
										<li><span>Not scalable</span></li>
										<li><span>Time consuming and expensive</span></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>Clinical studies</td>
								<td>
									<ul>
										<li><span>Cancer vaccines can be discovered from exome and RNA-seq data</span></li>
										<li><span>Standard NGS pipeline</span></li>
										<li><span>Scalable</span></li>
										<li><span>Quicker Turn Around Time and cost effective</span></li>
									</ul>
								</td>
								<td>
									<ul>
										<li><span>Requires manipulation of immune cells from the patient</span></li>
										<li><span>Highly specialized assays</span></li>
										<li><span>Not scalable</span></li>
										<li><span>Time consuming and expensive</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div ng-show="OncoPepttope">
		<div class="wrapper pept-tope-sec">
			<div class="container pad-space">
				<h4>OncoPept<i>TOPE </i><sup> TM</sup></h4>
				<p>Delivers prioritized T-cell neo-epitopes, that can be used as DNA or peptide vaccine for cancer immunotherapy
				<p>The database captures CD4+/CD8+ T-cell neo-epitopes from neo-antigens based on their binding affinity to different HLA types and selected based on their expression in cancer cells. Mutated genes are rank ordered according to their T-cell neo-epitope burden.</p>
				<p>The analysis provides an explanation as to why T-cell neo-epitopes are largely private and not shared between samples.</p>
				<p>OncoPept<em>TOPE</em><sup>TM</sup> web interface allows visualization of neo-epitopes across genes and cancers. Data is accessed by Gene/Transcript ID  and/or variant information. Data can be filtered further on HLA type and prevalence of the mutant epitope across different cancers</p>
				<h5>Click below to get <span>free access</span></h5>
				<a href="http://oncotope.medgenome.com" target="_blank" class="btn-wrap">
					<span class="btn-block">OncoPept<i>TOPE </i><sup> TM</sup> database</span>
				</a>
			</div>
		</div>
	</div>

<!--</div>-->
</div>
</div>

<script src="<?php echo $site_path;?>/js/oncopeptDownload.js"></script>
<?php require 'php-templates/footer.php' ?>