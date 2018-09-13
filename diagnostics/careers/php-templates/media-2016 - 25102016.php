<?php $i = 0;?>
<div ng-app="ngApp">
    <div ng-controller="ngCtrl">
            <div class="container">
                <?php if(isset($_REQUEST['month'])){?><h2 style="border-bottom: 1px solid #ccc;"> <?php echo ucfirst($_REQUEST['month']);}?></h2>
                <table class="table main">
                    <tr class="hidden">
                        <th width="5%">Col1</th>
                        <th width="10%">Col2</th>
                        <th width="55%">Col3</th>
                        <th width="15%">Col4</th>
                        <th width="15%">Col5</th>
                   </tr>

                <?php if((isset($_REQUEST['month'])) && ($_REQUEST['month'] == 'october')) { ?>

                    <tr ng-click="additionalNews('october13','2016')" class="media-box1" id="october132016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>13th October</td>
                        <td width="70%">Featuring Founder Chairman of MedGenome, Mr Sam Santhosh</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="october13pop" style="display: none;">
                    <?php
                    $image = [
                        "the-hindu.jpg"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "13ththehinduOct2016"
                    ];
                    $url = [
                        "http://www.thehindu.com/todays-paper/tp-features/tp-metroplus/sams-world-of-science/article9212524.ece"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tr ng-click="additionalNews('october12','2016')" class="media-box1" id="october122016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>12th October</td>
                        <td width="70%">MedGenome becomes first genomics firm in South-East Asia to acquire high throughput Illumina Hiseq X Ten platform</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="october12pop" style="display: none;">
                    <?php
                    $image = [
                        "menafn.gif",
                        "indian-news-times.jpg",
                        "the-pharma-times.jpg"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "12thmenafnOct2016",
                        "13thindiannewstimesOct2016",
                        "13ththepharmatimesOct2016"
                    ];
                    $url = [
                        "http://menafn.com/1095002404/MedGenome-becomes-first-genomics-firm-in-South-East-Asia-to-acquire-high-throughput-Illumina-Hiseq-X-Ten-platform",                      "http://www.indiannewsandtimes.com/2016/10/12/medgenome-becomes-first-genomics-firm-south-east-asia-acquire-high-throughput-illumina-hiseq-x-ten-platform/",
                        "http://www.thepharmatimes.in/index.php/contacts/extras/jstuff/content-views/category-list-view/3912-medgenome-becomes-first-genomics-firm-in-south-east-asia-to-acquire-high-throughput-illumina-hiseq-x-ten-platform"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tr ng-click="additionalNews('october10','2016')" class="media-box1" id="october102016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>10th October</td>
                        <td width="70%">MedGenome to expand genomic research services capability</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="october10pop" style="display: none;">
                    <?php
                    $image = [
                        "business-line.jpg",
                        "pharmabiz.jpg"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "10thbusinesslineOct2016",
                        "10thpharmabizOct2016"
                    ];
                    $url = [
                        "http://www.thehindubusinessline.com/companies/medgenome-to-expand-genomic-research-services-capability/article9206991.ece",
                        "http://www.pharmabiz.com/NewsDetails.aspx?aid=98021&sid=2"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tr ng-click="additionalNews('october07','2016')" class="media-box1" id="october072016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>07th October</td>
                        <td width="70%">MedGenome buys Illumina’s Hiseq X Ten machine for genome sequencing project</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="october07pop" style="display: none;">
                    <?php
                    $image = [
                        "business-line.jpg"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "07thbusinesslineOct2016"
                    ];
                    $url = [
                        "http://www.thehindubusinessline.com/companies/medgenome-buys-illuminas-hiseq-x-ten-machine-for-genome-sequencing-project/article9198299.ece"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tr ng-click="additionalNews('october05','2016')" class="media-box1" id="october052016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>05th October</td>
                        <td width="70%">Decoding genes to prevent heart attacks</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="october05pop" style="display: none;">
                    <?php
                    $image = [
                        "the-hindu.jpg",
                        "mumbai-news-network.jpg",
                        "ethealthword.jpg"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "05ththehinduOct2016",
                        "05thmumbainewsnetworkOct2016",
                        "05thethealthwordOct2016"
                    ];
                    $url = [
                        "http://www.thehindu.com/news/cities/Kochi/decoding-genes-to-prevent-heart-attacks/article9186392.ece",
                        "http://mumbainewsnetwork.blogspot.in/2016/10/scigenom-research-foundation.html",
                        "http://health.economictimes.indiatimes.com/news/medical-devices/medgenome-acquires-illumina-hiseq-x-ten-platform-first-of-its-kind-in-seasia/54688581"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tr ng-click="additionalNews('october04','2016')" class="media-box1" id="october042016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>04th October</td>
                        <td width="70%">3-day biology meet gets under way</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="october04pop" style="display: none;">
                    <?php
                    $image = [
                        "indian-express-1.jpg",
                        "pharmabiz.jpg",
                        "ethealthword.jpg",
                        "deccan-chronicle.png"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "04thOct2016",
                        "04thpharmabizOct2016",
                        "04thethealthwordOct2016",
                        "04thdeccanOct2016"
                    ];
                    $url = [
                        "http://www.newindianexpress.com/cities/kochi/2016/oct/04/3-day-biology-meet-gets-under-way-1524789.html?pm=185",
                        "http://pharmabiz.com/NewsDetails.aspx?aid=97900&sid=2&fromNewsdog=1",
                        "http://health.economictimes.indiatimes.com/news/industry/scigenom-research-foundation-sgrf-organizes-sixth-edition-of-indias-largest-genomics-conference/54667805",
                        "http://www.deccanchronicle.com/lifestyle/health-and-wellbeing/051016/gene-drugs-to-cure-heart-attacks.html"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                    <tr ng-click="additionalNews('october03','2016')" class="media-box1" id="october032016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>03rd October</td>
                        <td width="70%">Medgenome in pact to sequence genome of 1 lakh people in Asia</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="october03pop" style="display: none;">
                    <?php
                    $image = [
                        "live-mint.png"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "03rdOct2016"
                    ];
                    $url = [
                        "http://www.livemint.com/Companies/LerHG5ULGxpZ7FlgCAmBVL/Medgenome-in-pact-to-sequence-genome-of-1-lakh-people-in-Asi.html"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                <?php } ?>


            <?php if((isset($_REQUEST['month'])) && ($_REQUEST['month'] == 'september')) { ?>

                <tr ng-click="additionalNews('september29','2016')" class="media-box1" id="september292016">
                    <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <td>29th September</td>
                    <td width="70%">Genetic testing in cardiovascular diseases</td>
                    <td>PDF</td>
                    <td>Source Link</td>
                </tr>

                <tbody id="september29pop" style="display: none;">
                <?php
                $image = [
                    "ethealthword.jpg"
                ];
                $image_size = [
                    "width" => ["250px","250","250px","250px","250px"],
                    "height" => ["50","50","50","50","50"]
                ];
                $pdf = [
                    "29thSep2016"
                ];
                $url = [
                    "http://health.economictimes.indiatimes.com/news/diagnostics/genetic-testing-in-cardiovascular-diseases/54575823"
                ];
                for($i=0; $i<count($image); $i++){
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $i + 1;?></td>
                        <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                        <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                        <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                    </tr>
                <?php } ?>
                </tbody>

                    <tr ng-click="additionalNews('september07','2016')" class="media-box1" id="september072016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>7th September</td>
                        <td width="70%">MedGenome highlights non invasive technology for pre-natal tests</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                    <tbody id="september07pop" style="display: none;">
                    <?php
                    $image = [
                        "pharmabiz.jpg"
                    ];
                    $image_size = [
                        "width" => ["250px","250","250px","250px","250px"],
                        "height" => ["50","50","50","50","50"]
                    ];
                    $pdf = [
                        "07thSep2016"
                    ];
                    $url = [
                        "http://www.pharmabiz.com/ArticleDetails.aspx?aid=97329&sid=2"
                    ];
                    for($i=0; $i<count($image); $i++){
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $i + 1;?></td>
                            <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>

                <tr ng-click="additionalNews('september02','2016')" class="media-box1" id="september022016">
                    <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <td>2nd September</td>
                    <td width="70%">Leading doctors of Kolkata discuss the utility of genetic screening in pediatric nephrology at a CME event organised by MedGenome</td>
                    <td>PDF</td>
                    <td>Source Link</td>
                </tr>

                <tbody id="september02pop" style="display: none;">
                <?php
                $image = [
                    "the-new-indian-express.jpg"
                ];
                $image_size = [
                    "width" => ["250px","250","250px","250px","250px"],
                    "height" => ["50","50","50","50","50"]
                ];
                $pdf = [
                    "newindianexpress0209"
                ];
                $url = [
                    "http://www.newindianexpress.com/prcorner/?doc=201607200830PR_NEWS_EURO_ND__enIN201607201060_indiapublic&dir=25"
                ];
                for($i=0; $i<count($image); $i++){
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $i + 1;?></td>
                        <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                        <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                        <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                    </tr>
                <?php } ?>
                </tbody>

            <?php } ?>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "august") || (!isset($_REQUEST['month']))){ ?>

                        <tr ng-click="additionalNews('august21','2016')" class="media-box1" id="august212016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>21st August</td>
                            <td width="70%">Knowing early, and safely</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august21pop" style="display: none;">
                        <?php
                        $image = [
                            "hindu-logo.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "21stAug2016"
                        ];
                        $url = [
                            "http://www.thehindu.com/sci-tech/health/knowing-early-and-safely/article9012343.ece"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('august24','2016')" class="media-box1" id="august242016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>18th August</td>
                            <td width="70%">MedGenome organised a CME on Pediatric Nephrology addressing a session of eminent doctors at the Institute of Child Health, Kolkota</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august24pop" style="display: none;">
                        <?php
                        $image = [
                            "Kalantar.jpg",
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
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('august17','2016')" class="media-box1" id="august172016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>17th August</td>
                            <td width="70%">MedGenome organised a CME on Pediatric Nephrology addressing a session of eminent doctors at the Institute of Child Health, Kolkota</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august17pop" style="display: none;">
                        <?php
                        $image = [
                            "JansattaKolkota.png",
                            "PrabhuRashtraKolkata.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "Medgenome-Jansatta-Kolkata",
                            "Medgenome-PrabhuRashtra-Kolkata"
                        ];
                        $url = [
                            "pdf/2016/Medgenome-Jansatta-Kolkata.pdf",
                            "pdf/2016/Medgenome-PrabhuRashtra-Kolkata.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('august07','2016')" class="media-box1" id="august072016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>07th August</td>
                            <td width="70%">Genetics can help in better diagnosis, treatment and management of various diseases</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="august07pop" style="display: none;">
                        <?php
                        $image = [
                            "hindustan-times.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "Can your genes predict your futurehealth and fitnessHindustanTimes"
                        ];
                        $url = [
                            "http://www.hindustantimes.com/health-and-fitness/can-your-genes-predict-your-future/story-LTRopxjpAYDwLDGO8obVxL.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    <?php } ?>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "july") || (!isset($_REQUEST['month']))){?>

                        <tr ng-click="additionalNews('july26','2016')" class="media-box1" id="july262016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>26th July</td>
                            <td width="70%"> Mr Sam Santhosh on building a Lifesciences company</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="july26pop" style="display: none;">
                        <?php
                        $image = [
                            "Biospectrum.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "Biospectrum"
                        ];
                        $url = [
                            "$site_path/pdf/2016/Biospectrum.pdf"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('july22','2016')" class="media-box1" id="july222016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>22nd July</td>
                            <td width="70%">MedGenome to present its tumor microenvironment analysis results at the AACR Cancer Immunotherapy Conference in New York</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="july22pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmaceutical-industry-today.png",
                            "science-news-today.png",
                            "biotechnology-news-today.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "pharmaceuticals_einnews",
                            "science_einnews",
                            "biotech_einnews"
                        ];
                        $url = [
                            "http://pharmaceuticals.einnews.com/pr_news/336298598/medgenome-to-present-its-tumor-microenvironment-analysis-results-at-the-aacr-cancer-immunotherapy-conference-in-new-york",
                            "http://science.einnews.com/pr_news/336298598/medgenome-to-present-its-tumor-microenvironment-analysis-results-at-the-aacr-cancer-immunotherapy-conference-in-new-york",
                            "http://biotech.einnews.com/pr_news/336298598/medgenome-to-present-its-tumor-microenvironment-analysis-results-at-the-aacr-cancer-immunotherapy-conference-in-new-york"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('july20','2016')" class="media-box1" id="july202016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>20th July</td>
                            <td width="70%">Genetics Screening in Paediatric Nephrology</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="july20pop" style="display: none;">
                        <?php
                        $image = [
                            "logo-btoday.png",
                            "logo_transparent.gif",
                            "pti_logo.jpg",
                            "business-observer.png",
                            "dataguru.png",
                            "iifl.jpg",
                            "vccircle-logo.png",
                            "asia_pacific_newswire.jpg",
                            "logo-prn-01_PRN.gif"

                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "businesstoday-july20",
                            "thehansindia-july20",
                            "ptinews-july20",
                            "businessobserver-july20",
                            "dataguru-july20",
                            "indiainfoline0209",
                            "vccircle0209",
                            "asiapacificnewswire0209",
                            "prnewswire0209"
                        ];
                        $url = [
                            "http://www.businesstoday.in/prnewswire/index.jsp?rkey=20160720enIN201607201060_indiapublic&filter=2418",
                            "http://www.thehansindia.com/home/prnewswire?rkey=20160720enIN201607201060_indiapublic&filter=2080",
                            "http://www.ptinews.com/pressrelease/19492_press-subGenetics-Screening-in-Paediatric-Nephrology",
                            "http://businessobserver.in/prnewswire/?rkey=20160720enIN201607201060_indiapublic&filter=5905",
                            "http://dataguru.in/prnewswire.do?rkey=20160720enIN201607201060_indiapublic&filter=2488",
                            "http://www.indiainfoline.com/prnewswire?doc=201607200830PR_NEWS_EURO_ND__enIN201607201060_indiapublic&dir=25",
                            "http://www.vccircle.com/releases?doc=201607200830PR_NEWS_EURO_ND__enIN201607201060_indiapublic&dir=25",
                            "http://asiapacificnewswire.com/prnewswire/?rkey=20160720enIN201607201060_indiapublic&filter=6725",
                            "http://www.prnewswire.co.in/news-releases/genetics-screening-in-paediatric-nephrology-587619821.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('july13','2016')" class="media-box1" id="july132016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>13th July</td>
                            <td width="70%">SciGenom Research Foundation (SGRF) Announces Scholarships, Travel Awards and Genome Project Grants for Student Participation</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="july13pop" style="display: none;">
                        <?php
                        $image = [
                            "the-new-indian-express.jpg",
                            "logo-btoday.png",
                            "logo_transparent.gif",
                            "vccircle-logo.png",
                            "logo-prn-01_PRN.gif"

                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "PR Corner - The New Indian Express 2016-07-13 17-27-21",
                            "PR Newswire 2016-07-13 17-29-00",
                            "PRNewswire - THE HANS INDIA 2016-07-13 17-29-28",
                            "Releases - VCCircle 2016-07-13 17-30-27",
                            "SciGenom Research Foundation (SGRF) Announces Scholarships, Travel Awards and Genome Project Grants -PR Newswire India- 2016-07-13 17-35-26"
                        ];
                        $url = [
                            "http://www.newindianexpress.com/prcorner/?doc=201607130258PR_NEWS_EURO_ND__enIN201607130316_indiapublic&dir=25",
                            "http://www.businesstoday.in/prnewswire/index.jsp?rkey=20160713enIN201607130316_indiapublic&filter=2418",
                            "http://www.thehansindia.com/home/prnewswire?rkey=20160713enIN201607130316_indiapublic&filter=2080",
                            "http://www.vccircle.com/releases?doc=201607130258PR_NEWS_EURO_ND__enIN201607130316_indiapublic&dir=25",
                            "http://www.prnewswire.co.in/news-releases/scigenom-research-foundation-sgrf-announces-scholarships-travel-awards-and-genome-project-grants-for-student-participation-586583121.html"

                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        
                        <tr ng-click="additionalNews('july09','2016')" class="media-box1" id="july092016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <td>09th July</td>
                            <td width="70%">Doctors Discuss About Genetic Testing in Clinical Practice at Manipal Hospital, Goa</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="july09pop" style="display: none;">
                        <?php
                        $image = [
                            "pharmabiz.jpg"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "09thJul2016"
                        ];
                        $url = [
                            "http://www.pharmabiz.com/NewsDetails.aspx?aid=96167&sid=2"

                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>



					<tr ng-click="additionalNews('july01','2016')" class="media-box1" id="july012016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <td>1st July</td>
                        <td width="70%">Doctors Discuss About Genetic Testing in Clinical Practice at Manipal Hospital, Goa</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>

                        <tbody id="july01pop" style="display: none;">
                        <?php
                        $image = [
                            "logo-btoday.png",
                            "logo_transparent.gif",
                            "logo-prn-01_PRN.gif",
                            "asia_pacific_newswire.jpg",
                            "BUSINESS-INQUIRER-LOGO.png"
                        ];
                        $image_size = [
                            "width" => ["250px","250","250px","250px","250px"],
                            "height" => ["50","50","50","50","50"]
                        ];
                        $pdf = [
                            "businesstoday",
                            "thehansindia-july",
                            "prnewswire",
                            "asiapacificnewswire",
                            "businessinquirer"
                        ];
                        $url = [
                            "http://www.businesstoday.in/prnewswire/index.jsp?rkey=20160701enIN201607019243_indiapublic&filter=2418",
                            "http://www.thehansindia.com/home/prnewswire?rkey=20160701enIN201607019243_indiapublic&filter=2080",
                            "http://www.prnewswire.co.in/news-releases/doctors-discuss-about-genetic-testing-in-clinical-practice-at-manipal-hospital-goa-585193941.html",
                            "http://asiapacificnewswire.com/prnewswire/?rkey=20160701enIN201607019243_indiapublic&filter=6725",
                            "http://businessinquirer.in/prnewswire/?rkey=20160701enIN201607019243_indiapublic&filter=6170"

                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><?php if($image[$i] != "#") {?><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>" width="<?php echo $image_size['width'][$i];?>" height="<?php echo $image_size['height'][$i];?>"><?php } ?></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    <?php } ?>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "may") || (!isset($_REQUEST['month']))){?>
                    <tr ng-click="additionalNews('may21','2016')" class="media-box1" id="may212016">
                        <td>
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </td>
                        <td>21st May</td>
                        <td>Medgenome teams up with a southeast Asian consortium to create one of the largest repositories of Indian genomes</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>
                    <tr id="may21pop" style="display: none;">
                        <td></td>
                        <td>1</td>
                        <td><img src="<?php echo $site_path;?>/img/press/2016/hindu-logo.jpg"></td>
                        <td><a href="<?php echo $site_path;?>/pdf/2016/Largest-gene-database-of-Indians-soon-The-Hindu.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                        <td><a href="http://www.thehindu.com/news/national/largest-gene-database-of-indians-soon/article8627011.ece" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                    </tr>

                    <tr ng-click="additionalNews('may131','2016')" class="media-box1" id="may1312016">
                        <td>
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </td>
                        <td>13th May</td>
                        <td>Digital health to be $234 b market: major firms, startups are lining up to invest</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>
                    <tr id="may131pop" style="display: none;">
                        <td></td>
                        <td>1</td>
                        <td><img src="<?php echo $site_path;?>/img/press/2016/the-finacial-express.jpg"></td>
                        <td><a href="<?php echo $site_path;?>/pdf/2016/StartUp-India-Will-It-Lead-To-Stand-Up-India-%E2%80%93-The-Financial-Express.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                        <td><a href="http://www.financialexpress.com/article/lifestyle/health/digital-health-to-be-234-b-market-major-firms-startups-are-lining-up-to-invest/254396/" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                    </tr>

                    <tr ng-click="additionalNews('may132','2016')" class="media-box1" id="may1322016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                        <td>13th May</td>
                        <td>Digital health: The silver lining in the data cloud</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>
                    <tr id="may132pop" style="display: none;">
                        <td></td>
                        <td>1</td>
                        <td><img src="<?php echo $site_path;?>/img/press/2016/indian-express-small.jpg"></td>
                        <td><a href="<?php echo $site_path;?>/pdf/2016/Digital-health-The-silver-lining-in-the-data-cloud-The-Indian-Express.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                        <td><a href="http://indianexpress.com/article/technology/tech-news-technology/digital-health-wearables-health-apps-smartwatch-health-apps-2797787/" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                    </tr>

                    <tr ng-click="additionalNews('may09','2016')" class="media-box1" id="may092016">
                        <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                        <td>09th May </td>
                        <td>Genetic Testing gets affordable with customized offerings</td>
                        <td>PDF</td>
                        <td>Source Link</td>
                    </tr>
                    <tr id="may09pop" style="display: none;">
                        <td></td>
                        <td>1</td>
                        <td><img src="<?php echo $site_path;?>/img/press/2016/BUSINESS-STD.jpg"></td>
                        <td><a href="<?php echo $site_path;?>/pdf/2016/Genetic-Testing-Affordable-Business-Standard.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                        <td><a href="http://www.business-standard.com/article/companies/genetic-testing-gets-affordable-with-customised-offerings-from-start-ups-116050900027_1.html" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                    </tr>
                    <?php $i = 1; } ?>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "march") || (!isset($_REQUEST['month']))){?>



                     <?php $i = 1; } ?>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "june") || (!isset($_REQUEST['month']))){?>
                        <tr>
                            <td colspan="5"><hr></td>
                        </tr>
                        <tr ng-click="additionalNews('june04','2016')" class="media-box1" id="june042016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>04th Jun</td>
                            <td>MedGenome partners with ZellNet Consulting to offer powerful genomics solutions in immune-oncology research</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="june04pop" style="display: none;">
                        <?php
                        $image = [
                            "busi-news-today.jpg",
                            "corporate-news-today.jpg",
                            "eurozone.jpg",
                            "Pharmaceutical-Industry-Today.jpg",
                            "healthcare-logo.jpg",
                            "healthcare-reform.jpg",
                            "company-news.jpg",
                            "fairtrade-news.jpg"
                        ];
                        $pdf = [
                            "Business-News-today",
                            "EIN-CSR",
                            "EIN-Eurozone",
                            "EIN-Pharmaceutical-Industry-Today",
                            "Healthcare-Industry-Today-EIN-News",
                            "EIN-Healthcare-reformnewstoday",
                            "EIN-Companynews",
                            "EIN-Fairtrade-News-Today"
                        ];
                        $url = [
                            "http://business.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research",
                            "http://csr.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research",
                            "http://eurozone.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research",
                            "http://pharmaceuticals.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research",
                            "http://health.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research",
                            "http://healthreform.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research",
                            "http://companies.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research",
                            "http://fairtrade.einnews.com/pr_news/329444761/medgenome-partners-with-zellnet-consulting-to-offer-powerful-genomics-solutions-in-immune-oncology-research"
                        ];
                        for($i=0; $i<count($image); $i++){
                        ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    <?php $i = 1; } ?>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "may") || (!isset($_REQUEST['month']))){?>
                        <tr ng-click="additionalNews('may06','2016')"class="media-box1" id="may062016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>06th May</td>
                            <td>MedGenome to Unveil the South Asian Genome Variation Database (SAGVDB) Capturing Genetic Variations in South Asian Populations</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="may06pop" style="display: none;">
                        <?php
                        $image = [
                            "denver-business-journal.jpg",
                            "LA-BIZ.jpg",
                            "BOSTON.COM_.jpg",
                            "MARKET-WATCH.jpg",
                            "YAHOO-FINANCE.png",
                            "yahoo-fin-sg.jpg"
                        ];
                        $pdf = [
                            "bizjournals.com-denver",
                            "bizjournals.com-losangeles",
                            "finance-boston",
                            "marketwatch",
                            "finance-yahoo",
                            "sg-finance-yahoo"
                        ];
                        $url = [
                            "http://www.bizjournals.com/denver/prnewswire/press_releases/Georgia/2016/05/06/enUK201605063088?ana=prnews",
                            "http://www.bizjournals.com/losangeles/prnewswire/press_releases/Georgia/2016/05/06/enUK201605063088?ana=prnews",
                            "http://finance.boston.com/boston/news/read/32056810/medgenome_to_unveil_the_south_asian_genome_variation_database_",
                            "http://www.marketwatch.com/story/medgenome-to-unveil-the-south-asian-genome-variation-database-sagvdb-capturing-genetic-variations-in-south-asian-populations-2016-05-06",
                            "http://finance.yahoo.com/news/medgenome-unveil-south-asian-genome-133000932.html",
                            "https://sg.finance.yahoo.com/news/medgenome-unveil-south-asian-genome-133000932.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                    <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "april") || (!isset($_REQUEST['month']))){?>
                        <tr ng-click="additionalNews('april29','2016')"class="media-box1" id="april292016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>29th Apr</td>
                            <td>MedGenome announces free access to OncoPeptTOPE™, its proprietary database of neo-antigens and neo-epitopes</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april29pop" style="display: none;">
                        <?php
                        $image = [
                            "Insurance-logo.jpg",
                            "Science-logo.jpg",
                            "healthcare-logo.jpg"
                        ];
                        $pdf = [
                            "Insurance-Industry-Today",
                            "Science-News-Today",
                            "Healthcare-Industry-Today"
                        ];
                        $url = [
                            "http://insurance.einnews.com/pr_news/323880415/medgenome-announces-free-access-to-oncopepttope-its-proprietary-database-of-neo-antigens-and-neo-epitopes",
                            "http://science.einnews.com/pr_news/323880415/medgenome-announces-free-access-to-oncopepttope-its-proprietary-database-of-neo-antigens-and-neo-epitopes",
                            "http://health.einnews.com/pr_news/323880415/medgenome-announces-free-access-to-oncopepttope-its-proprietary-database-of-neo-antigens-and-neo-epitopes"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('april272','2016')"class="media-box1" id="april2722016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>27th Apr</td>
                            <td>AIIMS Bhopal and MedGenome discussed about targeted medical treatment based on an individual\'s genetic disposition</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april272pop" style="display: none;">
                        <?php
                        $image = [
                            "Aiims.png",
                            "Aiims.png",
                            "times.jpg"
                        ];
                        $pdf = [
                            "AIIMS_Bhopal_1",
                            "AIIMS_Bhopal_2",
                            "The_Times_of_India_-Bhopal_Pg-no.03_26.04"
                        ];
                        $url = [
                            "aprilaims1",
                            "aprilaims2",
                            "#"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="#" type="button" data-toggle="modal" data-target="#<?php echo $url[$i];?>"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('april213','2016')"class="media-box1" id="april2132016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>21st Apr</td>
                            <td>MedGenome Offers Genomics-based Clinical Reporting in MENA Region</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april213pop" style="display: none;">
                        <?php
                        $image = [
                            "oman-daily-news.jpg",
                            "saudi-gazatte.jpg",
                            "arab-news.jpg",
                            "epr.jpg",
                            "Yahoo_Finance.jpg"
                        ];
                        $pdf = [
                            "ODN_Oman_DailyNews",
                            "SaudiArabia_NewsGazette",
                            "ArabNewsExpress",
                            "EPR_Emirates_PressReleases",
                            "Yahoo_News"
                        ];
                        $url = [
                            "http://arabpressreleases.asia/%D9%85%D9%8A%D8%AF-%D8%AC%D9%8A%D9%86%D9%88%D9%85-%D8%AA%D9%82%D8%AF%D9%85-%D8%AA%D9%82%D8%A7%D8%B1%D9%8A%D8%B1-%D8%B3%D8%B1%D9%8A%D8%B1%D9%8A%D8%A9-%D9%82%D8%A7%D8%A6%D9%85%D8%A9-%D8%B9%D9%84%D9%89.html",
                            "http://www.saudiarabianewsgazette.com/%D9%85%D9%8A%D8%AF-%D8%AC%D9%8A%D9%86%D9%88%D9%85-%D8%AA%D9%82%D8%AF%D9%85-%D8%AA%D9%82%D8%A7%D8%B1%D9%8A%D8%B1-%D8%B3%D8%B1%D9%8A%D8%B1%D9%8A%D8%A9-%D9%82%D8%A7%D8%A6%D9%85%D8%A9-%D8%B9%D9%84%D9%89/",
                            "http://arabpressreleases.asia/%D9%85%D9%8A%D8%AF-%D8%AC%D9%8A%D9%86%D9%88%D9%85-%D8%AA%D9%82%D8%AF%D9%85-%D8%AA%D9%82%D8%A7%D8%B1%D9%8A%D8%B1-%D8%B3%D8%B1%D9%8A%D8%B1%D9%8A%D8%A9-%D9%82%D8%A7%D8%A6%D9%85%D8%A9-%D8%B9%D9%84%D9%89.html",
                            "http://emiratespressreleases.com/%D9%85%D9%8A%D8%AF-%D8%AC%D9%8A%D9%86%D9%88%D9%85-%D8%AA%D9%82%D8%AF%D9%85-%D8%AA%D9%82%D8%A7%D8%B1%D9%8A%D8%B1-%D8%B3%D8%B1%D9%8A%D8%B1%D9%8A%D8%A9-%D9%82%D8%A7%D8%A6%D9%85%D8%A9-%D8%B9%D9%84%D9%89/",
                            "http://finance.yahoo.com/news/medgenome-offers-genomics-based-clinical-063000511.html"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('april214','2016')"class="media-box1" id="april2142016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>21st Apr</td>
                            <td>MedGenome Offers State-of-the-Art Genomics Services to Academic Research Institutions</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april214pop" style="display: none;">
                        <?php
                        $image = [
                            "iifl.jpg",
                            "VC-CIRCLE.png",
                            "The-Hans-India.png",
                            "medindia.jpg",
                            "ap-herald.jpg",
                            "indian-express-small.jpg",
                            "telegraph-logo.jpg"
                        ];
                        $pdf = [
                            "indiainfoline",
                            "vccircle",
                            "thehansindia",
                            "medindia",
                            "apherald",
                            "NewIndianExpress",
                            "telegraphindia"
                        ];
                        $url = [
                            "http://www.indiainfoline.com/prnewswire?doc=201604201036PR_NEWS_EURO_ND__enIN201604201309_indiapublic&dir=25",
                            "http://www.vccircle.com/releases?doc=201604201036PR_NEWS_EURO_ND__enIN201604201309_indiapublic&dir=25",
                            "http://www.thehansindia.com/home/prnewswire?rkey=20160420enIN201604201309_indiapublic&filter=2080",
                            "http://www.medindia.net/health-press-release/displaynews.asp",
                            "#",
                            "http://www.newindianexpress.com/prcorner/?doc=201604201036PR_NEWS_EURO_ND__enIN201604201309_indiapublic&dir=25",
                            "http://www.telegraphindia.com/pressrelease/prnw/enin201604201309_indiapublic.html#.V2uXeKLQg8t"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('april12','2016')"class="media-box1" id="april122016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>12th Apr </td>
                            <td>MedGenome study analyzing Wellderley data shows interesting trend on gene mutations associated with cardiac function</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april12pop" style="display: none;">
                        <?php
                        $image = [
                            "global-investing-today.jpg",
                            "busi-news-today.jpg",
                            "healthcare-indus.jpg",
                            "Pharmaceutical-Industry-Today.jpg",
                            "research-today.jpg",
                            "Science-News-Today.jpg",
                            "ask.jpg",
                            "wallstreet.jpg"
                        ];
                        $pdf = [
                            "GlobalInvesting_News_Diabetes_Summit",
                            "Business_News_Diabetes_Summit",
                            "Health_News_Diabetes_Summit",
                            "pharmaceuticals_News_Diabetes_Summit",
                            "Researchreports_News_Diabetes_Summit",
                            "Science_News_Diabetes",
                            "Markets_News_Diabetes_Summit",
                            "WallStreetSelect_News_Diabetes_Summit"
                        ];
                        $url = [
                            "http://investing.einnews.com/pr_news/321072520/medgenome-study-analyzing-wellderley-data-shows-interesting-trend-on-gene-mutations-associated-with-cardiac-function",
                            "http://business.einnews.com/pr_news/321072520/medgenome-study-analyzing-wellderley-data-shows-interesting-trend-on-gene-mutations-associated-with-cardiac-function",
                            "http://health.einnews.com/pr_news/321072520/medgenome-study-analyzing-wellderley-data-shows-interesting-trend-on-gene-mutations-associated-with-cardiac-function",
                            "http://pharmaceuticals.einnews.com/pr_news/321072520/medgenome-study-analyzing-wellderley-data-shows-interesting-trend-on-gene-mutations-associated-with-cardiac-function",
                            "http://researchreports.einnews.com/pr_news/321072520/medgenome-study-analyzing-wellderley-data-shows-interesting-trend-on-gene-mutations-associated-with-cardiac-function",
                            "http://science.einnews.com/pr_news/321072520/medgenome-study-analyzing-wellderley-data-shows-interesting-trend-on-gene-mutations-associated-with-cardiac-function",
                            "http://markets.ask.com/ask/news/read?GUID=31887570",
                            "http://investor.wallstreetselect.com/wss/news/read?GUID=31887570"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('april082','2016')"class="media-box1" id="april0822016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>08th Apr</td>
                            <td width="70%">Dr. S.P. Thyagarajan, Professor of Eminence & Dean (Research) at Sri Ramachandra University, Chennai talked about latest advances in Translational research at a Symposium organised by MedGenome at Bangalore</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="april082pop" style="display: none;">
                        <?php
                        $image = [
                            "eesanje.jpg",
                            "internet-news-for-u.jpg",
                            "pharmabiz.jpg"
                        ];
                        $pdf = [
                            "EESANJE-EESANJE",
                            "InternetNewsForYou_Seminar_Prof-Thiagarajan",
                            "pharmabiz_Seminar_Prof-Thiagarajan"
                        ];
                        $url = [
                            "http://www.eesanje.com/epaper/article.php?articleid=EESANJE_BEN_20160407_9_5&referringWebsite=eReleGo&number=20160407044857",
                            "https://internetnewsforyou.biz/2016/04/05/experts-discuss-on-latest-advances-in-translational-research-at-a-symposium-held-in-bangalore/",
                            "http://www.pharmabiz.com/NewsDetails.aspx?aid=94453&sid=2"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('april08','2016')" class="media-box1" id="april082016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>08th Apr </td>
                            <td>Sequencing 100,000 Asian genomes for tailor-made healthcare</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>
                        <tr id="april08pop" style="display: none;">
                            <td></td>
                            <td>1</td>
                            <td><img src="<?php echo $site_path;?>/img/press/2016/straight-times.jpg"></td>
                            <td><a href="<?php echo $site_path;?>/pdf/2016/Sequencing-100000-Asian-genomes.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                            <td><a href="http://www.straitstimes.com/singapore/health/sequencing-100000-asian-genomes-for-tailor-made-healthcare" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                        </tr>

                        <?php $i = 1; } ?>

                        <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "march") || (!isset($_REQUEST['month']))){?>
                        <tr ng-click="additionalNews('march30','2016')"class="media-box1" id="march302016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>30th Mar</td>
                            <td width="70%">MedGenome to present on OncoMD, a genomics data analysis and interpretation platform, for cancer discovery research at the AACR Conference 2016</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="march30pop" style="display: none;">
                        <?php
                        $image = [
                            "World-News-Report.jpg",
                            "Breast-Cancer-News-Today.jpg",
                            "Insurance-Industry-Today.jpg",
                            "Lung-Cancer-News-Today.jpg",
                            "OECD-News-Today.jpg",
                            "Pharmaceutical-Industry-Today.jpg",
                            "Prostate-Cancer-News-Today.jpg",
                            "Science-News-Today.jpg"
                        ];
                        $pdf = [
                            "World-NEWS-Today",
                            "Breast-Cancer-News-Today",
                            "Insurance-Industry-Today",
                            "Lung-cancer",
                            "OECD-NEWS-Today",
                            "Pharmaceutical-industry",
                            "Prostate-cancer",
                            "Science-NEWS-Today"
                        ];
                        $url = [
                            "http://world.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research",
                            "http://breastcancer.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research",
                            "http://insurance.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research",
                            "http://lungcancer.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research",
                            "http://oecd.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research",
                            "http://pharmaceuticals.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research",
                            "http://prostatecancer.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research",
                            "http://science.einnews.com/pr_news/318928618/medgenome-to-present-on-oncomd-a-genomics-data-analysis-and-interpretation-platform-for-cancer-discovery-research"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                        <tr ng-click="additionalNews('march14','2016')" class="media-box1" id="march142016">
                            <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                            <td>14th Mar </td>
                            <td width="70%">MedGenome presented OncoPept – a point solution in cancer immunotherapy at the Molecular Medicine Tri-Conference 2016</td>
                            <td>PDF</td>
                            <td>Source Link</td>
                        </tr>

                        <tbody id="march14pop" style="display: none;">
                        <?php
                        $image = [
                            "Yahoo_Finance.jpg",
                            "BOSTON.COM_.jpg",
                            "BOSTON-BUSINESS-JOURNAL.jpg",
                            "MARKET-WATCH.jpg"
                        ];
                        $pdf = [
                            "yahoo-finance",
                            "boston",
                            "Boston-Business-Journal",
                            "market-watch"
                        ];
                        $url = [
                            "https://sg.finance.yahoo.com/news/medgenome-presented-oncopept-point-solution-053000731.html",
                            "http://finance.boston.com/boston/news/read/31713713/medgenome_presented_oncopept_",
                            "http://www.bizjournals.com/boston/prnewswire/press_releases/Georgia/2016/03/14/enUK201603147606?ana=prnews",
                            "http://www.marketwatch.com/story/medgenome-presented-oncopept---a-point-solution-in-cancer-immunotherapy-to-harness-the-power-of-the-immune-system-to-fight-cancer---at-the-molecular-medicine-tricon-2016-2016-03-14"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                            <tr ng-click="additionalNews('march082','2016')" class="media-box1" id="march0822016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>08th Mar</td>
                                <td width="70%">MedGenome and Narayana Nethralaya Organised a discussion on Genetics in Ophthamology</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                        <tbody id="march082pop" style="display: none;">
                        <?php
                        $image = [
                            "PTI.jpg",
                            "pharmabiz.jpg",
                            "BUSINESS-TODAY.png",
                            "India-Today-logo1.jpg",
                            "indian-express-1.jpg"
                        ];
                        $pdf = [
                            "ptinews_MedGenome_NN-ed",
                            "Pharmabiz_MedGenome_NN-ed",
                            "businesstoday_MedGenome_NN-ed",
                            "indiatoday_MedGenome_NN-ed",
                            "newindianexpress_MedGenome_NN-ed"
                        ];
                        $url = [
                            "http://www.ptinews.com/pressrelease/17623_press-subMedGenome-and-Narayana-Nethralaya-Organised-a-Discussion-on-Genetics-in-Ophthalmology",
                            "http://pharmabiz.com/NewsDetails.aspx?aid=93823&sid=1",
                            "http://www.businesstoday.in/prnewswire/index.jsp?rkey=20160307enIN201603076890_indiapublic&filter=2418",
                            "http://indiatoday.intoday.in/prnewswire/index.jsp?doc=201603070144PR_NEWS_EURO_ND__enIN201603076890_indiapublic&dir=25",
                            "http://www.newindianexpress.com/prcorner/?doc=201603070144PR_NEWS_EURO_ND__enIN201603076890_indiapublic&dir=25"
                        ];
                        for($i=0; $i<count($image); $i++){
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $i + 1;?></td>
                                <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <?php $i = 1; } ?>

                        <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "february") || (!isset($_REQUEST['month']))){?>
                            <tr ng-click="additionalNews('feb292','2016')"class="media-box1" id="feb2922016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>29th Feb</td>
                                <td width="70%">MedGenome’s OncoMD helps analyze Genetic Alterations in Mesothelioma – Paper published in Nature Genetics</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="feb292pop" style="display: none;">
                            <?php
                            $image = [
                                "albany.jpg",
                                "BOSTON-BUSINESS-JOURNAL.jpg",
                                "Yahoo_Finance.jpg",
                                "YAHOO-FINANCE.png"
                            ];
                            $pdf = [
                                "MedGenomes-OncoMD-Helps-Analyze-Genetic-Alterations-in-Mesothelioma-Albany-Business-Review",
                                "MedGenomes-OncoMD-Helps-Analyze-Genetic-Alterations-in-Mesothelioma-Boston-Business-Journal",
                                "MedGenomes-OncoMD-Helps-Analyze-Genetic-Alterations-in-Mesothelioma-Yahoo-Finance",
                                "MedGenomes-OncoMD-Helps-Analyze-Genetic-Alterations-in-Mesothelioma-Yahoo-Singapore-Finance"
                            ];
                            $url = [
                                "http://www.bizjournals.com/albany/prnewswire/press_releases/Georgia/2016/03/01/enUK201603016337?ana=prnews",
                                "http://www.bizjournals.com/boston/prnewswire/press_releases/Georgia/2016/03/01/enUK201603016337?ana=prnews",
                                "https://sg.finance.yahoo.com/news/medgenomes-oncomd-helps-analyze-genetic-170000731.html",
                                "http://finance.yahoo.com/news/medgenomes-oncomd-helps-analyze-genetic-170000731.html"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('feb29','2016')"class="media-box1" id="feb292016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>29th Feb</td>
                                <td>StartUp India Will It Lead To Stand Up India?</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>
                            <tr id="feb29pop" style="display: none;">
                                <td></td>
                                <td>1</td>
                                <td><img src="<?php echo $site_path;?>/img/press/2016/GENOME-WEB.jpg"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/Study-IDs-Recurrent-Mesothelioma-Tumor-Alterations-_-GenomeWeb.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="https://www.genomeweb.com/sequencing-technology/study-ids-recurrent-mesothelioma-tumor-alterations" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>

                            <tr ng-click="additionalNews('feb24','2016')"class="media-box1" id="feb242016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>24th Feb</td>
                                <td width="70%">MedGenome Acquires Lifecode Health Assets and CLIA Certified Lab in Bay Area</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="feb24pop" style="display: none;">
                            <?php
                            $image = [
                                "MARKET-WATCH.jpg",
                                "the-street.jpg",
                                "YAHOO-FINANCE.png",
                                "Yahoo_Finance.jpg",
                                "albany.jpg",
                                "albuquerque.jpg",
                                "AUSTIN-BUZ-JOURNAL.jpg",
                                "BOSTON-BUSINESS-JOURNAL.jpg",
                                "BOSTON.COM_.jpg",
                                "Chicago-Business-Journal.jpg",
                                "LA-BIZ.jpg"
                            ];
                            $pdf = [
                                "Market-watch_Lifecode-Acquistion",
                                "The-Street_Lifecode-Acquisition",
                                "Yahoo-finance-Lifecode-Acquisition",
                                "Yahoo-finance-singapore_Lifecode-Acquisition",
                                "albany_Lifecode-Acquisition",
                                "albuquerque_Lifecode-Acqusition",
                                "Austin-Business-Journal",
                                "Boston-Business-Journal_Lifecode-Acquisition",
                                "Boston_Lifecode-Acquisition",
                                "chicago-Business-Journal_Lifecode-Acqusition",
                                "LA-Biz_Lifecode-Acquisition"
                            ];
                            $url = [
                                "http://www.marketwatch.com/story/medgenome-acquires-lifecode-health-assets-and-clia-certified-lab-in-bay-area-2016-02-24",
                                "https://www.thestreet.com/story/13470450/1/medgenome-acquires-lifecode-health-assets-and-clia-certified-lab-in-bay-area.html",
                                "http://www.bizjournals.com/albany/prnewswire/press_releases/Georgia/2016/02/24/enUK201602245751?ana=prnews",
                                "http://finance.yahoo.com/news/medgenome-acquires-lifecode-health-assets-170000633.html",
                                "https://sg.finance.yahoo.com/news/medgenome-acquires-lifecode-health-assets-170000633.html",
                                "http://www.bizjournals.com/albany/prnewswire/press_releases/Georgia/2016/02/24/enUK201602245751?ana=prnews",
                                "http://www.bizjournals.com/albuquerque/prnewswire/press_releases/Georgia/2016/02/24/enUK201602245751?ana=prnews",
                                "http://www.bizjournals.com/boston/prnewswire/press_releases/Georgia/2016/02/24/enUK201602245751?ana=prnews",
                                "#",
                                "http://www.bizjournals.com/chicago/prnewswire/press_releases/Georgia/2016/02/24/enUK201602245751?ana=prnews",
                                "http://www.bizjournals.com/losangeles/prnewswire/press_releases/Georgia/2016/02/24/enUK201602245751?ana=prnews"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('feb172','2016')"class="media-box1" id="feb1722016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>17th Feb</td>
                                <td width="70%">MedGenome Awarded With the_Bio-Excellence Award</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="feb172pop" style="display: none;">
                            <?php
                            $image = [
                                "BUSINESS-TODAY.png",
                                "VC-CIRCLE.png",
                                "biotechnika.jpg",
                                "indian-express-1.jpg",
                                "telegraph-logo.jpg"
                            ];
                            $pdf = [
                                "PR_Corner_-_Newswire",
                                "MedGenome_Awarded_With_the_Bio-Excellence_Award_-_VCCircle",
                                "MedGenome_Awarded_With_the_Bio-Excellence_Award_-_Biotecnika",
                                "PR_Corner_-_The_New_Indian_Express",
                                "MedGenome_Awarded_With_the_Bio-Excellence_Award_-_The_Telegraph"
                            ];
                            $url = [
                                "http://www.businesstoday.in/prnewswire/index.jsp?rkey=20160217enIN201602174842_indiapublic&filter=2418",
                                "http://www.vccircle.com/releases?doc=201602170225PR_NEWS_EURO_ND__enIN201602174842_indiapublic&dir=25",
                                "https://www.biotecnika.org/",
                                "http://www.newindianexpress.com/prcorner/?doc=201602170225PR_NEWS_EURO_ND__enIN201602174842_indiapublic&dir=25",
                                "http://www.telegraphindia.com/pressrelease/prnw/enin201602174842_indiapublic.html#.V2umG6LQg8u"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('feb15','2016')"class="media-box1" id="feb152016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>15th Feb</td>
                                <td width="70%">MedGenome to discuss its proprietary cancer immunotherapeutics platform</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="feb15pop" style="display: none;">
                            <?php
                            $image = [
                                "dailynews.jpg",
                                "pharmaceutical-industry.jpg",
                                "science-news.jpg",
                                "silconvalley.jpg",
                                "BOSTON.COM_.jpg",
                                "wallstreet.jpg",
                                "international-business.jpg"
                            ];
                            $pdf = [
                                "MedGenome-to-discuss-its-proprietary-cancer-Dail-News",
                                "MedGenome-to-discuss-its-proprietary-cancer-Pharmaceutical-Industry-Today",
                                "MedGenome-to-discuss-its-proprietary-cancer-Science-News-Today",
                                "MedGenome-to-discuss-its-proprietary-cancer-SiliconValley.com_",
                                "MedGenome-to-discuss-its-proprietary-cancer-i-Boston.com_",
                                "MedGenome-to-discuss-its-proprietary-cancer-wallstreetselect.com_",
                                "MedGenome-to-discuss-its-proprietary-cancer-International-Business"
                            ];
                            $url = [
                                "http://markets.financialcontent.com/mng-lang.dailynews/news/read/31544116/MedGenome_to_discuss_its_proprietary_cancer_immunotherapeutics_platform_at_the_San_Diego_conference",
                                "http://pharmaceuticals.einnews.com/pr_news/311754438/medgenome-to-discuss-its-proprietary-cancer-immunotherapeutics-platform-at-the-san-diego-conference",
                                "http://science.einnews.com/pr_news/311754438/medgenome-to-discuss-its-proprietary-cancer-immunotherapeutics-platform-at-the-san-diego-conference",
                                "http://markets.financialcontent.com/mng-ba.siliconvalley/news/read/31544116/MedGenome_to_discuss_its_proprietary_cancer_immunotherapeutics_platform_at_the_San_Diego_conference",
                                "http://www.boston.com/tag/finance",
                                "http://investor.wallstreetselect.com/wss/news/read?GUID=31544116",
                                "http://markets.financialcontent.com/ibtimes/news/read?GUID=31544116"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('feb12','2016')"class="media-box1" id="feb122016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>12th Feb</td>
                                <td>GenomeAsia 100K Kicks Off Effort to Sequence 100,000 Asian Individuals</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>
                            <tr id="feb12pop" style="display: none;">
                                <td></td>
                                <td>1</td>
                                <td><img src="<?php echo $site_path;?>/img/press/2016/GENOME-WEB.jpg"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/GenomeAsia_100K_Kicks_Off_Effort_to_Sequence_100_000_Asian_Individuals___GenomeWeb.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="https://www.genomeweb.com/sequencing-technology/genomeasia-100k-kicks-effort-sequence-100000-asian-individuals" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>

                            <tr ng-click="additionalNews('feb023','2016')"class="media-box1" id="feb0232016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>02th Feb</td>
                                <td width="70%"> MedGenome Presents its Research Findings at Advances in Genome Biology and Technology (AGBT) 2016 </td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="feb023pop" style="display: none;">
                            <?php
                            $image = [
                                "Yahoo_Finance.jpg",
                                "PR-NEWSWIRE.jpg",
                                "BOSTON-BUSINESS-JOURNAL.jpg",
                                "the-street.jpg",
                                "YAHOO-FINANCE.png"
                            ];
                            $pdf = [
                                "MedGenome-Presents-its-Research-Findings-at-Advances-in-Genome-Biology-and-Technology-AGBT2016-Yahoo-Singapore-Finance",
                                "MedGenome-Presents-its-Research-Findings-at-Advances-in-Genome-Biology-and-Technology-SAN-FRANCISCO-PRNewswire",
                                "MedGenome-Presents-its-Research-Findings-at-Advances-in-Genome-Biology-and-Technology-AGBT2016_BBJ",
                                "MedGenome-Presents-Its-Research-Findings-At-Advances-In-Genome-Biology-And-Technology-AGBT2016-TheStreet",
                                "MedGenome-Presents-its-Research-Findings-at-Advances-in-Genome-Biology-and-Technology-AGBT2016-Yahoo-Finance-"
                            ];
                            $url = [
                                "https://sg.finance.yahoo.com/news/medgenome-presents-research-findings-advances-120000786.html",
                                "http://www.prnewswire.com/news-releases/medgenome-presents-its-research-findings-at-advances-in-genome-biology-and-technology-agbt2016-567330641.html",
                                "http://www.bizjournals.com/boston/prnewswire/press_releases/Georgia/2016/02/02/enUK201602023297?ana=prnews",
                                "https://www.thestreet.com/story/13443834/1/medgenome-presents-its-research-findings-at-advances-in-genome-biology-and-technology-agbt2016.html",
                                "http://finance.yahoo.com/news/medgenome-presents-research-findings-advances-120000786.html"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('feb022','2016')"class="media-box1" id="feb0222016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>02th Feb</td>
                                <td width="70%">MedGenome teams up with KCHRC to set up molecular genetics lab</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="feb022pop" style="display: none;">
                            <?php
                            $image = [
                                "pharmabiz.jpg",
                                "ethealthword.jpg"
                            ];
                            $pdf = [
                                "MedGenome_teams_up_with_KCHRC_to_set_up_molecular_genetics_lab_PharmaBiz",
                                "MedGenome_teams_up_with_KCHRC_to_set_up_molecular_genetics_lab_-_ET_HealthWorld"
                            ];
                            $url = [
                                "http://www.pharmabiz.com/NewsDetails.aspx?aid=93173&sid=1",
                                "http://health.economictimes.indiatimes.com/news/diagnostics/medgenome-teams-up-with-kchrc-to-set-up-molecular-genetics-lab/50819665"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('feb012','2016')"class="media-box1" id="feb0122016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>01st Feb</td>
                                <td width="70%">KCHRC and MedGenome inaugurate molecular genetics laboratory in Gujarat</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="feb012pop" style="display: none;">
                            <?php
                            $image = [
                                "Yahoo_Finance.jpg",
                                "financialexpress_3.jpg"
                            ];
                            $pdf = [
                                "KCHRC_and_MedGenome_inaugurate_molecular_genetics_laboratory_in__Gujarat_-_Yahoo_India_Finance",
                                "KCHRC_and_MedGenome_inaugurate_molecular_genetics_laboratory_in_Gujarat_____The_Financial_Express"
                            ];
                            $url = [
                                "https://in.finance.yahoo.com/news/kchrc-medgenome-inaugurate-molecular-genetics-174600305.html",
                                "http://www.financialexpress.com/article/healthcare/happening-now/kchrc-and-medgenome-inaugurate-molecular-genetics-laboratory-in-gujarat/205272/"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <?php $i = 1; } ?>
                            <?php if((isset($_REQUEST['month']) && $_REQUEST['month'] == "january") || (!isset($_REQUEST['month']))){?>
                            <tr ng-click="additionalNews('jan12','2016')"class="media-box1" id="jan122016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>12th Jan </td>
                                <td width="70%">Medgenome to Present on Oncopept – a Point Solution in Cancer Immunotherapy at the Novel Immunotherapeutics Summit 2016</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="jan12pop" style="display: none;">
                            <?php
                            $image = [
                                "BOSTON.COM_.jpg",
                                "MARKET-WATCH.jpg",
                                "BOSTON-BUSINESS-JOURNAL.jpg",
                                "Chicago-Business-Journal.jpg",
                                "seking-alpha.jpg",
                                "YAHOO-FINANCE.png"
                            ];
                            $pdf = [
                                "Boston",
                                "marketwatch",
                                "Boston-Business-Journal",
                                "Chicago-Business-Journal",
                                "seekingalpha",
                                "Yahoo_Finance"
                            ];
                            $url = [
                                "http://www.boston.com/tag/finance",
                                "http://www.marketwatch.com/story/medgenome-to-present-on-oncopept---a-point-solution-in-cancer-immunotherapy-at-the-novel-immunotherapeutics-summit-2016-2016-01-12",
                                "http://www.bizjournals.com/boston/prnewswire/press_releases/Georgia/2016/01/12/enUK201601121043?ana=prnew",
                                "http://www.bizjournals.com/chicago/prnewswire/press_releases/Georgia/2016/01/12/enUK201601121043?ana=prnews",
                                "#",
                                "http://finance.yahoo.com/news/medgenome-present-oncopept-point-solution-120000618.html"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('jan042','2016')"class="media-box1" id="jan0422016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>04th Jan </td>
                                <td width="70%">Kerala Institute of Medical Sciences and MedGenome join hands in setting up a Genetic Disease Identification Centre in Kerala</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>

                            <tbody id="jan042pop" style="display: none;">
                            <?php
                            $image = [
                                "newsx.gif",
                                "sify-logo.jpg",
                                "two-circles.jpg",
                                "zeenews-logo-n.png"
                            ];
                            $pdf = [
                                "Kerala_-First-genetic-disease-identifi_-http___www.newsx_.com_lifestyle_1683",
                                "Genetic-disease-identification-centre-_-http___www.sify_.com_news_genetic-di",
                                "Genetic-disease_-http___twocircles.net_2016jan04_1451901989.html.VulaYOJ97Z5",
                                "Genetic-disease-identification-centre-_-http___zeenews.india_.com_news_healt"
                            ];
                            $url = [
                                "#",
                                "#",
                                "#",
                                "#"
                            ];
                            for($i=0; $i<count($image); $i++){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo $i + 1;?></td>
                                    <td align="center"><img src="<?php echo $site_path;?>/img/press/2016/<?php echo $image[$i];?>"></td>
                                    <td><a href="<?php echo $site_path;?>/pdf/2016/<?php echo $pdf[$i];?>.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                    <td><a href="<?php echo $url[$i];?>" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                                </tr>

                            <?php } ?>
                            </tbody>

                            <tr ng-click="additionalNews('jan04','2016')"class="media-box1" id="jan042016">
                                <td><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></td>
                                <td>04th Jan</td>
                                <td>First Genetic disease identification centre launched in Kerala</td>
                                <td>PDF</td>
                                <td>Source Link</td>
                            </tr>
                            <tr id="jan04pop" style="display: none;">
                                <td></td>
                                <td>1</td>
                                <td><img src="<?php echo $site_path;?>/img/press/2016/ethealthword.jpg"></td>
                                <td><a href="<?php echo $site_path;?>/pdf/2016/First-Genetic-disease-identification-_-http___health.economictimes.indiat.pdf" target="_blank"><img src="<?php echo $site_path;?>/img/press/pdf-link-icon.jpg"></a></td>
                                <td><a href="http://health.economictimes.indiatimes.com/news/industry/first-genetic-disease-identification-centre-launched-in-kerala/50437140" target="_blank"><img src="<?php echo $site_path;?>/img/press/source-link-icon.jpg"></a></td>
                            </tr>


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

<?php require 'model-2016.php';?>