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

        <script src="../js/vendors/angular-1.5.8.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="../css/responsive.css"/>
        <link rel="stylesheet" href="../css/font-awesome.css"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="../js/custom.js"></script>
        <script src="<?php echo $site_path;?>/admin/js/angular-route.min.js"></script>
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


<?php session_start(); ?>
<!--<script>if(localStorage.username){</script>-->
<?php if(isset($_SESSION['username'])){ ?>

<div ng-app="dashboardApp">
    <div ng-controller="dashboardCtrl">
        <div class="container dashboard" style="margin-top: 50px;">
            <div class="row">
                <div class="col-md-5"><?php require_once 'admin/left.php';?></div>
                <!--<div class="col-md-19"><?php /*require_once 'admin/diabetes-lead-users.php';*/?></div>-->
                <?php if(!isset($_REQUEST['act'])) { ?>
                <!--<div class="col-md-19"><h2>Welcome to Dashboard</h2></div>-->
                    <div class="col-md-19"><?php require_once 'admin/oncopepet-download-users.php';?></div>
                <?php } ?>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'oncopept')) require_once 'admin/oncopepet-download-users.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'diseasecategory')) require_once 'admin/disease_category.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'disease')) require_once 'admin/disease_test.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'genelist')) require_once 'admin/gene_list.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'events')) require_once 'admin/events.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'cme')) require_once 'admin/cme.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'cme_agenda')) require_once 'admin/cme_agenda.php';?></div>

                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'main_news')) require_once 'admin/main_news.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'sub_news')) require_once 'admin/sub_news.php';?></div>

                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'videos_main_news')) require_once 'admin/videos_main_news.php';?></div>
                <div class="col-md-19"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'videos_sub_news')) require_once 'admin/videos_sub_news.php';?></div>
                <div class="col-md-24"><?php if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'videos')) require_once 'admin/videos.php';?></div>

            </div>
        </div>

        <!--<script> } else { </script>-->
        <?php } else {?>
            <div class="container permission">
                <div class="row">
                    <div class="col-md-24 well text-center text-danger lead">No permission to view this page, <a href="<?php echo $site_path;?>/admin/">click here to login</a></div>
                </div>
            </div>
        <!--<script> } </script>-->
        <?php } ?>
    </div>
</div>
<script src="<?php echo $site_path;?>/admin/js/dashboard.js"></script>
<?php require 'includes/footer-contact.php' ?>