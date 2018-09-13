<div id="aboutus" class="container">

	<ul class="nav nav-pills">
		<li class="active"><a data-toggle="pill" href="#company">Company</a></li>
		<li><a data-toggle="tab" href="#management">Management</a></li>
		<li><a data-toggle="tab" href="#directors">Directors</a></li>
		<li><a data-toggle="tab" href="#advisors">Advisors</a></li>
		<li><a data-toggle="tab" href="#investors">Our Investors</a></li>
		<li><a data-toggle="tab" href="#comittee">Medgenome Institutional Ethics Committee (MG-IEC)</a></li>
	</ul>

	<div class="tab-content" style="display: block;">
		<div id="company" class="tab-pane fade in active">
			<?php require 'includes/company.php'?>
		</div>
		<div id="management" class="tab-pane fade">
			<?php require 'includes/management.php'?>
		</div>
		<div id="directors" class="tab-pane fade">
			<?php require 'includes/directors.php'?>
		</div>
		<div id="advisors" class="tab-pane fade">
			<?php require 'includes/advisors.php'?>
		</div>
		<div id="investors" class="tab-pane fade">
			<?php require 'includes/investors.php'?>
		</div>
		<div id="comittee" class="tab-pane fade">
			<?php //require 'includes/comittee.php'?> Comittee
		</div>
	</div>
</div>