<?php $i = 0;?>
<div ng-app="ngApp">
    <div ng-controller="ngCtrl">
            <div class="container year2015">
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

                        <tr ng-click="additionalNews('december24','2015')" class="media-box1" id="december242015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>24th Dec</td>
                            <td width="70%">Panorama TM non-invasive prenatal test offers great benefit to the clinical practice</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="december24pop" style="display: none;">
                        <?php
                        $image = [
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "24thDec2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/24thDec2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('december13','2015')" class="media-box1" id="december132015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>13th Dec</td>
                            <td width="70%">Advances in personalised medicine discussed</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="december13pop" style="display: none;">
                        <?php
                        $image = [
                            "the-hindu.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "13thDec2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/13thDec2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('december04','2015')" class="media-box1" id="december042015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>04th Dec</td>
                            <td width="70%">LifeMap partners with MedGenome to strengthen NGS analysis solutions in oncology</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="december04pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmabiz.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "4thDec2015Pharmabiz"
                        ];
                        $url = [
                            "http://www.pharmabiz.com/NewsDetails.aspx?aid=92079&sid=2"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                    <!-- November -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "november") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('november191','2015')" class="media-box1" id="november1912015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>19th Nov</td>
                            <td width="70%">MedGenome India appoints Girish Mehta as CEO</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="november191pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmabiz.jpg",
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "19thNov2015R",
                            "19thNov2015"
                        ];
                        $url = [
                            "http://www.pharmabiz.com/NewsDetails.aspx?aid=91789&sid=2",
                            "$site_path/pdf/2015/19thNov2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('november12','2015')" class="media-box1" id="november122015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>12th Nov</td>
                            <td width="70%">Leaders In Life Sciences & Genomics Come Together</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="november12pop" style="display: none;">
                        <?php
                        $image = [
                            "knowap.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "12thNov2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/12thNov2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('november091','2015')" class="media-box1" id="november0912015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>09th Nov</td>
                            <td width="70%">Dr Mammen Chandy highlights benefits of genomics to diagnose & monitor CML at Haematocon 2015</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="november091pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmabiz.jpg",
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "9thNov2015R",
                            "9thNov2015"
                        ];
                        $url = [
                            "http://www.pharmabiz.com/NewsDetails.aspx?aid=91642&sid=2",
                            "$site_path/pdf/2015/9thNov2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                        <!-- October -->
                        <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "october") || (!isset($_REQUEST['month']))){?>

                            <tr ng-click="additionalNews('october12','2015')" class="media-box1" id="october122015">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <td>12th Oct</td>
                                <td width="70%">Medgenome organises CME on advances in genetic testing technologies</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="october12pop" style="display: none;">
                            <?php
                            $image = [
                                "financialexpress.jpg"
                            ];
                            $image_size = [
                                "width" => ["250px","250","250px","250px","250px"],
                                "height" => ["50","50","50","50","50"]
                            ];
                            $pdf = [
                                "12thOct2015"
                            ];
                            $url = [
                                "$site_path/pdf/2015/12thOct2015.pdf"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('october06','2015')" class="media-box1" id="october062015">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <td>06th Oct</td>
                                <td width="70%">MedGenome to build India-specific data for gene-based testing kits</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="october06pop" style="display: none;">
                            <?php
                            $image = [
                                "live-mint.png"
                            ];
                            $image_size = [
                                "width" => ["250px","250","250px","250px","250px"],
                                "height" => ["50","50","50","50","50"]
                            ];
                            $pdf = [
                                "6thOct2015"
                            ];
                            $url = [
                                "http://www.livemint.com/Companies/ZNzDmq6ZrPUHWl3DqLuWyM/MedGenome-to-build-Indiaspecific-data-for-genebased-testin.html"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        <?php $i = 1; } ?>

                    <!-- September -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "september") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('september11','2015')" class="media-box1" id="september112015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>11th Sep</td>
                            <td width="70%">New treatment for leukaemia could replace chemotherapy</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="september11pop" style="display: none;">
                        <?php
                        $image = [
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "11thSept2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/11thSept2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('september07','2015')" class="media-box1" id="september072015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>7th Sep</td>
                            <td width="70%">Our aim was to provide a complete, one-stop solution for diagnostic testing</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="september07pop" style="display: none;">
                        <?php
                        $image = [
                            "financialexpress.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "7thSept2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/7thSept2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <?php $i = 1; } ?>

                    <!-- August -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "august") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('august31','2015')" class="media-box1" id="august312015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>31st Aug</td>
                            <td width="70%">Equipped With State-of-the-art Genomics Facilities, MedGenome Offers World-class Diagnostics and Research Services in the Country</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august31pop" style="display: none;">
                        <?php
                        $image = [
                            "prnewswire.gif"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "31stAug2015"
                        ];
                        $url = [
                            "http://www.prnewswire.co.in/news-releases/equipped-with-state-of-the-art-genomics-facilities-medgenome-offers-world-class-diagnostics-and-research-services-in-the-country-523401441.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('august29','2015')" class="media-box1" id="august292015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>29th Aug</td>
                            <td width="70%">The need for genomics in diagnosing a child with hereditary neurological diseases</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august29pop" style="display: none;">
                        <?php
                        $image = [
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "29thAug2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/29thAug2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('august18','2015')" class="media-box1" id="august182015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>18th Aug</td>
                            <td width="70%">MedGenome symposium highlights genomics for better diagnostics and disease management</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august18pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmabiz.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "18thAug2015"
                        ];
                        $url = [
                            "http://pharmabiz.com/NewsDetails.aspx?aid=90044&sid=2"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('august14','2015')" class="media-box1" id="august142015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>14th Aug</td>
                            <td width="70%">Next Generation Sequencing for the diagnosis of Congenital Cataract</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august14pop" style="display: none;">
                        <?php
                        $image = [
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "14thAug2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/14thAug2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('august101','2015')" class="media-box1" id="august1012015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>10th Aug</td>
                            <td width="70%">Molecular genetics has a significant rolw to play in the clinical practice: Experts</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august101pop" style="display: none;">
                        <?php
                        $image = [
                            "financialexpress.jpg",
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "10thAug2015ExpressHealthcare",
                            "10thAug2015ETHealthworld",
                            "$site_path/pdf/2015/10thAug2015ETHealthworld.pdf"
                        ];
                        $url = [
                            "$site_path/pdf/2015/10thAug2015ExpressHealthcare.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                    <!-- July -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "july") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('july231','2015')" class="media-box1" id="july2312015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>23rd Jul</td>
                            <td width="70%">Sequoia invests $20 million in MedGenome</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="july231pop" style="display: none;">
                        <?php
                        $image = [
                            "times.jpg",
                            "live-mint.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "23rdJuly2015TOI",
                            "23rdJuly2015Livemint"
                        ];
                        $url = [
                            "http://timesofindia.indiatimes.com/business/india-business/Sequoia-invests-20-million-in-MedGenome/articleshow/48181934.cms",
                            "http://www.livemint.com/Companies/9NSZbMEIjfkmqseqJ4bUGJ/Sequoia-Capital-invests-20-mn-in-MedGenome.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('july01','2015')" class="media-box1" id="july012015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>01st Jul</td>
                            <td width="70%">Deaf blindness Awareness Week – Can genetics help?</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="july01pop" style="display: none;">
                        <?php
                        $image = [
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "1stJuly2015"
                        ];
                        $url = [
                            "http://health.economictimes.indiatimes.com/health-files/deaf-blindness-awareness-week-can-genetics-help/729"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    <?php $i = 1; } ?>

                    <!-- June -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "june") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('june15','2015')" class="media-box1" id="june152015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>15th Jun</td>
                            <td width="70%">Tracing the trends in genetic diagnostics</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="june15pop" style="display: none;">
                        <?php
                        $image = [
                            "financialexpress.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "15thJune2015"
                        ];
                        $url = [
                            "http://www.financialexpress.com/article/healthcare/genetic-diagnostics-special/tracing-the-trends-in-genetic-diagnostics/85007/"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('june08','2015')" class="media-box1" id="june082015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>08th Jun</td>
                            <td width="70%">Medgenome inks partnership with Golden Helix for its cancer-specific variant knowledge base</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="june08pop" style="display: none;">
                        <?php
                        $image = [
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "8thJune2015"
                        ];
                        $url = [
                            "http://health.economictimes.indiatimes.com/news/industry/medgenome-inks-partnership-with-golden-helix-for-its-cancer-specific-variant-knowledge-base/47583469"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('june05','2015')" class="media-box1" id="june052015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>05th Jun</td>
                            <td width="70%">Golden Helix integrates MedGenome's OncoMD into its VarSeq software</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="june05pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmabiz.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "5thJune2015"
                        ];
                        $url = [
                            "http://www.pharmabiz.com/NewsDetails.aspx?aid=88732&sid=2"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    <?php $i = 1; } ?>

                    <!-- May -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "may") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('may27','2015')" class="media-box1" id="may272015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>27th May</td>
                            <td width="70%">Golden Helix collaborates with India’s MedGenome</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="may27pop" style="display: none;">
                        <?php
                        $image = [
                            "Biospectrum.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "27thMay2015"
                        ];
                        $url = [
                            "http://www.biospectrumindia.com/biospecindia/news/221500/golden-helix-collaborates-india-s-medgenome"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('may20','2015')" class="media-box1" id="may202015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>20th May</td>
                            <td width="70%">Making a difference in the clinical management of Lung Cancer</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="may20pop" style="display: none;">
                        <?php
                        $image = [
                            "ethealthword.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "20thMay2015"
                        ];
                        $url = [
                            "http://health.economictimes.indiatimes.com/health-files/Making-a-difference-in-the-clinical-management-of-Lung-Cancer/633"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                    <!-- April -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "april") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('april29','2015')" class="media-box1" id="april292015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>29th Apr</td>
                            <td width="70%">SolveBio, MedGenome Ink Data Distribution Agreement</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april29pop" style="display: none;">
                        <?php
                        $image = [
                            "GENOME-WEB.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "29thApril2015"
                        ];
                        $url = [
                            "$site_path/pdf/2015/29thApril2015.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('april24','2015')" class="media-box1" id="april242015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>24th Apr</td>
                            <td width="70%">Digital Solutions in India 2015: The 10th Annual Review</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april24pop" style="display: none;">
                        <?php
                        $image = [
                            "logo-trans.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "24thMar2015"
                        ];
                        $url = [
                            "http://www.publishersweekly.com/pw/by-topic/digital/content-and-e-books/article/66380-digital-solutions-in-india-2015-the-10th-annual-review.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                        <!-- March -->
                        <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "march") || (!isset($_REQUEST['month']))){?>
                        <tr ng-click="additionalNews('mar06','2015')" class="media-box1" id="mar062015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>06th Mar</td>
                            <td width="70%">Hot Biotech Start-ups: A year later</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="mar06pop" style="display: none;">
                        <?php
                        $image = [
                            "Biospectrum.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "06thMar2015"
                        ];
                        $url = [
                            "http://www.biospectrumindia.com/biospecindia/views/220614/hot-biotech-start-ups-a"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>


                    <!-- February -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "february") || (!isset($_REQUEST['month']))){?>
                        <tr ng-click="additionalNews('feb22','2015')" class="media-box1" id="feb222015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>22nd Feb</td>
                            <td width="70%">New facility for genetic testing</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>
                    
                        <tbody id="feb22pop" style="display: none;">
                        <?php
                        $image = [
                            "news-today.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "22ndFeb2015"
                        ];
                        $url = [
                            "http://www.emergeout.com/press/News_Today_-_22.02.15_-_Page_3_-_Chennai.jpg"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('feb022','2015')" class="media-box1" id="feb0222015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>02nd Feb</td>
                            <td width="70%">New pre-natal test posts 99% accuracy in detecting disorders</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="feb022pop" style="display: none;">
                        <?php
                        $image = [
                            "times.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "22nd2Feb2015"
                        ];
                        $url = [
                            "http://www.emergeout.com/press/TOI_-_22.02.15_-_Page_5-_Chennai.jpg"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('feb02','2015')" class="media-box1" id="feb022015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>02nd Feb</td>
                            <td width="70%">Medical Buyer Road Map 2015.</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="feb02pop" style="display: none;">
                        <?php
                        $image = [
                            "Eenadu-logo.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "02ndFeb2015"
                        ];
                        $url = [
                            "http://www.emergeout.com/press/Eenadu.jpg"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('feb021','2015')" class="media-box1" id="feb02132015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>02nd Feb</td>
                            <td width="70%">MedGenome and Panorama tied up for early detection of genetic disorders</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="feb021pop" style="display: none;">
                        <?php
                        $image = [
                            "Rajya-Dharma.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "02nd1Feb2015"
                        ];
                        $url = [
                            "http://www.emergeout.com/press/Rajya_Dharma.jpg"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <?php $i = 1; } ?>

                    <!-- January -->
                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "january") || (!isset($_REQUEST['month']))){?>
                        <tr ng-click="additionalNews('jan23','2015')" class="media-box1" id="jan232015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>23rd Jan</td>
                            <td width="70%">Crystal ball Gazing 2015: MedGenome</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="jan23pop" style="display: none;">
                        <?php
                        $image = [
                            "Biospectrum.jpg",
                            "tp-hdr-bg.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "biospectrumindia",
                            "Genomics – Set to Revolutionize Healthcare"
                        ];
                        $url = [
                            "http://www.biospectrumindia.com/biospecindia/views/220175/crystal-ball-gazing-2015-medgenome",
                            "http://www.emergeout.com/press/Genomics%20%E2%80%93%20Set%20to%20Revolutionize%20Healthcare.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('jan22','2015')" class="media-box1" id="jan222015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>22nd Jan</td>
                            <td width="70%">Cartagenia Partners with MedGenome for Access to Cancer Variant Database</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="jan22pop" style="display: none;">
                        <?php
                        $image = [
                            "GENOME-WEB.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "genomeweb"
                        ];
                        $url = [
                            "https://www.genomeweb.com/business-news/cartagenia-partners-medgenome-access-cancer-variant-database"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('jan07','2015')" class="media-box1" id="jan072015">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>07th Jan</td>
                            <td width="70%">MedGenome inks agreement with Natera to perform Panorama non-invasive prenatal testing</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="jan07pop" style="display: none;">
                        <?php
                        $image = [
                            "deccan-herald.jpg",
                            "pharmabiz.jpg",
                            "ethealthword.jpg",
                            "telegraph.jpg",
                            "eesanje.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "07th1Jan2015",
                            "07thJan2015",
                            "07th2Jan2015",
                            "07th3Jan2015",
                            "10thJan2015"
                        ];
                        $url = [
                            "http://www.deccanherald.com/content/452122/prenatal-test-detect-genetic-flaws.html",
                            "http://www.pharmabiz.com/NewsDetails.aspx?aid=86047&sid=2",
                            "http://health.economictimes.indiatimes.com/news/industry/medgenome-launches-panorama-non-invasive-prenatal-test-in-india/45795374",
                            "http://www.emergeout.com/press/The_Telegraph_08_Jan_2015_Pg_04.jpg",
                            "http://www.emergeout.com/press/13.jpg"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2015/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2015/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
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