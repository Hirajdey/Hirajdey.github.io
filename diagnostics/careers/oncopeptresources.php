<?php
session_start();
require 'php-templates/header.php';
?>

<div class="oncopeptAdditional" ng-app="oncopeptApp" ng-init="sitepath='<?php echo $site_path;?>';act='<?php echo $_REQUEST['act'];?>'">
	<div ng-controller="oncopeptCtrl">
		<div class="container">
			<?php if(isset($_SESSION['username']) && $_SESSION['username']!="") {?>
			<div class="row">
				<div class="col-md-5 pull-right">Welcome <?php echo urldecode($_SESSION['username']);?> ! <a href="?act=logout"><b> logout</b></a></div>
			</div>
			<?php } ?>
			<h2>OncoPept</h2>
			<div class="row top_links">
				<!--<div class="col-xs-24 col-sm-7 col-md-4" ng-click="showPresentations()"><a id="presentationsActive" class="<?php /*if($_REQUEST['act'] == 'presentations') echo 'active';*/?>" ng-class="addClassPresentations()">Presentations</a></div>
				<div class="col-xs-24 col-sm-10 col-md-4" ng-click="showPosters()"><a id="postersActive" class="<?php /*if($_REQUEST['act'] == 'posters') echo 'active';*/?>" ng-class="addClassPosters()">Posters</a></div>
				<div class="col-xs-24 col-sm-10 col-md-5" ng-click="showProduct()"><a id="productsActive" class="<?php /*if($_REQUEST['act'] == 'products') echo 'active';*/?>" ng-class="addClassProduct()">Product Brochures</a></div>
				<div class="col-xs-24 col-sm-7 col-md-3" ng-click="showVideo()"><a id="videosActive" class="<?php /*if($_REQUEST['act'] == 'videos') echo 'active';*/?>" ng-class="addClassVideo()">Videos</a></div>
				<div class="col-xs-24 col-sm-10 col-md-4" ng-click="showPapers()"><a id="papersActive" class="<?php /*if($_REQUEST['act'] == 'papers') echo 'active';*/?>" ng-class="addClassPapers()">White Papers</a></div>
				<div class="col-xs-24 col-sm-10 col-md-4" ng-click="showEvent()"><a id="eventsActive" class="<?php /*if($_REQUEST['act'] == 'events') echo 'active';*/?>" ng-class="addClassEvent()">Events</a></div>-->

				<div class="col-xs-24 col-sm-7 col-md-4"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=presentations" class="<?php if($_REQUEST['act'] == 'presentations') echo 'active';?>" ng-class="addClassPresentations()">Presentations</a></div>
				<div class="col-xs-24 col-sm-10 col-md-4"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=posters" class="<?php if($_REQUEST['act'] == 'posters') echo 'active';?>" ng-class="addClassPosters()">Posters</a></div>
				<div class="col-xs-24 col-sm-10 col-md-5"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=products" class="<?php if($_REQUEST['act'] == 'products') echo 'active';?>" ng-class="addClassProduct()">Product Brochures</a></div>
				<div class="col-xs-24 col-sm-7 col-md-3"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=videos" class="<?php if($_REQUEST['act'] == 'videos') echo 'active';?>" ng-class="addClassVideo()">Videos</a></div>
				<div class="col-xs-24 col-sm-10 col-md-4"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=whitepapers" class="<?php if($_REQUEST['act'] == 'whitepapers') echo 'active';?>" ng-class="addClassPapers()">White Papers</a></div>
				<div class="col-xs-24 col-sm-10 col-md-4"><a href="<?php echo $site_path;?>/oncopeptresources.php?act=events#events" class="<?php if($_REQUEST['act'] == 'events') echo 'active';?>" ng-class="addClassEvent()">Events</a></div>
			</div>
		</div>
		<!-- Presentations -->
			<div class="container presentations" id="presentationsSection" style="display: none;">
				<?php include('oncopeptresources/presentations.php');?>
			</div>

			<div class="container <?php if($_REQUEST['act'] == 'presentations') echo 'minHight';?>" id="presentationsSectionPHP">
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'presentations'){?>
					<?php include('oncopeptresources/presentations.php');?>
				<?php } ?>
			</div>
		<!-- End of Presentations -->

		<!-- Posters -->
		<div class="container posters" id="postersSection" style="display: none;">
			<?php include('oncopeptresources/posters.php');?>
		</div>
		
		<div class="container <?php if($_REQUEST['act'] == 'posters') echo 'minHight';?>" id="postersSectionPHP">
			<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'posters'){?>
				<?php include('oncopeptresources/posters.php');?>
			<?php } ?>
		</div>
		<!-- End of Posters -->

		<!-- Product Brochures -->
		<div class="container product" id="productsSection" style="display: none;">
			<?php include('oncopeptresources/product.php');?>
		</div>
		<div class="container <?php if($_REQUEST['act'] == 'products') echo 'minHight';?>" id="productsSectionPHP">
			<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'products'){?>
				<?php include('oncopeptresources/product.php');?>
			<?php } ?>
		</div>
		<!-- End of Video -->

		<!-- Videos -->
		<div class="container video" id="videosSection" style="display: none;">
			<?php include('oncopeptresources/video.php');?>
		</div>
		<div class="container <?php if($_REQUEST['act'] == 'videos') echo 'minHight';?>" id="videosSectionPHP">
			<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'videos'){?>
				<?php include('oncopeptresources/video.php');?>
			<?php } ?>
		</div>
		<!-- End of Video -->

		<!-- White Papers -->
		<div class="container papers" id="papersSection" style="display: none;">
			<?php include('oncopeptresources/white-papers.php');?>
		</div>
		<div class="container <?php if($_REQUEST['act'] == 'whitepapers') echo 'minHight';?>" id="papersSectionPHP">
			<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'whitepapers'){?>
				<?php include('oncopeptresources/white-papers.php');?>
			<?php } ?>
		</div>
		<!-- End of White Papers -->

		<!-- Event -->
		<div class="container event" id="eventsSection" style="display: none;">
			<?php include('oncopeptresources/event.php');?>
		</div>
		<div class="container <?php if($_REQUEST['act'] == 'events') echo 'minHight';?>" id="eventsSectionPHP">
			<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'events'){?>
				<?php include('oncopeptresources/event.php');?>
			<?php } ?>
		</div>
		<!-- End of Event -->

		<!-- logout-->
		<?php
		if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'logout') {
			session_destroy();
			header("Location:$site_path/oncopept.php");
		}
		?>

		<!--<div id="OncoPeptsolutions" class="wrapper" ng-show="downloadform">
			Download form
		</div>-->

		</div>
</div>

<script>
	$("#presentationsActive").click(function(){
		$("#presentationsSection").show();
		$("#postersSection").hide();
		$("#productsSection").hide();
		$("#videosSection").hide();
		$("#papersSection").hide();
		$("#eventsSection").hide();

		$("#presentationsSectionPHP").hide();
		$("#postersSectionPHP").hide();
		$("#productsSectionPHP").hide();
		$("#videosSectionPHP").hide();
		$("#papersSectionPHP").hide();
		$("#eventsSectionPHP").hide();

		$("#presentationsActive").addClass('active');
		$("#postersActive").removeClass('active');
		$("#productsActive").removeClass('active');
		$("#videosActive").removeClass('active');
		$("#papersActive").removeClass('active');
		$("#eventsActive").removeClass('active');

	});

	$("#postersActive").click(function(){
		$("#postersSection").show();
		 $("#presentationsSection").hide();
		 $("#productsSection").hide();
		 $("#videosSection").hide();
		 $("#papersSection").hide();
		 $("#eventsSection").hide();

		$("#presentationsSectionPHP").hide();
		$("#postersSectionPHP").hide();
		$("#productsSectionPHP").hide();
		$("#videosSectionPHP").hide();
		$("#papersSectionPHP").hide();
		$("#eventsSectionPHP").hide();

		$("#postersActive").addClass('active');
		 $("#presentationsActive").removeClass('active');
		 $("#productsActive").removeClass('active');
		 $("#videosActive").removeClass('active');
		 $("#papersActive").removeClass('active');
		 $("#eventsActive").removeClass('active');
	});

	$("#productsActive").click(function(){
		$("#productsSection").show();
		 $("#postersSection").hide();
		 $("#presentationsSection").hide();
		 $("#videosSection").hide();
		 $("#papersSection").hide();
		 $("#eventsSection").hide();

		$("#presentationsSectionPHP").hide();
		$("#postersSectionPHP").hide();
		$("#productsSectionPHP").hide();
		$("#videosSectionPHP").hide();
		$("#papersSectionPHP").hide();
		$("#eventsSectionPHP").hide();

		$("#productsActive").addClass('active');
		 $("#postersActive").removeClass('active');
		 $("#presentationsActive").removeClass('active');
		 $("#videosActive").removeClass('active');
		 $("#papersActive").removeClass('active');
		 $("#eventsActive").removeClass('active');
	});

	$("#videosActive").click(function(){
		$("#videosSection").show();
		 $("#postersSection").hide();
		 $("#presentationsSection").hide();
		 $("#productsSection").hide();
		 $("#papersSection").hide();
		 $("#eventsSection").hide();

		$("#presentationsSectionPHP").hide();
		$("#postersSectionPHP").hide();
		$("#productsSectionPHP").hide();
		$("#videosSectionPHP").hide();
		$("#papersSectionPHP").hide();
		$("#eventsSectionPHP").hide();

		$("#productsActive").removeClass('active');
		 $("#postersActive").removeClass('active');
		 $("#presentationsActive").removeClass('active');
		 $("#videosActive").addClass('active');
		 $("#papersActive").removeClass('active');
		 $("#eventsActive").removeClass('active');
	});

	$("#papersActive").click(function(){
		$("#papersSection").show();
		$("#postersSection").hide();
		$("#presentationsSection").hide();
		$("#productsSection").hide();
		$("#eventsSection").hide();
		$("#videosSection").hide();

		$("#presentationsSectionPHP").hide();
		$("#postersSectionPHP").hide();
		$("#productsSectionPHP").hide();
		$("#videosSectionPHP").hide();
		$("#papersSectionPHP").hide();
		$("#eventsSectionPHP").hide();

		$("#productsActive").removeClass('active');
		$("#postersActive").removeClass('active');
		$("#presentationsActive").removeClass('active');
		$("#videosActive").removeClass('active');
		$("#papersActive").addClass('active');
		$("#eventsActive").removeClass('active');
	});

	$("#eventsActive").click(function(){
		$("#eventsSection").show();
		$("#postersSection").hide();
		$("#presentationsSection").hide();
		$("#productsSection").hide();
		$("#videosSection").hide();
		$("#papersSection").hide();

		$("#presentationsSectionPHP").hide();
		$("#postersSectionPHP").hide();
		$("#productsSectionPHP").hide();
		$("#videosSectionPHP").hide();
		$("#papersSectionPHP").hide();
		$("#eventsSectionPHP").hide();

		$("#productsActive").removeClass('active');
		$("#postersActive").removeClass('active');
		$("#presentationsActive").removeClass('active');
		$("#videosActive").removeClass('active');
		$("#papersActive").removeClass('active');
		$("#eventsActive").addClass('active');
	});
</script>

<script src="<?php echo $site_path;?>/js/oncopept.js"></script>

<?php require 'php-templates/footer.php' ?>