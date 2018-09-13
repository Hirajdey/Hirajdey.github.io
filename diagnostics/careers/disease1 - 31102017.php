<?php require 'php-templates/header.php';
$disease = ['Cardiology', 'Connective Tissue Disorders and Skeletal Dysplasias', 'Dermatology', 'Endocrinology', 'ENT', 'Haematology', 'Immunology', 'Metabolic Disorders', 'Nephrology',
	'Neurology', 'Neurology - Movement Disorders', 'Neurology - Neuromuscular', 'Neurology - Others', 'Neurology - Immunology', 'Neurology - Epilepsy', 'Neurology - leukodystrophies', 'Oncology - Sequencing', 'Oncology - Immunohistochemistry', 'Oncology - Flowcytometry', 'Ophthalmology', 'NIPT', 'PGS', 'Miscellaneous'];
?>

	<div class="disease-body" ng-app="diseaseApp" ng-init="sitepath='<?php echo $site_path;?>'">
		<div class="container diseasemenugenelist" ng-controller="diseaseCtrl">

			<div class="row">
				<!--<div class="col-md-24 order"><a href="<?php /*echo $site_path;*/?>/order.php">Order</a></div>-->
				<h1>Test List</h1>
			</div>
			<div class="row disease_row">
				<?php for($x=0; $x<count($disease); $x++){?>
					<div class="col-md-6 disease"><input type="radio" name="diseasename" ng-model="disease" value="<?php echo $disease[$x];?>" ng-click="radioClick('<?php echo $site_path;?>');"> <?php echo $disease[$x];?></div>
				<?php } ?>
			</div>

			<div class="row searchbox">
				<h4>Filter by:</h4><br>
				<div class="col-md-6"><input type="text" class="form-control xs-input" ng-model="code" placeholder="Code"></div>
				<div class="col-md-6"><input type="text" class="form-control xs-input" ng-model="test" placeholder="Test"></div>
				<div class="col-md-6"><input type="text" class="form-control" ng-model="method" placeholder="Method"></div>
				<div class="col-md-6"><input type="text" class="form-control" ng-model="tat" placeholder="TAT"></div>
			</div>

			<!-- Result -->
			<div class="table-responsive" style="margin-bottom: 50px;">
				<table class="table table-striped">
					<thead>
					<tr class="bg-info">
						<th>#</th>
						<!--<th>Disease</th>-->
						<th>Code</th>
						<th>Test</th>
						<th>Method</th>
						<th>TAT</th>
						<th>Preferred Sample Type</th>
						<th>Gene List</th>
						<th>Apply</th>
					</tr>
					</thead>
					<tbody id="results" ng-repeat="x in list | filter:code | filter:test | filter:method">
					<tr>
						<td>{{$index + 1}}.</td>
						<!--<td>{{ x.disease }}</td>-->
						<td>{{ x.code }}</td>
						<td><div ng-bind-html="x.test"></div></td>
						<td>{{ x.method }}</td>
						<td class="">{{ x.tat }}</td>
						<td ng-if="x.preferred_sample_type">{{ x.preferred_sample_type }}</td>
						<td>
							<!--<div ng-if="x.gene_list_id"><a href ng-click="open(x.gene_list_id)"><div class="text-success text-nowrap">GENE LIST</div></a></div>-->
							<div ng-if="x.gene_list_id"><a href ng-click="emailSubmit(x.gene_list_id)"><div class="text-success text-nowrap">GENE LIST</div></a></div>
							<div ng-else></div>
						</td>
						<td><a class="apply" href="<?php echo $site_path;?>/order.php?code={{x.code}}">Apply</a></td>
					</tr>
					</tbody>
					<tr id="norecord" style="display: none;">
						<td colspan="7" class="text-danger text-center lead">No Records</td>
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