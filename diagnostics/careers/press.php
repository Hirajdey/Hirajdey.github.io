<?php
require 'php-templates/header.php';
require 'config/db.php';
require 'config/config.php';

if(isset($_REQUEST['act']) && $_REQUEST['act'] == 1)
    $media_news = $conn->query("UPDATE media_news SET status = 1 WHERE id = 173");
?>
<div ng-app="mediaApp" ng-init="currentMonth='<?php echo $current_month;?>'">
    <div class="media press" ng-controller="mediaMonthCtrl">
        <div class="container">
            <span class="title_logo">Press</span>
            <p id="demo"></p>
        </div>

    <?php require 'php-templates/press-body.php'; ?>
    </div>
</div>

<script src="<?php echo $site_path;?>/js/press.js"></script>
<?php require 'php-templates/footer.php' ?>