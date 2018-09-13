<?php require 'php-templates/header.php' ?>

<div class="g1-section " id="g1-section-1" ng-app="careerApp">
	<div class="g1-layout-inner" ng-controller="careerCtrl">
<h2>Administration &ndash; India</h2>
<table cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<th><strong>#</strong></th>
<th><strong>Role</strong></th>
</tr>
<tr ng-repeat="career in careers | Administaration">
	<td>{{$index + 1}}</td>
	<td><a href="<?php echo $site_path;?>/{{career.url}}" title="Careers">{{career.name}}</a></td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="top-arrow hide hidden-xs" id="scroll-top">
	<div class="fa fa-arrow-up"></div>
</div>
	<script src="<?php echo $site_path;?>/js/angularjs/careers.js"></script>
<?php require 'php-templates/footer.php' ?>