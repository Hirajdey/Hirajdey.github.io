<div class="row hidden-xs">
  <div class="col-md-24">
    <table class="table table-striped">
      <thead>
      <tr>
        <th width="20%">Date</th>
        <th width="65%"><?php if(isset($_REQUEST['title']))echo $_REQUEST['title']; else echo "Research Papers";?></th>
        <th width="15%">Downloads</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>04/08/2016</td>
        <td>World's Premier Conference on Computational Biology - ISMB 2016</td>
        <td class="text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></td>
      </tr>
      <tr>
        <td>02/07/2016</td>
        <td>4th Annual Immuno-Oncology Summit</td>
        <td class="text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></td>
      </tr>
      <tr>
        <td>05/06/2016</td>
        <td>2nd International Conference on Eye and Vision</td>
        <td class="text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></td>
      </tr>
      <tr>
        <td>01/05/2016</td>
        <td>66th Annual Meeting of the American Society of Human Genetics</td>
        <td class="text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- For Mobile-->
<div class="mobile visible-xs">
  <div class="container">
    <div class="row odd">
      <div class="col-xs-24 text-center">04/08/2016</div>
      <div class="col-xs-24 text-justify">World's Premier Conference on Computational Biology - ISMB 2016</div>
      <div class="col-xs-24 text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></div>
    </div>

    <div class="row">
      <div class="col-xs-24 text-center">02/07/2016</div>
      <div class="col-xs-24 text-justify">4th Annual Immuno-Oncology Summit</div>
      <div class="col-xs-24 text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></div>
    </div>

    <div class="row odd">
      <div class="col-xs-24 text-center">05/06/2016</div>
      <div class="col-xs-24 text-justify">2nd International Conference on Eye and Vision</div>
      <div class="col-xs-24 text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></div>
    </div>

    <div class="row">
      <div class="col-xs-24 text-center">01/05/2016</div>
      <div class="col-xs-24 text-justify">66th Annual Meeting of the American Society of Human Genetics</div>
      <div class="col-xs-24 text-center"><img src="<?php echo $site_path;?>/img/icons/icon-download.png"></div>
    </div>
  </div>
</div>
<!-- End of Mobile-->