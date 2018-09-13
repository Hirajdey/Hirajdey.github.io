<?php require 'php-templates/header.php' ?>

<div class="wrapper about-wrapper-index visible-xs visible-sm visible-lg" ng-app="diseaseprogramApp" ng-init="sitepath='<?php echo $site_path;?>'">
	<div ng-controller="diseaseprogramCtrl">
		<diseaseprogrames pageurl="<?php echo $site_path;?>"></diseaseprogrames>
	</div>
</div>

<div class="top-arrow hide hidden-xs" id="scroll-top">
	<div class="fa fa-arrow-up"></div>
</div>
<script src="<?php echo $site_path;?>/js/angularjs/disease-program.js"></script>
<?php require 'php-templates/footer.php' ?>