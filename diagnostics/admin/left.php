<div class="container-fluid left">
    <div class="row">
        <div class="col-md-24">
            <!--<script>if(localStorage.username != "sumit.s@medgenome.com" && localStorage.username != "hiranjith.gh@medgenome.com"){</script>-->
            <?php if($_SESSION['username'] != "sumit.s@medgenome.com" && $_SESSION['username'] != "hiranjith.gh@medgenome.com" && $_SESSION['username'] != "videoadmin@medgenome.com"){
                //print_r($_SESSION['role']);exit;
                ?>
            <ul>
                <?php if(in_array('download_users_list', explode(',', $_SESSION['role']))) {?><li><a href="?act=oncopept&sub=list">Oncopept download users</a></li><?php } ?>
                <?php if(in_array('disease_category', explode(',', $_SESSION['role']))) {?><li><a href="?act=diseasecategory&sub=list">Disease Category</a></li><?php } ?>
                <?php if(in_array('disease_test', explode(',', $_SESSION['role']))) {?><li><a href="?act=disease&sub=list">Disease Test</a></li><?php } ?>
                <?php if(in_array('gene_list', explode(',', $_SESSION['role']))) {?><li><a href="?act=genelist&sub=list">Gene List</a></li><?php } ?>
                <?php if(in_array('events', explode(',', $_SESSION['role']))) {?><li><a href="?act=events&sub=list">Events</a></li><?php } ?>
                <?php if(in_array('cme', explode(',', $_SESSION['role']))) {?><li><a href="?act=cme&sub=list">CME</a></li><?php } ?>
                <?php if(in_array('cme', explode(',', $_SESSION['role']))) {?><li><a href="?act=cme_agenda&sub=list">CME Agenda</a></li><?php } ?>
                <?php if(in_array('main_news', explode(',', $_SESSION['role']))) {?><li><a href="?act=main_news&sub=list">Media Main News</a></li><?php } ?>
                <?php if(in_array('sub_news', explode(',', $_SESSION['role']))) {?><li><a href="?act=sub_news&sub=list">Media Sub News</a></li><?php } ?>

                <?php if(in_array('main_news', explode(',', $_SESSION['role']))) {?><li><a href="?act=videos_main_news&sub=list">Videos Main News</a></li><?php } ?>
                <?php if(in_array('sub_news', explode(',', $_SESSION['role']))) {?><li><a href="?act=videos_sub_news&sub=list">Videos Sub News</a></li><?php } ?>

                <?php /*if(in_array('videos', explode(',', $_SESSION['role']))) {*/?><!--<li><a href="?act=videos&sub=list">Videos</a></li>--><?php /*} */?>

                <li><a href="logout.php">Logout</a></li>
            </ul>
           <?php } ?>
            <!--<script> } </script>-->
        </div>
    </div>
</div>
