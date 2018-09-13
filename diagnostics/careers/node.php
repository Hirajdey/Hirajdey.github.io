<?php require 'php-templates/header.php' ?>

<div class="container" ng-app="nodeApp" ng-controller="nodeCtrl">
	<div class="lead">Node connected with DB</div>
		<div ng-repeat="event in events" class="row">
			<div class="col-md-1">{{ ($index + 1) }}.</div>
			<div class="col-md-8">{{ event.title }}</div>
			<div class="col-md-5">{{ event.venue }}</div>
			<div class="col-md-10"><a href="{{ event.url }}" target="_blank">{{ event.url }}</a></div>
		</div>
</div>
<script src="<?php echo $site_path;?>/js/angular_node.js"></script>

<?php require 'php-templates/footer.php'; ?>