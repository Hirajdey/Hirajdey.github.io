<!--<div class="headerContact">
  	<div class="bookNow" style="display: none;">
  		<a href="javascript:;">Book Now</a>
  	</div>
  	<div class="contactLeft">
  		<a href="javascript:;">US</a>
  	</div>

  	<div class="contactRightBg diag">
  		<div class="contactRight">
  			<a href="mailto:contact@medgenome.com" target="_top">SMS 'ACTIA' to 56767</a>
  			<p>1800 103 7590</p>
  		</div>
  	</div>
</div>-->

<!--<div class="headerContact">
	<div class="header-contact">
		<div id="usRow" class="us-row">
			<div class="us-flag">
				<a class="us" href="https://diagnostics.medgenome.com/">IN</a>
			</div>
			<div class="mailid">
				<div><a href="mailto:diagnostics@medgenome.com">diagnostics@medgenome.com</a></div>
				<div>1800 103 3691</div>
			</div>
		</div>

		<div id="indiaRow" class="india-row">
			<div class="india-flag">
				<a class="india" href="https://www.medgenome.com/research/">US</a>
			</div>
			<div class="mailid">
				<div><a href="mailto:research@medgenome.com">research@medgenome.com</a></div>
				<div>(888) 440-0954</div>
			</div>
		</div>
	</div>
</div>-->
<?php
require 'config/config.php';
$split = explode('/', $_SERVER['REQUEST_URI']);
$page_name = explode('.', $split[count($split)-1]);
$page_name = $page_name[0];
?>
<div class="email-phone">
	<div class="left-column">&nbsp;</div>
	<div class="right-column">
		<div class="email"><a href="mailto:diagnostics@medgenome.com" style="color: rgb(255, 255, 255);"><?php if($page_name == "symposium-may14") echo "research@medgenome.com";
				else echo "diagnostics@medgenome.com";?></a></div>
		<div class="phone"><?php if($page_name == "symposium-may14") echo "(888) 440-0954"; else echo "1800 103 3691"; ?></div>
	</div>
</div>
