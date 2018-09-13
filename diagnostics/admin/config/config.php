<?php
$oncopept = '';
$disease = '';
$disease_category = '';
$genelist = '';
$role = '';

if((isset($_REQUEST['act']) && $_REQUEST['act'] == 'oncopept')){
    $oncopept = 'download_users_list';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'diseasecategory')){
    $disease_category = 'disease_category';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'disease')){
    $disease = 'disease_test';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'genelist')){
    $genelist = 'gene_list';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'events')){
    $role = 'events';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'cme')){
    $role = 'cme';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'main_news')){
    $role = 'main_news';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'sub_news')){
    $role = 'sub_news';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'videos_main_news')){
    $role = 'videos_main_news';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'videos_sub_news')){
    $role = 'videos_sub_news';
}elseif((isset($_REQUEST['act']) && $_REQUEST['act'] == 'videos')){
    $role = 'videos';
}
?>