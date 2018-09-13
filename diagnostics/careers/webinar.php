<?php require 'php-templates/header.php' ?>

<div class="webinar" ng-app="webinarApp">
	<div ng-controller="webinarCtrl">
		<div class="container">

			<h2>Webinar</h2>
			<div class="row top_links">
				<div class="col-xs-24 col-sm-7 col-md-5" ng-click="showPresentations()"><a ng-class="addClassPresentations()">Presentations</a></div>
				<div class="col-xs-24 col-sm-7 col-md-5" ng-click="showVideo()"><a ng-class="addClassVideo()">Video</a></div>
				<div class="col-xs-24 col-sm-10 col-md-14" ng-click="showPosters()"><a ng-class="addClassPosters()">Posters</a></div>
			</div>
		</div>
		<!-- Presentations -->
		<?php /*if(!isset($_REQUEST['title']) || ($_REQUEST['title'] == 'presentations')){*/?>
			<div class="container presentations" ng-hide="presentations">
				<div class="tab-pane fade in" id="tab1info"><?php include('php-templates/webinar-presentations.php');?></div>
			</div>
		<?php /*} */?>
		<!-- End of Presentations -->

		<?php /*if(!isset($_REQUEST['title']) || ($_REQUEST['title'] == 'video')){*/?>
			<div class="container video" ng-show="video" style="display: none;">
				<?php include('php-templates/webinar-video.php');?>
			</div>
		<?php /*} */?>
		<!-- End of Video -->

		<!-- Posters -->
		<?php /*if(isset($_REQUEST['title']) && ($_REQUEST['title'] == 'posters')){*/?>
		<div class="container posters" ng-show="posters" style="display: none;">
			<div class="row">
				<div class="col-md-6 left"><?php include('php-templates/webinar-posters-left.php');?></div>
				<div class="col-md-18"><?php include('php-templates/webinar-posters.php');?></div>
			</div>
		</div>
		<?php /*} */?>
		<!-- End of Posters -->
		</div>
</div>

<script src="<?php echo $site_path;?>/js/webinar.js"></script>

<?php require 'php-templates/footer.php' ?>