<?php
$split = explode('/', $_SERVER['REQUEST_URI']);
$page_name = explode('.', $split[count($split)-1]);
$page_name = $page_name[0];
?>
<div class="site-pages-menu mt-3 ml-3">
    <ul class="links">
        <li class="<?php if($page_name == 'somatic-cancer') echo 'current';?>"><a href="somatic-cancer.php">Somatic Cancer Mutation</a></li>
        <li class="<?php if($page_name == 'lung-cancer') echo 'current';?>"><a href="lung-cancer.php">Lung Cancer</a></li>
        <li class="<?php if($page_name == 'hereditary-cancer') echo 'current';?>"><a href="hereditary-cancer.php">Hereditary Cancer</a></li>
    </ul>
</div>