<?php require 'php-templates/header.php';?>
<script src="<?php echo $site_path;?>/admin/js/angular-route.min.js"></script>

<?php session_start(); ?>
<!--<script>if(localStorage.username){</script>-->
<?php if(isset($_SESSION['username'])){ ?>

<div ng-app="dashboardApp">
    <div ng-controller="dashboardCtrl">
        <div class="container dashboard">
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
                    <div class="col-md-24 well text-center text-danger lead">No permission to view this page, <a href="<?php echo $site_path;?>/admin.php">click here to login</a></div>
                </div>
            </div>
        <!--<script> } </script>-->
        <?php } ?>
    </div>
</div>
<script src="<?php echo $site_path;?>/admin/js/dashboard.js"></script>
<?php require 'php-templates/footer.php' ?>