<?php
// require 'config/db.php';
// require 'config/config.php';
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
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/testlist.css"/>
<link rel="stylesheet" href="css/responsive.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

	
	<script>
	
		window.onload = function(){

			this.location.reload(true);

		}

	</script>

</head>
<body>
<div class="header">

	<?php require 'includes/logo.php';?>

  <div class="headerMenu"> 
  	<?php require 'includes/menu.php';?>
  </div>
	<?php require 'includes/mobile-menu.php';?>
	
  <?php require 'includes/header-contact.php';?>

</div>

<div class="bestInClass giagnosticsPage media mt-0">

	<div class="mdg-testlist-outer-wrapper">
		<div class="mdg-testlist-wrap container">

			<div class="yourtest-order-row">
				<div class="testorder-heading-box">
					<h2>Your Test Order</h2>
				</div>	
				<div class="backtotest-box">
					<button class="backtoTestCatBtn">Back to Test Catalog</button>
				</div>	
			</div>
			
			<div class="testPageHeading-row">
				<div class="testPageHeading-box">
					<h3 class="pressHeading">Prima Test Catalog</h3>
				</div>

				<div class="download-box">
					<a class="downloadBtn" href="download-test-catalog.php">Download Test Catalog</a>
				</div>
			</div>

			<div class="search-download-row">
				<div class="search-box">
					<input class="searchTestList searchAll searchAllInput" type="search" placeholder="Search by condition / code, disease, gene name, test name"/>
				</div>

				<div class="showSelectedItem">
					<span>Cart : </span>
					<input class="cartCount" type="text" value="0" readonly/>
				</div>

				<div class="next-box orderbtn-row">
					<button class="testOrderBtn" id="testOrderBtnUp" trgt_orderlist="orderList">Order</button>	
					<button class="testConfirm" id="testConfirmUp">Confirm</button>
				</div>		
			</div>

			<div class="testDatahead">
				<div></div>
				<!-- <div class="slhead">#</div> -->
				<div class="codehead">Code</div>
				<!-- <div class="segmenthead">Segment</div> -->
				<div class="dchead">Disease Category
					<div class="adarow">
						<span class="ase"></span>
						<span class="dse"></span>
					</div>
				</div>
				<div class="testhead">Test
					<div class="adarow">
						<span class="ase"></span>
						<span class="dse"></span>
					</div>
				</div>
				<div class="methodhead">Method</div>
				<div class="psthead">Preferred Sample Type
					<div class="adarow">
						<span class="ase"></span>
						<span class="dse"></span>
					</div>
				</div>
				<div class="tathead">TAT
					<div class="adarow">
						<span class="ase"></span>
						<span class="dse"></span>
					</div>
				</div>
				<div class="genehead">Gene list</div>
				<!-- <div class="actionheade">Action</div> -->
			</div>

			<ul class="listoftestData dataTable">
				
			</ul><!-- eo listoftestData <-->

			<div class="pagination-next-row">
				<div class="pagination-box">
					<div class="pagination-wrap">
						<span><input type="button" id="previous" value="Previous" /></span>
						<span>Page<input type="text" readonly id="pageof" value="1"/> of <span id="pageCount"></span></span>
						<span><input type="text" readonly id="rowsof" value="0"/>Rows</span>
		   			<span><input type="button" id="next" value="Next" /></span>
		    	</div>
				</div>
				<div class="next-box">
					<button class="testOrderBtn" id="testOrderBtnDwn" value="Next" trgt_orderlist="orderList">Order</button>	
					<button class="testConfirm" id="testConfirmDwn">Confirm</button>
				</div>
			</div><!-- eo pagination-next-row -->
		</div><!-- eo mdg-testlist-wrap -->
	</div><!-- mdg-testlist-outer-wrapper -->

	<div class="confirm-order-form-wrap">
		<div class="downloadtest-banner">
			<!-- <img src="img/banners/Inner-page-bnr.jpg" alt="medgenom innerpage banner" /> -->
		</div>
		
		<?php include 'testlist-order-confirm.php'; ?>
		
	</div><!-- eo confirm-order-form-wrap -->

</div>


<script src="js/disease.js"></script>
<?php require 'includes/footer-contact.php';?>
<script type="text/javascript" src="js/flag.js"></script>
</body>
</html>

