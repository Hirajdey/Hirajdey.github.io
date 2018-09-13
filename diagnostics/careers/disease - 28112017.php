<?php
require 'config/db.php';
require 'php-templates/header.php';
$disease = ['Cardiology', 'Connective Tissue Disorders and Skeletal Dysplasias', 'Dermatology', 'Endocrinology', 'ENT', 'Haematology', 'Immunology', 'Metabolic Disorders', 'Nephrology',
	'Neurology', 'Neurology - Movement Disorders', 'Neurology - Neuromuscular', 'Neurology - Others', 'Neurology - Immunology', 'Neurology - Epilepsy', 'Neurology - leukodystrophies', 'Oncology - Sequencing', 'Oncology - Immunohistochemistry', 'Oncology - Flowcytometry', 'Ophthalmology', 'NIPT', 'PGS', 'Miscellaneous'];
?>

<div class="disease-body" ng-app="diseaseApp" ng-init="sitepath='<?php echo $site_path;?>'">
	<div class="container diseasemenugenelist" ng-controller="diseaseCtrl">

		<div class="row">
			<h1>Test List</h1>
		</div>

		<div class="row searchbox">
			<h4>Search by:</h4><br>
			<div class="col-md-6></div>
			<div class="col-md-6"><input type="text" class="form-control xs-input disease-filter-box" ng-model="filter" placeholder="Test Code/Test Name/Test Method">
		</div>
		<br>

		<!-- Filter by disease category -->
		<div class="filterbox"><a href="#" ng-click="toggleDiseaseFilter()">Filter by disease category</a>
			<div class="filter-symbol glyphicon {{diseaseFilterSymbol}}" ng-click="toggleDiseaseFilter()" ></div></div>
		</div>

		<div class="row disease_row" ng-hide="diseaseFilter">
			<div class="col-md-6 disease radio radio-info">
				<input type="checkbox" value="0" ng-model="isAllSelected.selected" ng-click="getDiseaseData('<?php echo $site_path;?>', 0, isAllSelected, 'diseasefilter');">
				<label class="radio-css-label" >All</label>
			</div>
			<div class="col-md-6 disease radio radio-info" ng-repeat="category in categories">
				<!--<input type="checkbox" value="<?php /*echo $row['id'];*/?>" ng-model="disease[<?php /*echo $row['id'];*/?>]" ng-change="getDiseaseData('<?php /*echo $site_path;*/?>', '<?php /*echo $row['id'];*/?>');" ng-checked="{{allStatus}}">-->
				<input type="checkbox" value="{{category.id}}" ng-model="category.selected" ng-click="getDiseaseData('<?php echo $site_path;?>', category.id, category, 'diseasefilter');">
				<label class="radio-css-label" >{{category.name}}</label>
			</div>
		</div>
		<!-- End of Filter by disease category -->

	<!-- Filter by location -->
	<div class="filterbox"><a href="#" ng-click="toggleLocationFilter()">Filter by location</a>
		<div class="filter-symbol glyphicon {{locationFilterSymbol}}" ng-click="toggleLocationFilter()" ></div>
	</div>

	<div class="row disease_row" ng-hide="locationFilter">
		<!--<div class="col-md-6 disease radio radio-info">
			<input type="checkbox" value="0" ng-model="isLocationAllSelected.selected" ng-click="getDiseaseData('<?php /*echo $site_path;*/?>', 0, isLocationAllSelected, 'locationfilter');">
			<label class="radio-css-label" >All</label>
		</div>-->
		<div class="col-md-6 disease radio radio-info" ng-repeat="location in locations">
			<input type="checkbox" value="{{location.id}}" ng-model="location.selected" ng-click="getDiseaseData('<?php echo $site_path;?>', location.id, location, 'locationfilter');">
			<label class="radio-css-label" >{{location.name}}</label>
		</div>
	</div>

	<!-- End of Filter by location -->

		<div class="row waiting-text">
			{{waitingText}}
		</div>

		<div class="pull-right">
			<ul class="list-inline">
				<li><img class="bangalore" src="../img/bangalore.png" width="18" height="18">Bangalore</li>
				<li><img class="cochin" src="../img/cochin.png" width="18" height="18">Cochin</li>
			</ul>
		</div>

		<!-- Result -->
		<div class="table-responsive test-list-table" style="margin-bottom: 50px;">
			<table class="table table-striped">
				<thead>
				<tr class="bg-info">
					<th>#</th>
					<!--<th>Disease</th>-->
					<th>Code</th>
					<th>Test</th>
					<th>Method</th>
					<th>TAT</th>
					<th width="30%">Preferred Sample Type</th>
					<th width="10%">Gene List</th>
					<th>Apply</th>
				</tr>
				</thead>
				<tbody id="results" ng-repeat="x in list | filter:filter | limitTo : limit">
				<tr class='{{x.location == 1 ? "bangalore-row-bg" : "cochin-row-bg"}}' lazy-scroll="paginationFuntion()" lazy-scroll-trigger="50">
					<td>{{$index + 1}}.</td>
					<td width="10%" ng-if="x.location == 1"><img class="bangalore" src="../img/bangalore.png" width="18" height="18"> {{ x.code }}</td>
					<td width="10%" ng-if="x.location == 2"><img class="cochin" src="../img/cochin.png" width="18" height="18"> {{ x.code }}</td>
					<td width="10%" ng-if="x.location == ''">{{ x.code }}</td>
					<td><div ng-bind-html="x.test"></div></td>
					<td>{{ x.method }}</td>
					<td class="" width="8%">{{ x.tat | lowercase }}</td>
					<td ng-if="x.preferred_sample_type">{{ x.preferred_sample_type }}</td>
					<td>
						<div ng-if="x.gene_list_id"><a href ng-click="emailSubmit(x.gene_list_id)"><div class="text-success text-nowrap">GENE LIST</div></a></div>
						<div ng-else></div>
					</td>
					<td><a class="apply" href="<?php echo $site_path;?>/order.php?code={{x.code}}">Apply</a></td>
				</tr>
				</tbody>
				<tr id="norecord" style="display: none;">
					<td colspan="8" class="text-danger text-center lead">No Records</td>
				</tr>
			</table>
		</div>
		<!-- End -->
		<!--<div disease-desclaimer></div>-->
		<diseasedesclaimer pageurl="<?php echo $site_path;?>"></diseasedesclaimer>
		<!--<div class="disclaimer order">
			<br><br><br>
			<h4><strong>GENETIC TEST SELECTION LIST</strong></h4>
			<p></p>
			<p>
				<strong>NGS:</strong>
				Next-Generation Sequencing,
				<strong>MLPA:</strong>
				Multiplex Ligation-dependent Probe Amplification,
				<strong>PCR:</strong>
				Polymerase chain reaction,
				<strong>Sanger:</strong>
				Sanger Sequencing,
				<strong>RT-PCR:</strong>
				Real-Time PCR,
				<strong>IHC:</strong>
				Immunohistochemistry
			</p>
			<p style="padding-top:0px;padding-bottom:15px;margin-bottom:0">Click on the link below to know about Sample Requirement</p>
			<p style="margin-bottom:3em"><a id="g1-button-2" class="g1-button g1-button--medium g1-button--solid g1-button--standard g1-new-window samplerequirement" href="<?php /*echo $site_path;*/?>/sample-requirements-disclaimer.php" >SAMPLE REQUIREMENT</a></p>
			<div style="clear:both"></div>
		</div>-->
		</div>
	</div>
</div>

<script src="<?php echo $site_path;?>/js/disease.js"></script>

<?php require 'php-templates/footer.php' ?>