<?php
require 'php-templates/header.php';
require 'config/db.php';
require 'config/config.php';
?>
<!--<div ng-app="videosApp" ng-init="currentMonth='<?php /*echo $current_month;*/?>'">
    <div class="media" ng-controller="videosMonthCtrl">-->
        <div class="container media"><br>
            <h1 class="title_logo">Videos</h1>
            <div class="row">

                <?php
                // Main Video
                if(isset($_REQUEST['id']))
                    $random_video = $conn->query("SELECT * FROM videos WHERE id = '".$_REQUEST['id']."' LIMIT 0,1");
                else
                    $random_video = $conn->query("SELECT * FROM videos ORDER BY RAND() LIMIT 0,1");

                $row = $random_video->fetch_assoc();
                $main_video_id = $row['id'];
                if($random_video->num_rows != 0){
                ?>
                <div class="col-md-14 main_video_section">
                    <div><video width="900px" class="img-responsive main" id="sampleMovie" src="<?php echo $site_path;?>/admin/videos/<?php echo $row['name'];?>" controls></video></div>
                    <div class="main_video_title"><b><?php echo $row['title'];?></b></div>
                </div>
                <?php } else { ?>
                    <div class="alert alert-danger alert-dismissable text-center lead">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        No records are available
                    </div>
                <?php } ?>

                <div class="side_video_section">
                <?php
                $side_videos = $conn->query("SELECT * FROM videos WHERE id NOT IN ('".$main_video_id."') ORDER BY id DESC");
                while($row = $side_videos->fetch_assoc()) { ?>

                    <div class="col-md-24 col-xs-24 col-sm-12 side_video_main">
                        <div class="side_video"><a href="?id=<?php echo $row['id'];?>"><video width="200px" height="200px" class="img-responsive main" id="sampleMovie" src="<?php echo $site_path;?>/admin/videos/<?php echo $row['name'];?>" controls></video></a></div>
                        <div class="sidevideotitle"><a href="?id=<?php echo $row['id'];?>"><?php echo substr($row['title'], 0, 200);?> ...</a></div>
                    </div>

                    <?php } ?>
                </div>

                <!--<div style="border: 1px solid red; height: 150px; width: 250px; overflow: scroll">
                    <?php
/*                    $videos = $conn->query("SELECT * FROM videos ORDER BY id DESC");
                    $i = 1;
                    while($row = $videos->fetch_assoc()) {
                    */?>
                    <div class="col-md-24">
                        <div style="margin-bottom: 10px; float: left;"><video class="img-responsive main" id="sampleMovie" src="<?php /*echo $site_path;*/?>/admin/videos/<?php /*echo $row['name'];*/?>" controls></video></div>
                        <div style="float: left; padding-left: 10px;"><?php /*echo $row['title'];*/?></div>
                    </div>
                    <?php /*} */?>
                </div>-->
            </div>
        </div>
    <!--</div>
</div>-->

<!--<script src="<?php /*echo $site_path;*/?>/js/videos.js"></script>-->
<?php require 'php-templates/footer.php' ?>