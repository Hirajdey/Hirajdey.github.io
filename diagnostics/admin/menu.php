<?php
require 'config/config.php';
//echo $site_path; exit;
$split = explode('/', $_SERVER['REQUEST_URI']);
$page_name = explode('.', $split[count($split)-1]);
$page_name = $page_name[0];
?>
<ul>
	<li><a title ="HOME" href="index.php">Home</a></li>
	<li><a title ="ABOUT" href="https://www.medgenome.com/about">ABOUT</a></li>
	<li><a title ="TEST CATALOG" href="<?php echo $site_path;?>/testlist.php">test cATALOG</a></li>
	<!--<li><a title ="CLINICIANS LOGIN" href="javascript:;">Clinicians login</a></li>-->
	<!--<li><a title ="FAQ’S" href="javascript:;">FAQ’S</a></li>
	<li><a title ="KNOWLEDGE HUB" href="javascript:;">knowledge Hub</a></li>-->
	<li><a title ="RESEARCH" href="https://www.medgenome.com/research">research</a></li>
	<li><a title ="PUBLICATIONS" href="https://www.medgenome.com/publications">publications</a></li>
	<li><a title ="PRESS" href="<?php echo $site_path;?>/press.php">press</a></li>
	<li><a title ="CONTACT" href="<?php echo $site_path;?>/contactus.php">contact</a></li>

	<!--<li><a href="javascript:void(0)"><img src="images/flags/us-flag.jpg" alt="US">us</a></li>-->
</ul>
<div class="header-us-flag"><a href="https://www.medgenome.com/research"><img src="../images/flags/us-flag.jpg" alt="US">us</a></div>