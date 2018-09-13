﻿<?php require 'php-templates/header.php';?>

<div class="wrapper banner-section-index ">
	<div class="homepage-slider-banner">
		<div class="container banner-content">
			<!-- Slider-->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
					<!--<li data-target="#myCarousel" data-slide-to="3"></li>-->
				</ol>
				<div class="carousel-inner" role="listbox">
                
     		<div class="item active">
					  <img src="<?php echo $site_path;?>/img/slider/3-min.jpg" class="img-responsive banner hidden-xs">
					  <img src="<?php echo $site_path;?>/img/slider/M3-min.jpg" class="img-responsive banner visible-xs">
					  <div class="banner1-text">
						   <span>
						   <div class="thirdline">CLIA certified, CAP accredited, ISO15189 compliant Next Generation Sequencing Lab in California</div>
						   <div class="secondline">Leading provider of genomic research services</div>

						   </span>
                              </div>
                             </div>
                
  			<div class="item">
				  <img src="<?php echo $site_path;?>/img/slider/2-min.jpg" class="img-responsive banner hidden-xs">
				  <img src="<?php echo $site_path;?>/img/slider/M2-min.jpg" class="img-responsive banner visible-xs">
				  <div class="banner2-text">
					   <span><div class="firstline">Market leader for genetic diagnostic testing in India </div></span>
				  </div>
            </div>
                             
   			<div class="item">
				  <img src="<?php echo $site_path;?>/img/slider/1-min.jpg" class="img-responsive banner hidden-xs">
				  <img src="<?php echo $site_path;?>/img/slider/M1-min.jpg" class="img-responsive banner visible-xs">
				  <div class="banner3-text">
				  <div>How’re you doing, baby?</div>
				  <div>Know your baby’s genetic health with A NEVER BEFORE</div>
				  <div>Accuracy</div>
				  <div class="hidden-xs hidden-sm hidden-md hidden-lg">Know your baby’s genetic health</div>
				  <a class="scrollto" href="http://medgenomenipt.com/" target="_blank" >Know More</a></div>
            </div>
			<!--<div class="item">
				<img src="<?php /*echo $site_path;*/?>/img/slider/grant_challenge-min.jpg" class="img-responsive banner hidden-xs">
				<img src="<?php /*echo $site_path;*/?>/img/slider/southeast-asia-m-min.jpg" class="img-responsive banner visible-xs">
					<div class="banner1-text banner4-text">
					   <span>
							<div class="thirdline banner4-text">MedGenome Singapore Announces Whole Genome Sequencing Grant Challenge for South East Asia <a class="scrollto" href="http://www.prnewswire.co.uk/news-releases/medgenome-singapore-announces-whole-genome-sequencing-grant-challenge-for-south-east-asia-607409976.html" target="_blank">Know More</a></div>
					   </span>
					</div>
   			 </div>-->
			</div>
		
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#myCarousel").carousel({
				interval : 3000,
				pause: false
			});
		});
	</script>
	<div class="wrapper disease-areas">
		<div class="container pad-space">
			<div class="right-arrw visible-lg"></div>
			<div class="ul-wrapper">
				<ul>
					<li><a href="<?php echo $site_path;?>/disease.php?act=cardiology">
						<div class="round two"></div>
						<span>Cardiology</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=connective-tissue-disorder">
						<div class="round one"></div>
						<span>Tissue Disorders</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=dermatology">
						<div class="round three"></div>
						<span>Dermatology</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=endocrinology" >
						<div class="round four"></div>
						<span>Endocrinology</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=ent" >
						<div class="round five"></div>
						<span>ENT</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=haematology">
						<div class="round six"></div>
						<span>Haematology</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=immunology" >
						<div class="round seven"></div>
						<span>Immunology</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=metabolic-disorders">
						<div class="round eight"></div>
						<span>Metabolic disorders</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=miscellaneous">
						<div class="round nine"></div>
						<span>Miscellaneous</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=nephrology">
						<div class="round ten"></div>
						<span>Nephrology</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=neurology">
						<div class="round eleven"></div>
						<span>Neurology</span>
						</a>
					</li>
					<li><a href="<?php echo $site_path;?>/disease.php?act=oncology">
						<div class="round twelve"></div>
						<span>Oncology</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left-arrw visible-lg"></div>
		</div>
	</div>
</div>
<div class="wrapper map-wrapper">
	<div class="container pad-space">
		<div class="col-sm-12 map-1">
			<img src="<?php echo $site_path;?>/img/banners/map1-min.png" class="img-responsive">
			<p>MedGenome is a founding member of GenomeAsia 100K, an initiative to sequence 100,000 genomes in South, North and East Asian Population</p>
			<a href="http://genomeasia100k.com/" target="_blank" class="btn">VIEW MORE INFORMATION</a>
		</div>
		<div class="col-sm-12 map-2">
			<img src="<?php echo $site_path;?>/img/banners/map2-min.jpg" class="img-responsive">
			<p>MedGenome has CAP/CLIA certified NGS lab in Foster City, California and two other state of art sequencing labs in Bangalore and Cochin</p>
			<!-- <a class="btn">VIEW MORE INFORMATION</a> -->
		</div>
	</div>
</div>

<div class="wrapper info-wrapper hidden-xs">
	<div class="container pad-space">
		<div class="sec-one">
			<h2>Integrated Genomics Platform</h2>
			<h6>Integrated Genomics Platform (IGP) empowers genetic research studies into complex human diseases otherwise intractable by conventional genetic analysis. This service enables pharma to develop better drugs by applying genomics to stratified disease cohorts </h6>
			<a href="<?php echo $site_path;?>/integratedgenomicsplatform.php"  class="btn font16">VIEW MORE INFORMATION</a>
		</div>
		<div class="igp-sec">
			<div class="rounds gene">
				<img src="<?php echo $site_path;?>/img/icons/gene-min.png" class="images">
				<h5>Understanding the genetic basis of complex diseases and rare disorders</h5>
				<ul>
					<li>Develop better diagnostics</li>
					<li>Uncover causal genes in orphan Mendelian disorders</li>
				</ul>
			</div>
			<div class="rounds drug">
				<img src="<?php echo $site_path;?>/img/icons/drug-min.png" class="images">
				<h5>Enables novel drug development</h5>
				<ul>
					<li>Genetic breakthroughs have produced blockbuster drugs and diagnostics</li>
				</ul>
			</div>
			<div class="rounds keys">
				<img src="<?php echo $site_path;?>/img/icons/keys-min.png" class="images">
				<h5>Elucidate the genetic keys to human health</h5>
				<ul>
					<li>Centenarian studies</li>
					<li>Discovery of protective alleles in a population</li>
				</ul>
			</div>
			<div class="rounds centers">
				<h4>IGP enables pharma to develop better drugs by applying genomics to stratified disease cohorts</h4>
			</div>
		</div>
	</div>
</div>
<div class="wrapper pept-wrapper-index hidden-xs">
	<div class="container pad-space">
		<div class="pept-block">
			<h1>Genomic Solutions &ndash; OncoPept</h1>
			<h4>OncoPept is an end-to-end genomics platform to accelerate your immuno-oncology research</h4>
			<h4 class="mar-t30">MedGenome is the only Next Generation Sequencing (NGS) service provider offering immuno-oncology researchers an enduring, <i>science-driven partnership</i> to deliver <i>quicker, more affordable, customized solutions</i> to achieve superior therapeutic impact of checkpoint control inhibitors and cancer vaccines through its cancer immunotherapy platform, <b>OncoPept<sup>TM</sup></b></h4>
			<a href="<?php echo $site_path;?>/oncopept.php" class="btn">VIEW MORE INFORMATION</a>
		</div>
		<div class="img-sec">
			<img src="<?php echo $site_path;?>/img/bg/pept-img-min.png" class="img-responsive">
		</div>
	</div>
</div>
<div class="wrapper md-wrapper hidden-xs">
	<div class="container pad-space">
		<h5>Genomic Solutions  &ndash; OncoMD </h5>
		<p>OncoMD is an extensively annotated knowledge base of genomic alterations in cancer that provides deep insights into the disease at a genetic and molecular level</p>
		<p>OncoMD combines curated data with software bioinformatics and powerful analytics to derive useful genomics solutions in cancer research and diagnostics</p>
		<div class="clearfix"></div>
		<ul>
			<li>
				<h2>1,900,000+</h2>
				<h6>Cancer mutations</h6>
			</li>
			<li>
				<h2>7,000+</h2>
				<h6>Peer reviewed publications</h6>
			</li>
			<li>
				<h2>17,000+</h2>
				<h6>Exome studies</h6>
			</li>
			<li>
				<h2>650,000+</h2>
				<h6>Samples</h6>
			</li>
		</ul>
		<a href="<?php echo $site_path;?>/oncomd.php" class="btn font16">VIEW MORE INFORMATION</a>
	</div>
</div>
<div class="wrapper genome-wrapper-index hidden-xs">
	<div class="container pad-space">
		<h2>NGS Informatics</h2>
		<h6>MedGenome’s NGS Informatics team consisting of biologists, bio-informaticians and statisticians are available on a fee per project or contract basis to analyze your data to drive genomics research. They are your resource for data analysis utilizing your company’s pipeline, commercial pipelines or MedGenome-derived analysis plans</h6>
		<div class="col-sm-24 chart">
			<div class="col-sm-8 halfs rights">
				<h2>Data Analysis</h2>
				<h6>Variant calling | Gene expression | T-cell neo-epitope identification | Tumor microenvironment analysis | Epigenetic regulation | Genotype – phenotype correlation | Gene signature analysis</h6>
				<h4>Data Sources</h4>
				<h6>Mouse studies | Primates | Microbiome | Human preclinical and clinical trials</h6>
			</div>
			<div class="col-sm-8 diagram">
				<img src="<?php echo $site_path;?>/img/banners/diagram-min.png">
				<p>Areas of Expertise</p>
			</div>
			<div class="col-sm-8 halfs lefts">
				<h2>Data Type</h2>
				<h6>Whole Genome analysis | Exome | RNAseq | Chipseq | Methylseq | miRNA | Small RNA analysis | Microarray | Clinical</h6>
				<h4>Disease Areas</h4>
				<h6>Oncology | Neurology | Cardiovascular | Diabetes | Ophthalmology | ENT | Autoimmune | Pre-natal | Rare diseases | Population Genomics/Longevity</h6>
			</div>
		</div>
		<a href="<?php echo $site_path;?>/ngs.php" class="btn">VIEW MORE INFORMATION</a>
	</div>
</div>
<div class="wrapper mother-wrapper hidden-xs">
	<div class="container pad-space">
		<div class="col-sm-12">
			<h4>Non-Invasive Prenatal Screening Test</h4>
			<h6>MedGenome is the first to offer NIPT testing for chromosomal disorders in India</h6>
			<a href="http://medgenomenipt.com/" target="_blank" class="btn">VIEW MORE INFORMATION</a>
		</div>
		<div class="col-sm-12">
			<img src="<?php echo $site_path;?>/img/bg/mother-min.png" class="img-responsive pull-left">
		</div>
	</div>
</div>
<div class="panel-group visible-xs" id="accordion" role="tablist" aria-multiselectable="true">
	
	<div class="panel info-wrapper">
		<div class="panel-heading" role="tab" id="headingTwo">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<label>Integrated Genomic platform</label>
					<span class="glyphicon glyphicon-menu-right rights"></span>
					<span class="glyphicon glyphicon-menu-down downs"></span>
				</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			<div class="panel-body">
				<div class="container">
					<div class="sec-one">
						<h2>Integrated Genomics Platform</h2>
						<h6>Integrated Genomics Platform (IGP) empowers genetic research studies into complex human diseases otherwise intractable by conventional genetic analysis. This service enables pharma to develop better drugs by applying genomics to stratified disease cohorts </h6>
						<a href="<?php echo $site_path;?>/integratedgenomicsplatform.php" class="btn">VIEW MORE INFORMATION</a>
					</div>
					<div class="igp-sec">
						<div class="rects">
							<div class="rounds centers">
								<h4>IGP enables pharma to develop better drugs by applying genomics to stratified disease cohorts</h4>
							</div>
						</div>
						<div class="rects">
							<div class="rounds keys">
								<img src="<?php echo $site_path;?>/img/icons/keys-min.png" class="images" width="50">
								<h5>Elucidate the genetic keys to human health</h5>
								<ul>
									<li>Centenarian studies</li>
									<li>Discovery of protective alleles in a population</li>
								</ul>
							</div>
						</div>
						<div class="rects brdr-btm">
							<div class="rounds gene">
								<img src="<?php echo $site_path;?>/img/icons/gene-min.png" class="images" width="48">
								<h5>Understanding the genetic basis of complex diseases and rare disorders</h5>
								<ul>
									<li>Develop better diagnostics</li>
									<li>Uncover causal genes in orphan Mendelian disorders</li>
								</ul>
							</div>
							<div class="rounds drug">
								<img src="<?php echo $site_path;?>/img/icons/drug-min.png" class="images" width="35">
								<h5>Enables novel drug development</h5>
								<ul>
									<li>Genetic breakthroughs have produced blockbuster drugs and diagnostics</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel pept-wrapper">
		<div class="panel-heading" role="tab" id="headingThree">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					<label>Genomic Solutions – OncoPept</label>
					<span class="glyphicon glyphicon-menu-right rights"></span>
					<span class="glyphicon glyphicon-menu-down downs"></span>
				</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			<div class="panel-body">
				<div class="container">
					<div class="pept-block">
						<h1>Genomic Solutions – OncoPept</h1>
						<h4>OncoPept is an end-to-end genomics platform to accelerate your immuno-oncology research</h4>
						<h4 class="mar-t30">MedGenome is the only Next Generation Sequencing (NGS) service provider offering immuno-oncology researchers an enduring, <i>science-driven partnership</i> to deliver <i>quicker, more affordable, customized solutions</i> to achieve superior therapeutic impact of checkpoint control inhibitors and cancer vaccines through its cancer immunotherapy platform, <b>OncoPept<sup>TM</sup></b></h4> <br/>
                        <img class="img-responsive" src="<?php echo $site_path;?>/img/bg/pept-img-min.png">
						<a href="<?php echo $site_path;?>/oncopept.php" class="btn">VIEW MORE INFORMATION</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel md-wrapper">
		<div class="panel-heading" role="tab" id="headingFour">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
					<label>Genomic Solutions – OncoMD</label>
					<span class="glyphicon glyphicon-menu-right rights"></span>
					<span class="glyphicon glyphicon-menu-down downs"></span>
				</a>
			</h4>
		</div>
		<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			<div class="panel-body">
				<div class="container">
					<h5>Genomic Solutions – OncoMD</h5>
					<p>OncoMD is an extensively annotated knowledge base of genomic alterations in cancer that provides deep insights into the disease at a genetic and molecular level</p>
					<p>OncoMD combines curated data with software bioinformatics and powerful analytics to derive useful genomics solutions in cancer research and diagnostics</p>
					<div href="<?php echo $site_path;?>/oncomd.php" class="clearfix"></div>
					<ul>
						<li>
							<h2>1,900,000+</h2>
							<h6>Cancer mutations</h6>
						</li>
						<li>
							<h2>7,000+</h2>
							<h6>Peer reviewed publications</h6>
						</li>
						<li>
							<h2>17,000+</h2>
							<h6>Exome studies</h6>
						</li>
						<li>
							<h2>650,000+</h2>
							<h6>Samples</h6>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="panel genome-wrapper">
		<div class="panel-heading" role="tab" id="headingFive">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
					<label>NGS Informatics</label>
					<span class="glyphicon glyphicon-menu-right rights"></span>
					<span class="glyphicon glyphicon-menu-down downs"></span>
				</a>
			</h4>
		</div>
		<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
			<div class="panel-body">
				<div class="container">
					<h2>NGS Informatics</h2>
					<h6>MedGenome’s NGS Informatics team consisting of biologists, bio-informaticians and statisticians are available on a fee per project or contract basis to analyze your data to drive genomics research. They are your resource for data analysis utilizing your company’s pipeline, commercial pipelines or MedGenome-derived analysis plans</h6>
					<div class="col-md-24 chart">
						<div class="diagram">
							<img src="<?php echo $site_path;?>/img/banners/diagram-mob-min.png">
							<p>Areas of Expertise</p>
						</div>
						<div class="halfs">
							<h2>Data Analysis</h2>
							<h6>Variant calling | Gene expression | T-cell neo-epitope identification | Tumor microenvironment analysis | Epigenetic regulation | Genotype – phenotype correlation | Gene signature analysis</h6>
							<h2>Data Sources</h2>
							<h6>Mouse studies | Primates | Microbiome | Human preclinical and clinical trials</h6>
							<h2>Data Type</h2>
							<h6>Whole Genome analysis | Exome | RNAseq | Chipseq | Methylseq | miRNA | Small RNA analysis | Microarray | Clinical</h6>
							<h2>Disease Areas</h2>
							<h6>Oncology | Neurology | Cardiovascular | Diabetes | Ophthalmology | ENT | Autoimmune | Pre-natal | Rare diseases | Population Genomics/Longevity</h6>
							<div class="clearfix"></div>
						</div>
					</div>
					<a class="btn" href="<?php echo $site_path;?>/ngs.php">VIEW MORE INFORMATION</a>
				</div>
			</div>
		</div>
	</div>
    <div class="panel banner-section">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<label>NIPT</label>
					<span class="glyphicon glyphicon-menu-right rights"></span>
					<span class="glyphicon glyphicon-menu-down downs"></span>
				</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			<div class="panel-body mother-wrapper">
				<div class="banners2"><!-- <img src="img/place-holders/nipt-banner.jpg" class="img-responsive"> --></div>
				<div class="container banner-content banner-content2">
					<div class="blocks">
						<span class="c-one">NIPT </span>
						<span>MedGenome is the first to offerNIPT testing for chromosomaldisorders in India</span>
						<div class="clearfix"></div>
						<a class="btn" href="http://medgenomenipt.com/" target="_blank">VIEW MORE INFORMATION</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrapper about-wrapper-index hidden-xs">
	<div class="container pad-space">
		<h4>About MedGenome</h4>
		<p class="disclaimer">MedGenome Inc. is a genomics-based research company headquartered in California with a mission to improve global health by decoding genetic information contained in an individual's genome</p>
	</div>
</div>

<div class="top-arrow hide hidden-xs" id="scroll-top">
	<div class="fa fa-arrow-up"></div>
</div>

<?php require 'php-templates/footer.php' ?>