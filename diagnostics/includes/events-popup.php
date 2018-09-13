<?php
require 'config/config.php';
?>
<div id="events-popup" class="events-popup-section">
	<div class="container">
		<div class="row main-row">
			<div class="col-md-24 open-close-status">
				<div id="close" class="row title" title="minimize">Live updates
				</div>

				<div id="open-pop-up" class="body-section">
					<div class="row event-row first">
						<div class="col-md-3 event-date">
							<h3 class="text-center month">Apr</h3>
							<h3 class="text-center date">22</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="<?php echo $site_path;?>/events"><h4>MedGenome will be presenting at the Dialogue 2018 conference in Chennai</h4></a>
							<p>MedGenome will be presenting at the Dialogue 2018 conference in Chennai on the 22nd of April. The conference is being organised by Dr. Deepthi Jammi of the Chennai Women's Clinic and Scan Center. Dr Sam Balu, Manager, Scientific Affairs, MedGenome Labs Ltd...
								(<a href="<?php echo $site_path;?>/events">Read more</a>)</p>
						</div>
					</div>
				</div>

				<!--<div id="open-pop-up" class="body-section">
					<div class="row event-row first">
						<div class="col-md-3 event-date">
							<h3 class="text-center month">Mar</h3>
							<h3 class="text-center date">06</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="https://diagnostics.medgenome.com/press"><h4>HDFC Invests in MedGenome to Complete Series C Funding of $40 mil</h4></a>
							<p>MedGenome Labs Ltd., the leading genetic diagnostics company in India, announced investment by HDFC Ltd., HDFC Life and HDFC Asset
								Management to complete its Series C funding of USD 40 mil. ...
								(<a href="https://diagnostics.medgenome.com/press">Read more</a>)</p>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>
<script>
	$( function() {
		//$("#open-pop-up").hide();
		$(".open-close-status").addClass("open-pop-up");
	} );
	$("#close").click(function () {
		var text = $("#close").text();
		var current_title = $("#close").attr('title');
		if(current_title == 'minimize') {
			$(".open-close-status").addClass("close-pop-up");
			$(".open-close-status").removeClass("open-pop-up");
			$("#open-pop-up").hide();
			$("#close").attr("title", "open");
		} else{
			$(".open-close-status").addClass("open-pop-up");
			$(".open-close-status").removeClass("close-pop-up");
			$("#open-pop-up").show();
			$("#close").attr("title", "minimize");
		}
	});
</script>