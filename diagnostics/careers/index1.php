<?php require 'php-templates/header.php';?>

<div class="wrapper banner-section-index" ng-app="indexApp" ng-init="sitepath='<?php echo $site_path;?>'">
	<div ng-controller="indexCtrl">
		<banner pageurl="<?php echo $site_path;?>"></banner>
		<genomicasia pageurl="<?php echo $site_path;?>"></genomicasia>
		<indexigp pageurl="<?php echo $site_path;?>"></indexigp>
		<indexoncopept pageurl="<?php echo $site_path;?>"></indexoncopept>
		<indexoncomd pageurl="<?php echo $site_path;?>"></indexoncomd>
		<indexngs pageurl="<?php echo $site_path;?>"></indexngs>
		<indexnipt pageurl="<?php echo $site_path;?>"></indexnipt>

		<div class="panel-group visible-xs" id="accordion" role="tablist" aria-multiselectable="true">
			<indexigpmobile pageurl="<?php echo $site_path;?>"></indexigpmobile>
			<indexoncopeptmobile pageurl="<?php echo $site_path;?>"></indexoncopeptmobile>
			<indexoncomdmobile pageurl="<?php echo $site_path;?>"></indexoncomdmobile>
			<indexngsmobile pageurl="<?php echo $site_path;?>"></indexngsmobile>
		</div>
		<indexaboutus pageurl="<?php echo $site_path;?>"></indexaboutus>
	</div>
</div>

<script src="<?php echo $site_path;?>/js/angularjs/index.js"></script>
	<div class="top-arrow hide hidden-xs" id="scroll-top">
		<div class="fa fa-arrow-up"></div>
	</div>
<?php require 'php-templates/footer.php' ?>