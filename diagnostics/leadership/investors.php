<?php require '../config/config.php';
if($site_path == "http://localhost/homepage/leadership")
    $site_path = "http://localhost/homepage";
else
    $site_path = $site_path;
?>
<div class="container">
    <h4 class="page-title">MedGenome vision is supported by:</h4>
    <div class="row" style="padding: 20px;">
        <div class="col-md-8 text-center"><img src="<?php echo $site_path;?>/img/investors/sequoia.jpg" class="img-responsive" alt="Sequoia"></div>
        <div class="col-md-8 text-center"><img src="<?php echo $site_path;?>/img/investors/emergeventures.jpg" class="img-responsive" alt="Emerge Ventures"></div>
        <div class="col-md-8 text-center"><img src="<?php echo $site_path;?>/img/investors/zodius.jpg" class="img-responsive" alt="Zodius"></div>
    </div>
</div>

<div class="top-arrow hide hidden-xs" id="scroll-top">
    <div class="fa fa-arrow-up"></div>
</div>