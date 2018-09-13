<?php require 'php-templates/header.php' ?>

    <div class="webinar" ng-app="servicesApp">
        <div ng-controller="servicesCtrl">
            <div class="container servicestypes">

                <h2>Next Generation Sequencing</h2>
                <div class="row servicestabheader">
           
                    <div class="col-xs-24 col-sm-7 col-md-5 wgstab"><a id="wgs" class="<?php if($_REQUEST['act'] == 'genome') echo 'active';?>" ng-click="showServicesSections('wgs')">Whole Genome Sequencing</a></div>
                    <div class="col-xs-24 col-sm-7 col-md-4"><a id="wes" class="<?php if($_REQUEST['act'] == 'exome') echo 'active';?>">Whole Exome Sequencing</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-3"><a id="rns" class="<?php if($_REQUEST['act'] == 'rna') echo 'active';?>">RNA Sequencing</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-4 mirnatab"><a id="mirna" class="<?php if($_REQUEST['act'] == 'mirna') echo 'active';?>">miRNA Sequencing</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-3"><a id="chip" class="<?php if($_REQUEST['act'] == 'chip') echo 'active';?>">ChIP Sequencing</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-2"><a id="methyl" class="<?php if($_REQUEST['act'] == 'methyl') echo 'active';?>">MethylSeq</a></div>
                    <div class="col-xs-24 col-sm-10 col-md-3"><a id="tcr" class="<?php if($_REQUEST['act'] == 'tcr') echo 'active';?>">TCR Sequencing</a></div>
                </div>
                    <hr/>
            </div>
            
            <!-- Whole Genome Sequencing -->

            <div class="container" id="wgsSection" style="display: none">
                <div class="tab-pane fade in" id="tab1info"><?php include('services/ngs-wholegenomesequencing.php');?></div>
            </div>
            <div id="wgsSectionPHP">
            <?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'genome'){?>
                <?php include('services/ngs-wholegenomesequencing.php');?>
            <?php } ?>
            </div>
            <!-- Whole Genome Sequencing -->

            <!-- Whole Exome Sequencing-->
            <div class="container" id="wesSection" style="display: none">
                <?php include('services/ngs-wholeexomesequencing.php');?>
            </div>
            <div id="wesSectionPHP">
            <?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'exome'){?>
                <?php include('services/ngs-wholeexomesequencing.php');?>
            <?php } ?>
             </div>
            <!-- Whole Exome Sequencing -->

            <!-- RNA Sequencing -->
            <div class="container" id="rnsSection" style="display: none">
                    <?php include('services/ngs-rnasequencing.php');?>
            </div>
            <div id="rnsSectionPHP">
            <?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'rna'){?>
                <?php include('services/ngs-rnasequencing.php');?>
            <?php } ?>
            </div>
            <!-- RNA Sequencing -->
            
             <!-- miRNA Sequencing -->
            <div class="container" id="mirnaSection" style="display: none">
                    <?php include('services/ngs-mirnasequencing.php');?>
            </div>
            <div id="mirnsSectionPHP">
            <?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'mirna'){?>
                <?php include('services/ngs-mirnasequencing.php');?>
            <?php } ?>
            </div>
            <!-- miRNA Sequencing -->
            
             <!-- ChIP Sequencing -->
            <div class="container" id="chipSection" style="display: none">
                    <?php include('services/ngs-chipsequencing.php');?>
            </div>
            <div id="chipSectionPHP">
            <?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'chip'){?>
                <?php include('services/ngs-chipsequencing.php');?>
            <?php } ?>
            </div>
            <!-- ChIP Sequencing -->
            
             <!-- Methyl Sequencing -->
            <div class="container" id="methylSection" style="display: none">
                <?php include('services/ngs-methylseq.php');?>
            </div>
            <div id="methylSectionPHP">
            <?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'methyl'){?>
                <?php include('services/ngs-methylseq.php');?>
            <?php } ?>
            </div>
            <!-- Methyl Sequencing -->

            <!-- TCR Sequencing -->
            <div class="container" id="tcrSection" style="display: none">
                <?php include('services/ngs-tcrsequencing.php');?>
            </div>
            <div id="tcrSectionPHP">
                <?php if(isset($_REQUEST['act']) && $_REQUEST['act'] == 'tcr'){?>
                    <?php include('services/ngs-tcrsequencing.php');?>
                <?php } ?>
            </div>
            <!-- TCR Sequencing -->

        </div>
    </div>

<script src="<?php echo $site_path;?>/js/services.js"></script>

<?php require 'php-templates/footer.php' ?>