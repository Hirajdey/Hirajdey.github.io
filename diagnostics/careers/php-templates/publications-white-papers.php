<div class="row hidden-xs">
  <div class="col-md-24">
    <table class="table table-striped">
      <thead>
      <tr>
        <th width="20%">Date</th>
        <th width="65%">Research Papers</th>
        <th width="15%">Downloads</th>
      </tr>
      </thead>
      <tbody>
      <tr ng-repeat="researchRec in researchPapers | filter:search">
        <td>{{researchRec.date}}</td>
        <td>{{researchRec.title}}</td>
        <td class="text-center"><a href="<?php echo $site_path;?>/download.php?download_file={{researchRec.file_name}}&path=publications/{{researchRec.path}}"><img class="download-image" src="<?php echo $site_path;?>/img/icons/icon-download.png"></a></td></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- For Mobile-->
<div class="mobile visible-xs">
  <div class="container" ng-repeat="research in researchPapers | filter:search">
    <div class="row odd">
      <div class="col-xs-24 text-center">{{research.date}}</div>
      <div class="col-xs-24 text-justify">{{research.title}}</div>
      <div class="col-xs-24 text-center"><a href="<?php echo $site_path;?>/download.php?download_file={{research.file_name}}&path=publications/{{research.path}}"><img class="download-image" src="<?php echo $site_path;?>/img/icons/icon-download.png"></a></div>
    </div>
  </div>
</div>
<!-- End of Mobile-->