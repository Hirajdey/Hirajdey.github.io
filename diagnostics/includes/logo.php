<?php
require 'config/config.php';
$split = explode('/', $_SERVER['REQUEST_URI']);
$page_name = explode('.', $split[count($split)-1]);
$page_name = $page_name[0];
?>
<div class="logo">
	<a href="index.php">
		<?php if($page_name == "symposium-may14"){?>
			<img src="images/logo/medgenome.png" alt="Medgenome Logo">
		<?php } else { ?>
		<img src="images/logo/logo.png" alt="Medgenome Logo">
		<?php } ?>
	</a>
</div>