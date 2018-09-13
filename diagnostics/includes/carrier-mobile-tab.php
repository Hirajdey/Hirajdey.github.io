<div id="dropdown-1" class="dropdown dropdown-processed" style="margin-top: 2px !important;">
		<a id="claria" class="dropdown-link" href="#">
				<span class="listbg">
					<span class="listIcon catIcon1"></span>
					<span class="tabText">Prenatal testing</span>
					<span class="hoverEffect"></span>
				</span>
		</a>

	<div class="dropdown-container" style="display: none;">
		<?php include 'mobile-carrier-claria-tab-content.php';?>
	</div>
</div>

<div id="dropdown-2" class="dropdown dropdown-processed">
	<a id="actia" class="dropdown-link" href="#">
			<span class="listbg">
				<span class="listIcon catIcon2"></span>
				<span class="tabText">Postnatal testing</span>
				<span class="hoverEffect"></span>
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
				<span class="hoverEffect"></span>
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

<script src="<?php echo $site_path;?>/js/carrier-mobile-tab.js"></script>