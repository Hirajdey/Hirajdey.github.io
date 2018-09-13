<?php
require '../config/config.php';
$split = explode('/', $_SERVER['REQUEST_URI']);
$page_name = explode('.', $split[count($split)-1]);
$page_name = $page_name[0];
?>
<div class="hero-block visible-sm visible-md visible-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="index.html"><img src="img/logo-actia-vector.svg" alt="ACTIA"></a>
                <h1>
                    <?php
                    if($page_name == 'cardio-genetic')
                        echo 'Cardio Genetics';
                    elseif($page_name == 'clinical-genetic')
                        echo 'Clinical Exome';
                    elseif($page_name == 'endocrine-genetic')
                        echo 'Endocrine Genetic';
                    elseif($page_name == 'ent-genetic')
                        echo 'Ent Genetic';
                    elseif($page_name == 'metabolic-genetic')
                        echo 'Metabolic Genetic';
                    elseif($page_name == 'nephro-genetic')
                        echo 'Nephro Genetic';
                    elseif($page_name == 'neuro-genetic')
                        echo 'Neuro Genetic';
                    elseif($page_name == 'ocular-genetic')
                        echo 'Ocular Genetic';
                    else
                        echo 'Cardio Genetics';?>
                </h1>
                <a href="<?php //echo $site_path;?>/diagnostics/actia-testlist.php" class="book-now">View test catalog</a>
            </div>
        </div>
    </div>
</div>

<div class="container hero-block text-center visible-xs">
    <div class="row">
        <div class="col-md-12 pb-2">
            <a href="index.html"><img src="img/logo-actia-vector.svg" alt="ACTIA"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4">
                <?php
                    if($page_name == 'cardio-genetic')
                        echo 'Cardio Genetics';
                    elseif($page_name == 'clinical-genetic')
                        echo 'Clinical Exome';
                    elseif($page_name == 'endocrine-genetic')
                        echo 'Endocrine Genetic';
                    elseif($page_name == 'ent-genetic')
                        echo 'Ent Genetic';
                    elseif($page_name == 'metabolic-genetic')
                        echo 'Metabolic Genetic';
                    elseif($page_name == 'nephro-genetic')
                        echo 'Nephro Genetic';
                    elseif($page_name == 'neuro-genetic')
                        echo 'Neuro Genetic';
                    elseif($page_name == 'ocular-genetic')
                        echo 'Ocular Genetic';
                    else
                        echo 'Cardio Genetics';
                ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo $site_path;?>/testlist.php" class="book-now p-2">Book Test Now</a>
        </div>
    </div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86334964-1', 'auto');
    ga('send', 'pageview');

</script>