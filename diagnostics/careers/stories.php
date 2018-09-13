<?php require 'php-templates/header.php' ?>

<div ng-app="storiesApp">
    <storiesdesclaimer></storiesdesclaimer>
</div>

<div class="top-arrow hide hidden-xs" id="scroll-top">
	<div class="fa fa-arrow-up"></div>
</div>

<script src="<?php echo $site_path;?>/js/stories.js"></script>
<?php require 'php-templates/footer.php' ?>