<div id="dropdown-1" class="dropdown dropdown-processed" style="margin-top: 2px !important;">
		<a id="claria" class="dropdown-link" href="#">
				<span class="listbg">
					<span class="listIcon catIcon1"></span>
					<span class="tabText">Prenatal testing</span>
					<span class="white-color-change white-divider"></span>
					<!--<span class="hoverEffect"></span>
					<span class="white-divider"></span>-->
				</span>
		</a>

	<div class="dropdown-container" style="display: none;">
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
</div>

<div id="dropdown-2" class="dropdown dropdown-processed">
	<a id="actia" class="dropdown-link" href="#">
			<span class="listbg">
				<span class="listIcon catIcon2"></span>
				<span class="tabText">Postnatal testing</span>
				<span class="white-color-change white-divider"></span>
				<!--<span class="hoverEffect"></span>
                <span class="white-divider"></span>-->
			</span>
	</a>
	<div class="dropdown-container" style="display: none;">
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
</div>

<div id="dropdown-3" class="dropdown dropdown-processed">
	<a id="prima" class="dropdown-link" href="#">
			<span class="listbg">
				<span class="listIcon catIcon3"></span>
				<span class="tabText">Oncology</span>
				<span class="white-color-change white-divider"></span>
				<!--<span class="hoverEffect"></span>
                <span class="white-divider"></span>-->
			</span>
	</a>
	<div class="dropdown-container" style="display: none;">
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

<script src="<?php echo $site_path;?>/js/mobile-tab.js"></script>