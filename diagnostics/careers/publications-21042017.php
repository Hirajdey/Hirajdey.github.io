<?php require 'php-templates/header.php' ?>

<div class="publications" ng-app="publicationsApp" ng-init="sitepath='<?php echo $site_path;?>'">
	<div ng-controller="publicationsCtrl">
		<div class="container">
			<h2>Publications</h2>
			<!--<div class="row top_links">
				<div class="col-xs-24 col-sm-7 col-md-5"><a class="<?php /*if(!isset($_REQUEST['title']) || ($_REQUEST['title'] == 'Research Papers')) echo 'active';*/?>" href="<?php /*echo $site_path;*/?>/publications.php?title=Research Papers">Research Papers</a></div>
				<div class="col-xs-24 col-sm-7 col-md-5"><a class="<?php /*if($_REQUEST['title'] == 'Posters presented') echo 'active';*/?>" href="<?php /*echo $site_path;*/?>/publications.php?title=Posters presented">Posters presented</a></div>
				<div class="col-xs-24 col-sm-10 col-md-14"><a class="<?php /*if($_REQUEST['title'] == 'White Papers') echo 'active';*/?>" href="<?php /*echo $site_path;*/?>/publications.php?title=White Papers">White Papers</a></div>
			</div>-->
			<div class="row top_links">
				<div class="col-xs-24 col-sm-7 col-md-5" ng-click="showResearch()"><a ng-class="addClassResearch()">Research Papers</a></div>
				<div class="col-xs-24 col-sm-7 col-md-5" ng-click="showPosters()"><a ng-class="addClassPosters()">Posters Presented</a></div>
				<div class="col-xs-24 col-sm-10 col-md-14" ng-click="showPapers()"><a ng-class="addClassPapers()">White Papers</a></div>
			</div>

			<div class="text-center col-md-10 col-lg-offset-6"><input type="text" class="form-control" ng-model="search" placeholder="Search"></div><br><br>

			<!-- Research -->
			<div class="research" id="research">
				<?php require 'php-templates/publications-research-papers.php'; ?>
			</div>

			<!-- Posters -->
			<div class="posters" id="posters">
				<?php require 'php-templates/publications-posters-presented.php'; ?>
			</div>

			<!-- Papers -->
			<div class="papers" id="papers">
				<?php require 'php-templates/publications-white-papers.php'; ?>
			</div>
		</div>
	</div>
</div>

	<!-- For Mobile-->
	<!--<div class="mobile visible-xs">
		<div class="container">
		<div class="row odd">
			<div class="col-xs-24 text-center">04/08/2016</div>
			<div class="col-xs-24 text-justify">Comprehensive genomic analysis of malignant pleural mesothelioma identifies recurrent mutations, gene fusions and splicing alterations</div>
			<div class="col-xs-24 text-center"><img src="<?php /*echo $site_path;*/?>/img/icons/icon-download.png"></div>
		</div>

		<div class="row">
			<div class="col-xs-24 text-center">02/07/2016</div>
			<div class="col-xs-24 text-justify">4th Annual Immuno-Oncology Summit</div>
			<div class="col-xs-24 text-center"><img src="<?php /*echo $site_path;*/?>/img/icons/icon-download.png"></div>
		</div>

		<div class="row odd">
			<div class="col-xs-24 text-center">05/06/2016</div>
			<div class="col-xs-24 text-justify">2nd International Conference on Eye and Vision</div>
			<div class="col-xs-24 text-center"><img src="<?php /*echo $site_path;*/?>/img/icons/icon-download.png"></div>
		</div>

		<div class="row">
			<div class="col-xs-24 text-center">01/05/2016</div>
			<div class="col-xs-24 text-justify">66th Annual Meeting of the American Society of Human Genetics</div>
			<div class="col-xs-24 text-center"><img src="<?php /*echo $site_path;*/?>/img/icons/icon-download.png"></div>
		</div>
		</div>
	</div>-->
	<!-- End of Mobile-->

<script src="<?php echo $site_path;?>/js/angularjs/publications.js"></script>

<?php require 'php-templates/footer.php';?>