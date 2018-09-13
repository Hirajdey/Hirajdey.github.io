<?php
$date = ["04/08/2016", "02/07/2016", "05/06/2016", "01/05/2016"];
$title = [
  "Comprehensive genomic analysis of malignant pleural mesothelioma identifies recurrent mutations, gene fusions and splicing alterations",
  "4th Annual Immuno-Oncology Summit",
  "2nd International Conference on Eye and Vision",
  "66th Annual Meeting of the American Society of Human Genetics"
];
$file = [
    "comprehensive-genomic-analysis.pdf",
    "comprehensive-genomic-analysis.pdf",
    "comprehensive-genomic-analysis.pdf",
    "comprehensive-genomic-analysis.pdf"
];
$path = "publications/research-papers";
?>

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