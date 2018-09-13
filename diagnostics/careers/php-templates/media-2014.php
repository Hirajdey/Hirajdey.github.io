<?php $i = 0;?>
<div ng-app="ngApp">
    <div ng-controller="ngCtrl">
            <div class="container year2014">
                <?php if(isset($_REQUEST['month'])){?><h2 style="border-bottom: 1px solid #ccc;"> <?php echo ucfirst($_REQUEST['month']);}?></h2>
                <table class="table main">
                    <tr class="hidden">
                        <th width="5%">Col1</th>
                        <th width="10%">Col2</th>
                        <th width="55%">Col3</th>
                        <th width="15%">Col4</th>
                        <th width="15%">Col5</th>
                   </tr>
                    <!-- December -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "december") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('november10','2014')" class="media-box1" id="november102014">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>10th Nov</td>
                            <td width="70%">International Genomics conference in Bangalore - Nov 17th-19th</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="november10pop" style="display: none;">
                        <?php
                        $image = [
                            "bnn.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "10thDec2014"
                        ];
                        $url = [
                            "$site_path/pdf/2014/10thDec2014.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <?php $i = 1; } ?>

                    <!-- November -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "november") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('november08','2014')" class="media-box1" id="november082014">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>08th Nov</td>
                            <td width="70%">International Genomics conference in Bangalore</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="november08pop" style="display: none;">
                        <?php
                        $image = [
                            "healthy-dunia.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "8thNov2014"
                        ];
                        $url = [
                            "$site_path/pdf/2014/8thNov2014.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('november07','2015')" class="media-box1" id="november072015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>07th Nov</td>
                            <td width="70%">Press Release Watch</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="november07pop" style="display: none;">
                        <?php
                        $image = [
                            "press-release-watch.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "7thNov2014"
                        ];
                        $url = [
                            "$site_path/pdf/2014/7thNov2014.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('november03','2015')" class="media-box1" id="november032015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>03rd Nov</td>
                            <td width="70%">Gene therapy catching on</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="november03pop" style="display: none;">
                        <?php
                        $image = [
                            "times.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "3rdNov2014"
                        ];
                        $url = [
                            "http://timesofindia.indiatimes.com/city/kolkata/Gene-therapy-catching-on/articleshow/45021333.cms"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                        <!-- October -->
                        <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "october") || (!isset($_REQUEST['month']))){?>

                            <tr ng-click="additionalNews('october25','2014')" class="media-box1" id="october252014">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <td>25th Oct</td>
                                <td width="70%">MedGenome keen to team-up with state govts to provide OncoMed analytics platform to assess gene variations in ovarian cancer</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="october25pop" style="display: none;">
                            <?php
                            $image = [
                                "pharmabiz.jpg"
                            ];
                            $image_size = [
                                "width" => ["250px","250","250px","250px","250px"],
                                "height" => ["50","50","50","50","50"]
                            ];
                            $pdf = [
                                "25thOct2014"
                            ];
                            $url = [
                                "http://pharmabiz.com/NewsDetails.aspx?aid=84740&sid=1"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                        <?php $i = 1; } ?>

                    <!-- September -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "september") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('september09','2014')" class="media-box1" id="september092014">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>09th Sep</td>
                            <td width="70%">MedGenome raises Rs.24 cr via Series A Fung to expand operations in India</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="september09pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmabiz.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "9thSept2014"
                        ];
                        $url = [
                            "$site_path/pdf/2014/9thSept2014.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <?php $i = 1; } ?>


                    <!-- June -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "june") || (!isset($_REQUEST['month']))){?>
                        <tr ng-click="additionalNews('june05','2014')" class="media-box1" id="june052014">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>05th Jun</td>
                            <td width="70%">MiNDERA Gets $1M For Skin Cancer Diagnostics</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="june05pop" style="display: none;">
                        <?php
                        $image = [
                            "silicontap.gif"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "5thJune2014Silicontap"
                        ];
                        $url = [
                            "http://silicontap.com/medgenome_gets_4m_for_cancer_diagnostics/s-0055369.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('june051','2014')" class="media-box1" id="june0512014">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>05th Jun</td>
                            <td width="70%">MedGenome Rises $4M Series A for India DNA Database</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="june051pop" style="display: none;">
                        <?php
                        $image = [
                            "private-equaty.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "5thJune2014"
                        ];
                        $url = [
                            "$site_path/pdf/2014/5thJune2014.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('june04','2014')" class="media-box1" id="june042014">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>04th Jun</td>
                            <td width="70%">Can MedGenome use genetics to predict cancer? VCs bet $4M on it</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="june04pop" style="display: none;">
                        <?php
                        $image = [
                            "vb.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "4thJune2014"
                        ];
                        $url = [
                            "http://venturebeat.com/2014/06/04/can-medgenome-use-genetics-to-predict-cancer-vcs-bet-4m-on-it/"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2014/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2014/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    <?php $i = 1; } ?>

                    <?php if($i == 0) {?>
                    <tr class="no-record">
                        <td colspan="4">No Records</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php //require 'model-2016.php';?>