<?php
$split = explode('/', $_SERVER['REQUEST_URI']);
$page_name = explode('.', $split[count($split)-1]);
$page_name = $page_name[0];
?>
<ul class="links">
    <li class="<?php if($page_name == 'cardio-genetic') echo 'current';?>" ><a href="cardio-genetic.php">Cardio Genetics</a></li>
    <li class="<?php if($page_name == 'clinical-genetic') echo 'current';?>"><a href="clinical-genetic.php">Clinical Exome</a></li>
    <li class="<?php if($page_name == 'endocrine-genetic') echo 'current';?>"><a href="endocrine-genetic.php">Endocrine</a></li>
    <li class="<?php if($page_name == 'ent-genetic') echo 'current';?>"><a href="ent-genetic.php">ENT Genetics</a></li>
    <li class="<?php if($page_name == 'metabolic-genetic') echo 'current';?>"><a href="metabolic-genetic.php">Metabolic Genetics</a></li>
    <li class="<?php if($page_name == 'nephro-genetic') echo 'current';?>"><a href="nephro-genetic.php">Nephro Genetics</a></li>
    <li class="<?php if($page_name == 'neuro-genetic') echo 'current';?>"><a href="neuro-genetic.php">Neuro Genetics</a></li>
    <li class="<?php if($page_name == 'ocular-genetic') echo 'current';?>"><a href="ocular-genetic.php">Ocular Genetics</a></li>
    <li><a href="" class="test-menu-small-screen" data-toggle="modal" data-target="#myModal">Test Menu</a></li>
</ul>