<?php
require 'config/db.php';
require 'config/config.php';
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="robots" content="noindex,nofollow" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;user-scalable=true;"/>
		<meta name="HandheldFriendly" content="True"/>
		<meta name="robots" content="noindex, nofollow"/>
		<title>Medgenome | Press</title>

		<script src="js/vendors/angular-1.5.8.min.js"></script>
		<script src="js/vendors/angular-sanitize.js"></script>
		<script src="js/vendors/ui-bootstrap-tpls-0.14.3.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/responsive.css"/>
		<link rel="stylesheet" href="css/questaiinaire.css"/>
		<link rel="stylesheet" href="css/font-awesome.css"/>
		<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script src="js/vendors/jquery-2.1.4.min.js"></script>
	</head>
<body>
<div class="header">

	<?php require 'includes/logo.php';?>

	<div class="headerMenu">
		<?php require 'includes/menu.php';?>
	</div>
	<div class="mobileMenu">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="dropDown mobmenu" style="display: none;">
		<ul>
			<li><a title ="HOME" href="javascript:;">Home</a></li>
			<!--<li><a title ="TEST CATALOG" href="javascript:;">test cATALOG</a></li>-->
			<li><a title ="CLINICIANS LOGIN" href="javascript:;">Clinicians login</a></li>
			<li><a title ="FAQ’S" href="javascript:;">FAQ’S</a></li>
			<!--<li><a title ="KNOWLEDGE HUB" href="javascript:;">knowledge Hub</a></li>-->
			<li><a title ="RESEARCH" href="https://www.medgenome.com/research">research</a></li>
			<li><a title ="ABOUT" href="javascript:;">ABOUT</a></li>
		</ul>
	</div>

	<?php require 'includes/header-contact.php';?>

</div>
<div class="order-body" id="questionnaire-body">
	<div ng-app="questionnaireApp">
		<div ng-controller="questionnaireCtrl">
			<?php if(!isset($_REQUEST['key'])){?>
			<div class="container notes">
				<div class="row">
					<div class="col-md-16">
						<div class="title"><h4>Preliminary Screening Procedure:</h4></div>
						<div>The online test is our primary screen. You will be asked to attempt 20 questions, each carrying equal weightage. Each question tests your knowledge about bioinformatics in general, and NGS in particular. Attempt the test to the best of your knowledge. Remember: after the test – you may have to attend a telephonic technical interview too.</div>
						<br>
						<div class="title"><h4>By taking this test, you agree to abide by the honor code:</h4></div>
						<div>
							1. You will not ask anyone else to impersonate you, to take this test. <br>
							2. You will not, at any time of the test, cheat by looking up answers. <br>
							3. You will not reveal the questions you have attempted to others who may take the test.
						</div>
						<br>
						<div>The email address you provide for the test must match the email address you have given in your CV. If you attempt to retake the test using an alternative email address, the test scores will be nullified, and the email address you used to take the test will be banned from any future attempt.</div>
						<br>
						<div><b class="text-success">Good Luck !</b></div>
					</div>
					<div class="col-md-8">

						<form novalidate class="form">

								<!-- Form Name -->
									<div class="text-center">
										<h1>Sign In</h1>
									</div>
								<!--</div>-->

								<!-- Name input-->
									<div>
										<input ng-model="name" placeholder="Name" class="form-control input-md" type="text">
										<div ng-show="nameValid" class="text-danger">Name field is not valid</div>
									</div>


								<!-- Email input-->
									<div>
										<input ng-model="email" placeholder="Email" class="form-control input-md" type="email">
										<div ng-show="emailValid" class="text-danger">Email field is not valid</div>
										<div ng-show="emailExist" class="text-danger">This email is already exist</div>
									</div>


								<!-- Mobile input-->
									<div>
										<input ng-model="mobile" placeholder="Mobile" class="form-control input-md" type="number">
										<div ng-show="mobileValid" class="text-danger">Mobile field is not valid</div>
										<div ng-show="mobileExist" class="text-danger">This contact number is already exist</div>
									</div>

								<!-- Button -->
									<div class="text-center">
										<button ng-click="submit()" type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-info btn-lg">Submit</button>
									</div>
						</form>
					</div>
				</div>
			</div>
				<!-- Activation Section -->
				<?php } elseif(isset($_REQUEST['key'])) { //echo "SELECT id FROM user WHERE activation_key = '".$_REQUEST['key']."' AND activation = 0";exit;
					$activation_key_check = $conn->query("SELECT user_name, id FROM user WHERE activation_key = '".$_REQUEST['key']."' AND activation = 0");
				?>
				<div id="activation">
						<div class="container order-mail-sent" >
							<div class="row">
								<div class="text-success"><h2><?php if($activation_key_check->num_rows == 1){
											$row = $activation_key_check->fetch_assoc(); $current_user_id = $row['id'];?>Activation successfully, <br> <a ng-click="questionnairepage(<?=$current_user_id;?>)">click here</a> to start your test
											<?php // Update the activation link?>
											<?php $conn->query("UPDATE user SET activation = 1 WHERE id = '".$row['id']."'");
										 } else {?>This activation key is not valid<?php } ?></h2></div>
							</div>
						</div>
				</div>
				<?php } ?>
			<!-- End of Activation Section -->

			<!-- Questionnaire Section -->
			<?php if(isset($_REQUEST['key'])){ ?>
			<div class="quentionnairepage" ng-show="questionnaire">
				<div class="container-fluid questionnaire-header-bg">
					<div class="container">
						<div class="row hidden-xs hidden-md hidden-sm questionnaire-header">
							<div class="col-md-10">Online test</div>
							<div class="col-md-7">Time Left : {{ timeMinus }} mins</div>
							<div class="col-md-7 text-right welcomeuser">Hi <?php if(isset($row['user_name'])) echo $row['user_name'];?>! <span class="glyphicon glyphicon-user" aria-hidden="true"></span></b></div>
						</div>
					</div>
					<!-- for mobile-->
					<div class="row hidden-lg">
						<div class="col-md-24 mobilewelcomeuser">Hi <?php if(isset($row['user_name'])) echo $row['user_name'];?>! <span class="glyphicon glyphicon-user" aria-hidden="true"></span></b></div>
					</div>
					<div class="row hidden-lg">
						<div class="col-md-24 mobiletimeleft">Time Left : {{ timeMinus }} mins</div>
					</div>
					<!-- end of for mobile-->
				</div>
				<div class="container testnotes hidden-xs hidden-md hidden-sm">
					<div class="row">
						<div class="text-center">You need to answer 20 objective type questions within 20 minutes. All questions are mandatory <br> to be answered. Person taking exam has to finish this test within 20 minutes.</div>
					</div>
				</div>

				<!-- for mobile-->
				<div class="container-fluid testnotes hidden-lg">
					<div class="row">
						<div class="text-center">You need to answer 20 objective type questions within 20 minutes. All questions are mandatory <br> to be answered. Person taking exam has to finish this test within 20 minutes.</div>
					</div>
				</div>
				<!-- end of for mobile-->

				<div class="container-fluid">
					<?php
					$alphabet = ["A", "B", "C", "D", "E", "F", "G"];
					$i = 1;
					$questionnaire = $conn->query("SELECT * FROM questionnaire ORDER BY RAND() limit 0,20");
					//$questionnaire = $conn->query("SELECT * FROM questionnaire limit 0,20");
					while($row = $questionnaire->fetch_assoc()) {
						$options = explode("#", $row['options']);
					?>
					<div class="container hidden-xs hidden-md hidden-sm">
						<div class="row">
							<div class="col-md-24 question"><?php echo $i.".".$row['question'];?></div>
						</div>
						<div class="row">
							<div class="col-md-24">
								<ul>
									<?php foreach ($options as $key=>$option){?>
									<li id="<?=$i;?><?=($key+1);?>"><span class="alphaber-order"><?=$alphabet[$key];?></span><input type="radio" ng-model="question<?=$i;?>" value="<?=$row['id'];?><?=$alphabet[$key];?>" ng-click="radioClick(<?=$i;?><?=($key+1);?>);"> <span><?=$option;?></span></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>

					<!-- for mobile-->
					<div class="container-fluid hidden-lg">
						<div class="row">
							<div class="col-md-24 question"><?php echo $i.".".$row['question'];?></div>
						</div>
						<div class="row">
							<div class="col-md-24">
								<ul>
									<?php foreach ($options as $key=>$option){?>
										<li id="<?=$i;?><?=($key+1);?>"><span class="alphaber-order"><?=$alphabet[$key];?></span><input type="radio" ng-model="question<?=$i;?>" value="<?=$option;?>"> <span><?=$option;?></span></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- end of for mobile-->

					<?php $i++; } ?>
					<div class="row text-center">
						<button class="btn btn-info btn-lg" ng-click="testSubmit(<?=$current_user_id;?>,1,0)">Submit</button>
					</div>
				</div>
			</div>
			<?php }  ?>
			<!-- End of Questionnaire Section -->

			<!-- Time out popup Section -->
			<?php if(isset($_REQUEST['key'])){?>
				<div class="container text-center">
						<div class="row">
							<div class="" id="myModal" role="dialog" style="display: none;">
								<div class="modal-dialog modal-xs">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title"><strong class="text-danger">Time Out!</strong></h4>
										</div>
										<div class="modal-body">
											<p>Online test time is over</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal" ng-click="timeoutclose(<?=$current_user_id;?>)">Ok</button>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			<?php } ?>
			<!-- End of Time out popup Section -->

			<!-- Alert if they missed questions Section -->
			<?php if(isset($_REQUEST['key'])){ ?>
			<div class="container text-center">
				<div class="row">
					<div class="" id="missedQuestionsAlert" role="dialog" ng-show="missedQuestionsAlert">
						<div class="modal-dialog modal-xs">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"><h3 class="text-danger">Alert!</h3></h4>
								</div>
								<div class="modal-body">
									<p><h4>You missed {{ balanceQuestions }} questions</h4></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal" ng-click="back()">Back</button>
									<button type="button" class="btn btn-default" data-dismiss="modal" ng-click="missedQuestion(alert)">Ok</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- End of Alert if they missed questions Section -->

			<!-- Result Section -->
			<?php if(isset($_REQUEST['key'])){ ?>
			<div class="resultsection" ng-show="resultsection">
				<div class="container">
					<!--<div class="row"><div class="col-md-6"><h2>Test Result</h2></div></div>-->
					<div class="row testresult">
						<div><h2><b class="text-danger">{{timeout}}<b></h2></div>
						<div><h2>You have {{testResult}} in the test</h2></div>
						<hr>
						<div><h2>Your Score</h2></div>
						<div class="score"><h2><span>{{score}}%</span></h2></div>
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- End of Result Section -->
		</div>
	</div>
</div>

<div class="container order-mail-sent register-success" style="display: none" id="mail-sent">
	<div class="row text-center alert alert-success">
		<div class="text-danger"><h2>You are signed in successfully, <br> an activation link was sent to your registered email id, please check it!</h2></div>
	</div>
</div>
<div class="container order-mail-failed" style="display: none" id="mail-sent-failed">
	<div class="row">
		<div><h2 class="text-danger">Mail Send Failed</h2></div>
	</div>
</div>

<script src="js/questionnaire.js"></script>
<?php require 'includes/footer-contact.php';?>
<script type="text/javascript" src="js/flag.js"></script>