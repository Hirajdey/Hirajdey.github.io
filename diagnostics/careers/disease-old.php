<?php require 'php-templates/header.php' ?>
<div class="disease-body" ng-app="diseaseApp">
	<div class="container diseasemenugenelist" ng-controller="diseaseCtrl">
		<div class="row">
			<div class="col-md-6"><h3>By Disease</h3></div>
            <div class="col-md-6 order"><a href="<?php echo $site_path;?>/order.php">Order</a></div>
		</div>
		<div class="row">
			<?php require 'php-templates/left.php';?>
			<div class="col-md-12 order">
			<div class=""><input type="text" ng-model="disease" ng-keypress="searchDisease()"></div>
				<ul id="diseaseList" style="display: none">
					<li ng-repeat="x in names | filter:disease">
						{{ x }}
					</li>
				</ul>

				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "cardiology") require 'php-templates/cardiology.php'; ?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "connective-tissue-disorder") require 'php-templates/connective-tissue-disorder.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "dermatology") require 'php-templates/dermatology.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "endocrinology") require 'php-templates/endocrinology.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "ent") require 'php-templates/ent.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "haematology") require 'php-templates/haematology.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "immunology") require 'php-templates/immunology.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "metabolic-disorders") require 'php-templates/metabolic-disorders.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "miscellaneous") require 'php-templates/miscellaneous.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "nephrology") require 'php-templates/nephrology.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "neurology") require 'php-templates/neurology.php';?>
				<?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == "oncology") require 'php-templates/oncology.php';?>
                <div class="disclaimer"> <h4 class="GreyHd" style="color:#666">
<strong>GENETIC TEST SELECTION LIST:</strong>
</h4>
<p></p>
<p>
<strong>NGS</strong>
: Next-Generation Sequencing,
<strong>Sanger</strong>
: Sanger Sequencing,
<strong>MLPA</strong>
: Multiplex Ligation-dependent Probe Amplification,
<strong>RT-PCR</strong>
: Real-Time PCR,
<strong>IHC</strong>
: Immunohistochemistry
</p>
<p style="padding-top:0px;padding-bottom:15px;margin-bottom:0">Click on the link below to know about Sample Requirement</p>
<p style="margin-bottom:3em"><a id="g1-button-2" class="g1-button g1-button--medium g1-button--solid g1-button--standard g1-new-window samplerequirement" href="sample-requirements-disclaimer.php" >SAMPLE REQUIREMENT</a></p>
<div style="clear:both"></div>
</div>
			</div>
		</div>
	</div>
</div>

<script>
	angular
		.module("diseaseApp",[])
		.controller("diseaseCtrl", function ($scope) {

			$scope.names = [
				'Cardiology',
				'Connective Tissue Disorder',
				'Dermatology',
				'Endocrinology',
				'ENT',
				'Haematology',
				'Immunology',
				'Metabolic Disorders',
				'Miscellaneous',
				'Nephrology',
				'Neurology',
				'Oncology'
			];
			$scope.searchDisease = function () {
				$("#diseaseList").show();
				if(isEmpty($scope.disease)){
					alert("empty");
				} else alert("not empty");
			}
	});
</script>

<?php require 'php-templates/footer.php' ?>