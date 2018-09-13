<?php //require 'config/config.php';?>
<div class="homeTab">
	<div class="wrapper hidden-xs">

		<?php require 'includes/common-tab.php';?>

		<div id="tabs-1" class="diganosticsCont">
			<div class="tabContent1">
				<h3><a href="carrier.php">CARRIER</a></h3>
				<ul>
					<li>Beta-Thalassemia</li>
					<li>Cystic Fibrosis</li>
					<li>Amino Acid Disorders</li>
					<li> Congenital Adrenal Hyperplasia</li>
					<li>Sickle Cell Anaemia</li>
					<li>Spinal Muscular Atrophy</li>
				</ul>
			</div>
			<div class="tabContent2">
				<h3><a href="nipt.php">NIPT (With Microdeletions)</a></h3>
				<ul>
					<li>Trisomy 21 (Down syndrome)</li>
					<li>Trisomy 18 (Edward's syndrome)</li>
					<li>Trisomy 13 (Patau syndrome)</li>
					<li>Monosomy X (Turner syndrome)</li>
					<li>Sex Chromosome Trisomies</li>
				</ul>
			</div>
			<div class="tabContent">
				<h3><a href="pgs-pgd.php">PGS + PGD</a></h3>
				<ul>
					<li>Increased implantation rate</li>
					<li>Reduction in miscarriage rate</li>
					<li>Higher chance of delivering a healthy baby</li>
					<li>Helps achieve pregnancy without problems</li>
				</ul>
			</div>
		</div>
		<?php
		$base_url = $_SERVER['SERVER_NAME'];
		if($base_url == 'localhost')
			$url = '/claria/actia/';
		elseif($base_url = 'staging.medgenome.com')
			$url = '/actia/';
		else
			$url = '/actia/';
		?>
		<div id="tabs-2" class="systemGenomics">
			<div class="tabContent">
				<ul>
					<li><a href="<?php echo $site_path;?>/actia/cardio-genetic.php">Cardio Genetics</a></li>
					<li><a href="<?php echo $site_path;?>/actia/ent-genetic.php">ENT Genetics</a></li>
					<li><a href="<?php echo $site_path;?>/actia/neuro-genetic.php">Neuro Genetics</a></li>
				</ul>
			</div>
			<div class="tabContent1">
				<ul>
					<li><a href="<?php echo $site_path;?>/actia/clinical-genetic.php">Clinical Exome</a></li>
					<li><a href="<?php echo $site_path;?>/actia/metabolic-genetic.php">Metabolic Genetics</a></li>
					<li><a href="<?php echo $site_path;?>/actia/ocular-genetic.php">Ocular Genetics</a></li>
				</ul>
			</div>
			<div class="tabContent2">
				<ul>
					<li><a href="<?php echo $site_path;?>/actia/endocrine-genetic.php">Endocrine</a></li>
					<li><a href="<?php echo $site_path;?>/actia/nephro-genetic.php">Nephro Genetics</a></li>
				</ul>
			</div>
		</div>
		<?php
		$base_url = $_SERVER['SERVER_NAME'];
		if($base_url == 'localhost')
			$url = '/claria/prima/';
		elseif($base_url = 'staging.medgenome.com')
			$url = '/prima/';
		else
			$url = '/prima/';
		?>
		<div id="tabs-3" class="oncology">
			<div class="tabContent">
				<ul>
					<li><a href="<?php echo $site_path;?>/prima/somatic-cancer.php">Somatic Cancer Mutation</a></li>
				</ul>
			</div>
			<div class="tabContent1">
				<ul>
					<li><a href="<?php echo $site_path;?>/prima/lung-cancer.php">Lung Cancer</a></li>
				</ul>
			</div>
			<div class="tabContent2">
				<ul>
					<li><a href="<?php echo $site_path;?>/prima/hereditary-cancer.php">Hereditary Cancer</a></li>
				</ul>
			</div>
		</div>

	</div>
	<div class="visible-xs">
		<?php include 'index-mobile-tabs.php';?>
	</div>
</div>
