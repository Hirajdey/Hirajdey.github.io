<div class="container">
  <?php if(isset($_REQUEST['month'])){?><h2 style="border-bottom: 1px solid #ccc;"> <?php echo ucfirst($_REQUEST['month']);}?></h2>
  <table class="table oncopeptEvent">
    <tr class="hidden">
      <th width="5%">Col1</th>
      <th width="10%">Col2</th>
      <th width="55%">Col3</th>
      <th width="15%">Col4</th>
      <th width="15%">Col5</th>
    </tr>

      <tr ng-click="additionalNews('august24','2016')" class="media-box1" id="august242016">
        <td>Date</td>
        <td width="70%" colspan="2">Poster Title</td>
        <td>Download</td>
      </tr>

      <tbody id="august24pop" style="display: none;">
      <?php
      $image = [
          "Sutrakar.png",
          "Sutrakar.png"
      ];
      $image_size = [
          "width" => ["250px","250","250px","250px","250px"],
          "height" => ["50","50","50","50","50"]
      ];
      $pdf = [
          "Medgenome-KALANTAR-Kolkata",
          "Medgenome-Sutrakar-Kolkata"
      ];
      $url = [
          "pdf/2016/Medgenome - KALANTAR - Kolkata -18.08.2016.jpg",
          "pdf/2016/Medgenome - Sutrakar - Kolkata -18.08.2016.jpg"
      ];
      for($i=0; $i<count($image); $i++){
        ?>
        <tr>
          <td colspan="3">04/08/2016</td>
          <td><a href="<?php echo $site_path;?>/download.php?download_file=comprehensive-genomic-analysis.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></a></td>
        </tr>
      <?php } ?>
      </tbody>

    <?php if($i == 0) {?>
      <tr class="no-record">
        <td colspan="4">No Records</td>
      </tr>
    <?php } ?>
  </table>
</div>


