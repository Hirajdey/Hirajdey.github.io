<div id="events-popup" class="events-popup-section">
	<div class="container">
		<div class="row main-row">
			<div class="col-md-24 open-close-status">
				<div id="close" class="row title" title="open">Live updates
				</div>

				<div id="open-pop-up" class="body-section">

					<div class="row event-row first">
						<div class="col-md-4 event-date">
							<h3 class="text-center month">Feb</h3>
							<h3 class="text-center date">26</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="<?php echo $site_path;?>/media"><h4>HDFC Invests in MedGenome to Complete Series C Funding of $40 mil</h4></a>
							<p>MedGenome Labs Ltd., the leading genetic diagnostics company in India, announced investment by HDFC Ltd., HDFC Life and HDFC Asset
								Management to complete its Series C funding of USD 40 mil. ...
								(<a href="<?php echo $site_path;?>/media">Read more</a>)</p>
						</div>
					</div>

					<!--<div class="row event-row first">
						<div class="col-md-4 event-date">
							<h3 class="text-center month">Feb</h3>
							<h3 class="text-center date">23 to 25</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="<?php /*echo $site_path;*/?>/events"><h4>PediGen 2018</h4></a>
							<p>PediGen2018 will showcase medical geneticists from India and abroad. It is a perfect combination of exciting science and day-to-day clinical practice. The main theme of this conference is growth disorders; a topic very close to pediatricians' hearts. The experts will take you beyond malnutrition to the fascinating molecular mechanisms ...
								(<a href="<?php /*echo $site_path;*/?>/events">Read more</a>)</p>
						</div>
					</div>-->

					<!--<div class="row event-row">
						<div class="col-md-4 event-date">
							<h3 class="text-center month">Feb</h3>
							<h3 class="text-center date">15</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="<?php echo $site_path;?>/events"><h4>MedGenome Genomics Centre Inauguration at KMCH and Symposium on Genomics in Medicine</h4></a>
							<p>MedGenome Genomics Centre Inauguration at KMCH and Symposium on Genomics in Medicine
								(<a href="<?php echo $site_path;?>/events">Read more</a>)</p>
						</div>
					</div>

					<div class="row event-row">
						<div class="col-md-4 event-date">
							<h3 class="text-center month">Feb</h3>
							<h3 class="text-center date">6</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="<?php /*echo $site_path;*/?>/events" target="_blank"><h4>Inaugural ceremony of IILDS - MedGenome Genomics Centre and Symposium 'NASH-Contect and Research' MedGenome partners with Indian Institute of Liver and Digestive Sciences (IILDS) to launch a Genomics Centre at IILDS hospital Sonarpur, West Bengal</h4></a>
							<p>Inaugural ceremony of IILDS - MedGenome Genomics Centre and Symposium 'NASH-Contect and Research' MedGenome partners with Indian Institute of Liver and Digestive Sciences (IILDS) to launch a Genomics Centre at IILDS hospital Sonarpur, West Bengal
								(<a href="<?php /*echo $site_path;*/?>/events" target="_blank">Read more</a>)</p>
						</div>
					</div>-->

					<!--<div class="row event-row">
						<div class="col-md-4 event-date">
							<h3 class="text-center month">Feb</h3>
							<h3 class="text-center date">6</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="<?php /*echo $site_path;*/?>/events" target="_blank"><h4>MedGenome along with Apollo CM fertility, a leading In Vitro Fertilization (IVF) chain, organized a Continuing Medical Education (CME) on scope for NIPT (non-invasive prenatal test) and benefits of Pre-implantation Genetic Screening/Diagnosis (PGS/D) in IVF.</h4></a>
							<p>MedGenome along with Apollo CM fertility, a leading In Vitro Fertilization (IVF) chain, organized a Continuing Medical Education (CME) session on Feb 6th to discuss the scope for NIPT (non-invasive prenatal test) and benefits of Pre-implantation Genetic Screening/Diagnosis (PGS/D) in IVF. The CME will host talks by Dr Priya Kadam, Programme Director, NIPT, MedGenome and Dr Sam Balu, Scientific Affairs Manager, MedGenome.
								(<a href="<?php /*echo $site_path;*/?>/events" target="_blank">Read more</a>)</p>
						</div>
					</div>-->
					
					<!--<div class="row event-row">
						<div class="col-md-4 event-date">
							<h3 class="text-center month">Feb</h3>
							<h3 class="text-center date">1-3</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="http://cancercon2018.in/" target="_blank"><h4>Cancercon 2018</h4></a>
							<p>Our Chairman & CEO MedGenome Sam Santhosh is the key note speaker will be speaking on Personalized medicine; an Industry's Paradigm. Amit C and Sekar Seshgiri will be speaking on cancer genomics
								(<a href="http://cancercon2018.in/" target="_blank">Read more</a>)</p>
						</div>
					</div>-->

					<!--<div class="row event-row">
						<div class="col-md-4 event-date">
							<h3 class="text-center month">Jan</h3>
							<h3 class="text-center date">31</h3>
						</div>
						<div class="col-md-20 event-text">
							<a href="<?php /*echo $site_path;*/?>/events" target="_blank"><h4>Sri Ramachandra Medical College and Research Institute and MedGenome announce the launch of Genomics Centre at SRMC Hospital, Chennai</h4></a>
							<p>MedGenome partners with Sri Ramachandra Medical College & Research Institute to launch a Genomics Centre at SRMC hospital Chennai
								(<a href="<?php /*echo $site_path;*/?>/events" target="_blank">Read more</a>)</p>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$( function() {
		$("#open-pop-up").hide();
		$(".open-close-status").addClass("close-pop-up");
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