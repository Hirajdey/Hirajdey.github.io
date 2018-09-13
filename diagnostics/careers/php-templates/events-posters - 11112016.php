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
$path = "research-papers";
?>
<div class="row hidden-xs">
  <div class="col-md-24">
    <table class="table table-striped">
      <thead>
      <tr>
        <th width="20%">Date</th>
        <th width="65%">Posters Presented</th>
        <th width="15%">Downloads</th>
      </tr>
      </thead>
      <tbody>
      <?php for($i=0; $i<count($title); $i++){?>
        <tr>
          <td><?php echo $date[$i];?></td>
          <td><?php echo $title[$i];?></td>
          <td class="text-center"><a href="<?php echo $site_path;?>/download.php?download_file=OncoPeptTUME.pdf&path=oncopeptadditional/event"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></a></td></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>