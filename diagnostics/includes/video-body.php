<!-- End search -->
<!--<div class="container">
    <div class="row text-center">
            <div class="col-md-8 col-sm-12 videoimage">
                <div><a href="https://www.youtube.com/watch?v=ALpvLyiqMhU" class="hvr-bounce-in" target="_blank"><img src="<?php /*echo $site_path;*/?>/images/video/vidhya.jpg" alt="Dr. Vidhya"></a></div>
                <div class="videos-title"><a href="https://www.youtube.com/watch?v=ALpvLyiqMhU" target="_blank">Dr. Vidhya H Veldore, Principal Scientist, Oncology, Division, Medgenome</a></div>
            </div>
    </div>
</div>-->

<?php
$video_image = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg", "11.jpg", "12.jpg"];
$video_title = [
    "MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring",
    "Favourable lifestyle can counter balance the genetic risk of heart attack: Dr Sekar Kathiresan",
    "Lack of incentives is the prime reason behind the scarcity of clinicians in India: Dr Kumar Prabhash",
    "The story of Medgenome The story of Medgenome The story of Medgenome",
    "Dr. Chirantan Bose talking on Liquid Biopsy - Blood Test for Cancer Detection & Monitoring",
    "Liquid biopsy will improve accuracy, accessibility and variability in diagnosis: Dr R K Deshpande",
    "In search for answers to cardiovascular diseases we are scaling up the genomic research: Dr Mullasari Ajit",
    "Mr. Sam Santhosh, Chairman, MedGenome talking on Cancer Immunotherapy",
    "Soon we will have cancer vaccines created under genomic guidance: Dr Pramod K Srivastava",
    "There are many projects in India to sequence human genomes: Brenda J Andrews",
    "MedGenome - A Leading Provider of Genomics Research Services Globally",
    "Dr. Vidhya H Veldore, Principal Scientist, Oncology, Division, Medgenome"
];
$video_link = [
    "https://www.youtube.com/watch?v=ALpvLyiqMhU",
    "https://www.youtube.com/watch?v=7SoTKUHf9FA&feature=youtu.be",
    "http://health.economictimes.indiatimes.com/videos/favourable-lifestyle-can-counter-balance-the-genetic-risk-of-heart-attack-dr-sekar-kathiresan/55383250",
    "http://health.economictimes.indiatimes.com/videos/lack-of-incentives-is-the-prime-reason-behind-the-scarcity-of-clinicians-in-india-dr-kumar-prabhash/55255748",
    "https://www.youtube.com/watch?v=Rk93rTfaGFU&feature=youtu.be",
    "https://www.youtube.com/watch?v=evL0zefd4rc&feature=youtu.be",
    "http://health.economictimes.indiatimes.com/videos/liquid-biopsy-will-improve-accuracy-accessibility-and-variability-in-diagnosis-dr-r-k-deshpande/58048892",
    "http://health.economictimes.indiatimes.com/news/industry/in-search-for-answers-to-cardiovascular-diseases-we-are-scaling-up-the-
genomic-research-dr-mullasari-ajit-s/59856060",
    "https://www.youtube.com/watch?v=fIUEgXa1tdg",
    "http://health.economictimes.indiatimes.com/videos/soon-we-will-have-cancer-vaccines-created-under-genomic-guidance-dr-pramod-k-srivastava/59929033",
    "http://health.economictimes.indiatimes.com/news/industry/there-are-many-projects-in-india-to-sequence-human-genomes-brenda-j-andrews/60096057",
    "http://bwdisrupt.businessworld.in/video/MedGenome-A-Leading-Provider-of-Genomics-Research-Services-Globally-/18-10-2017-1097/"
];
?>

<div class="container-fluid">
    <div class="row">
        <?php for($i = count($video_image)-1; $i >= 0; $i--){ ?>
        <div class="col-xs-6 col-md-8">
            <div class="thumbnail">
                <a href="<?php echo $video_link[$i];?>" target="_blank">
                    <img class="img-fluid" src="<?php echo $site_path;?>/images/press/videos/<?php echo $video_image[$i];?>" alt="<?php echo $video_link[$i];?>">
                    <div class="caption">
                        <p><strong><?php echo $video_title[$i];?></strong></p>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>

    <!--<div class="row">
        <?php /*for($i = count($video_image)-1; $i >= 0; $i--){ */?>
        <div class="col-12 col-md-4 col-text-center" >
            <a href="<?php /*echo $video_link[$i];*/?>" target="_blank">
                <img class="img-fluid" src="<?php /*echo $site_path;*/?>/images/press/videos/<?php /*echo $video_image[$i];*/?>" alt="<?php /*echo $video_link[$i];*/?>">
                <div class="caption">
                    <p><strong><?php /*echo $video_title[$i];*/?></strong></p>
                </div>
        </div>
        <?php /*} */?>
     </div>-->

    <!--<div class="row">
        <div class="col-12 col-md-4 text-center" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
        <div class="col-12 col-md-4 text-center" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
        <div class="col-12 col-md-4 text-center" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
        <div class="col-12 col-md-4 text-center" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
        <div class="col-12 col-md-4" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
        <div class="col-12 col-md-4 text-center" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
        <div class="col-12 col-md-4 text-center" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
        <div class="col-12 col-md-4 text-center" >
            <a href="#" target="_blank">
                <img class="img-fluid" src="./images/press/videos/1.jpg" alt="1.jpg">
                <div class="caption">
                    <p><strong>MedGenome launches ONCOTRACK, the liquid biopsy blood test for cancer recurrence, detection & monitoring</strong></p>
                </div>
        </div>
    </div>-->

</div>