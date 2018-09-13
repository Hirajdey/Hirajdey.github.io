<?php $i = 0;?>
<div ng-app="ngApp">
    <div ng-controller="ngCtrl">
            <div class="container year2016">

                <?php if(isset($_REQUEST['month'])){?><h2 style="border-bottom: 1px solid #ccc;"> <?php echo ucfirst($_REQUEST['month']);}?></h2>
                <table class="table main">
                    <tr class="hidden">
                        <th width="5%">Col1</th>
                        <th width="10%">Col2</th>
                        <th width="55%">Col3</th>
                        <th width="15%">Col4</th>
                        <th width="15%">Col5</th>
                   </tr>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "february") || (!isset($_REQUEST['month']))){?>
                    <tr ng-click="additionalNews('feb02','2017')" class="media-box1 <?php if($current_month == 'february') echo 'highlightmonth';?>" id="feb022017">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                        <td>02nd Feb</td>
                        <td width="70%">Industry gives mixed response on budget 2017-18</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="feb02pop" style="display: none;">
                    <?php
                    $image = [
                        "pharmabiz.jpg"
                    ];
                    $image_size = [
                        "width" => ["250px","250px","250px","250px","250px", "250px"],
                        "height" => ["50","50","50","50","50","50"]
                    ];
                    $pdf = [
                        "02ndPharmabiz2017"
                    ];
                    $url = [
                        "http://www.pharmabiz.com/NewsDetails.aspx?aid=100139&sid=2"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2017/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2017/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                        <tr ng-click="additionalNews('feb022','2017')" class="media-box1 <?php if($current_month == 'february') echo 'highlightmonth';?>" id="feb0222017">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>02nd Feb</td>
                            <td width="70%">Union Budget 2017 satisfactorily promises the best to the people: Sam Santhosh, MedGenome</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="feb022pop" style="display: none;">
                        <?php
                        $image = [
                            "iifl.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250px","250px","250px","250px", "250px"],
                            "height" => ["50","50","50","50","50","50"]
                        ];
                        $pdf = [
                            "02ndIifl2017"
                        ];
                        $url = [
                            "http://www.indiainfoline.com/article/news-union-budget/union-budget-2017-satisfactorily-promises-the-best-to-the-people-sam-santhosh-medgenome-117020200485_1.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2017/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2017/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    <?php } ?>

                            <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "january") || (!isset($_REQUEST['month']))){?>

                                <tr ng-click="additionalNews('jan28','2017')" class="media-box1 <?php if($current_month == 'january') echo 'highlightmonth';?>" id="jan282017">
                                    <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                    <td>28th Jan</td>
                                    <td width="70%">Cervical cancer can be prevented through regular health checkups</td>
                                    <td>PDF</td>
                                    <td>Source Link</td>
                                </tr>

                                <tbody id="jan28pop" style="display: none;">
                                <?php
                                $image = [
                                    "vk.png"
                                ];
                                $image_size = [
                                    "width" => ["250px","250px","250px","250px","250px", "250px"],
                                    "height" => ["50","50","50","50","50","50"]
                                ];
                                $pdf = [
                                    "Vijaya_Karnataka"
                                ];
                                $url = [
                                    $site_path."/pdf/2017/Vijaya_Karnataka.pdf"
                                ];
                                for($i=0; $i<count($image); $i++){
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $i + 1;?></td>
                                        <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2017/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                        <td><a href="<?php echo $site_path;?>/pdf/2017/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                        <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>

                                <tr ng-click="additionalNews('jan20','2017')" class="media-box1 <?php if($current_month == 'january') echo 'highlightmonth';?>" id="jan202017">
                                    <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                    <td>20th Jan</td>
                                    <td width="70%">Foster PPP to percolate benefits of affordable healthcare to the masses</td>
                                    <td>PDF</td>
                                    <td>Source Link</td>
                                </tr>

                                <tbody id="jan20pop" style="display: none;">
                                <?php
                                $image = [
                                    "business-standard.png"
                                ];
                                $image_size = [
                                    "width" => ["250px","250px","250px","250px","250px", "250px"],
                                    "height" => ["50","50","50","50","50","50"]
                                ];
                                $pdf = [
                                    "20thBusinessStandard2017"
                                ];
                                $url = [
                                    "http://www.business-standard.com/article/b2b-connect/foster-ppp-to-percolate-benefits-of-affordable-healthcare-to-the-masses-117012000813_1.html"
                                ];
                                for($i=0; $i<count($image); $i++){
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $i + 1;?></td>
                                        <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2017/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                        <td><a href="<?php echo $site_path;?>/pdf/2017/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                        <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>

                                <tr ng-click="additionalNews('jan09','2017')" class="media-box1 <?php if($current_month == 'january') echo 'highlightmonth';?>" id="jan092017">
                                    <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                    <td>9th Jan</td>
                                    <td width="70%">Michael A. Nemzek appointed as MedGenome Chief Commercial Officer</td>
                                    <td>PDF</td>
                                    <td>Source Link</td>
                                </tr>

                                <tbody id="jan09pop" style="display: none;">
                                <?php
                                $image = [
                                    "einnewsdesk.png"
                                ];
                                $image_size = [
                                    "width" => ["250px","250px","250px","250px","250px", "250px"],
                                    "height" => ["50","50","50","50","50","50"]
                                ];
                                $pdf = [
                                    "09thEinNews2017"
                                ];
                                $url = [
                                    "http://www.einnews.com/pr_news/361137101/michael-a-nemzek-appointed-as-medgenome-chief-commercial-officer"
                                ];
                                for($i=0; $i<count($image); $i++){
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $i + 1;?></td>
                                        <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2017/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                        <td><a href="<?php echo $site_path;?>/pdf/2017/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                        <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>

                            <tr ng-click="additionalNews('jan02','2017')" class="media-box1 <?php if($current_month == 'january') echo 'highlightmonth';?>" id="jan022017">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>2nd Jan</td>
                                <td width="70%">MedGenome plans pan-India expansion</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="jan02pop" style="display: none;">
                            <?php
                            $image = [
                                "telanganatoday.png"
                            ];
                            $image_size = [
                                "width" => ["250px","250px","250px","250px","250px", "250px"],
                                "height" => ["50","50","50","50","50","50"]
                            ];
                            $pdf = [
                                "02ndTelanganaToday2017"
                            ];
                            $url = [
                                "http://telanganatoday.news/medgenome-plans-pan-india-expansion"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2017/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2017/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                                <tr ng-click="additionalNews('jan021','2017')" class="media-box1 <?php if($current_month == 'january') echo 'highlightmonth';?>" id="jan0212017">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <td>2nd Jan</td>
                                <td width="70%">Girish Mehta, CEO, MedGenome India talks about regulatory maze in the Indian healthcare sector</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="jan021pop" style="display: none;">
                            <?php
                            $image = [
                                "inc42.png"
                            ];
                            $image_size = [
                                "width" => ["250px","250px","250px","250px","250px", "250px"],
                                "height" => ["50","50","50","50","50","50"]
                            ];
                            $pdf = [
                                "02ndinc422017"
                            ];
                            $url = [
                                "https://inc42.com/buzz/decoding-healthtech-business/"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2017/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2017/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
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