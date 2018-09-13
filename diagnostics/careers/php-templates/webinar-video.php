<?php
$videos = ['oncopept-webinar.mp4', 'oncopept-webinar.mp4', 'oncopept-webinar.mp4', 'oncopept-webinar.mp4', 'oncopept-webinar.mp4', 'oncopept-webinar.mp4'];
$title = ['Type of Cardiology diseases', 'Oncology diseases', 'Cardiology diseases', 'ENT diseases', 'Neurology diseases', 'Prenatal diseases'];
$subtitle = ['Medgenome labs', 'Medgenome labs', 'Medgenome labs', 'Medgenome labs', 'Medgenome labs', 'Medgenome labs'];
$views = ['1,000 views', '400 views', '200 views', '2,000 views', '3,500 views', '100 views'];
?>
<div class="row">
  <div class="col-md-16">
    <!--<img class="img-responsive" src="img/webinar/Webinar-videos.png" alt="Webinar-videos">-->
    <!--<iframe width="746" height="484" src="https://www.youtube.com/embed/FIp-IAeC-j8"></iframe>-->
    <video class="img-responsive main" id="sampleMovie" src="video/oncopept-webinar.mp4" controls></video>
  </div>

  <div class="col-md-8 download"><a href="<?php echo $site_path;?>/download.php?download_file=oncopept-webinar.mp4&path=oncopeptadditional/video"><h3>Download <img src="<?php echo $site_path;?>/img/icons/icon-download.png"></h3></a></div>

  <!--<div class="col-md-8">
    <?php /*for($i=0; $i<count($videos); $i++){*/?>
      <div class="row thumb" ng-click="chooseVideo('<?php /*echo $videos[$i];*/?>')">
        <div class="col-md-8"><video class="img-responsive" id="sampleMovie" src="video/<?php /*echo $videos[$i];*/?>"></video></div>
        <div class="col-md-16">
          <div class="title"><?php /*echo $title[$i];*/?></div>
          <div class="subtitle"><?php /*echo $subtitle[$i];*/?></div>
          <div class="views"><?php /*echo $views[$i];*/?></div>
        </div>
      </div>
  <?php /*} */?>
  </div>-->
</div>