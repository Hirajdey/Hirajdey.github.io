<?php
$base_url = $_SERVER['SERVER_NAME'];
if($base_url == 'localhost')
	$url = '/homepage/actia/';
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
			<!--<li><a href="javascript">ENT</a></li>-->
		</ul>
	</div>
</div>

<?php
$base_url = $_SERVER['SERVER_NAME'];
if($base_url == 'localhost')
	$url = '/homepage/prima/';
elseif($base_url = 'staging.medgenome.com')
	$url = '/prima/';
else
	$url = '/prima/';
?>
<div id="tabs-3" class="oncology">
	<div class="tabContent">
		<ul>
			<li><a href="<?php echo $site_path;?>/prima/somatic-cancer.php">Somatic Cancer Mutation</a></li>
			<!--<li><a href="javascript">Hematology Panel</a></li>
            <li><a href="javascript">Brest Cancer Panel</a></li>-->
		</ul>
	</div>
	<div class="tabContent1">
		<ul>
			<li><a href="<?php echo $site_path;?>/prima/lung-cancer.php">Lung Cancer</a></li>
			<!--<li><a href="javascript">Lung Cancer Panel</a></li>
            <li><a href="javascript">Flowcytometry</a></li>-->
		</ul>
	</div>
	<div class="tabContent2">
		<ul>
			<li><a href="<?php echo $site_path;?>/prima/hereditary-cancer.php">Hereditary Cancer</a></li>
			<!--<li><a href="javascript">Colerectal Cancer Panel</a></li>
            <li><a href="javascript">FISH Test</a></li>-->
		</ul>
	</div>
</div>