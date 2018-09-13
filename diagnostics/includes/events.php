<?php
require 'config/config.php';
//require '.././config/db.php';
?>
<div class="events">
	<div class="upcomingEvents">
		<h4>Upcoming Events</h4>
		<ul>
			<li id="upcomingEvents1">
				<div class="row events row-eq-height">
					<div class="col-md-6 col-xs-24 event-left">
						<div class="row"><div class="col-md-24"><h5>09 - 10</h5></div></div>
						<div class="row month-year"><span>June 2018</span></div>
						<div class="row venue">CNS, Pune</div>
					</div>
					<div class="col-md-18 col-xs-24 event-right">
						<div class="row "><h5>First national pediatric, neurotransmitter and movement disorders symposium</h5></div>
						<div class="row"><p>Meet Team MedGenome @ First national pediatric, neurotransmitter and movement disorders symposium on 9th & 10th June organised by CNS, Pune... </p></div>
						<div class="row"><a href="<?php echo $site_path;?>/events">Learn More <i class="fa fa-long-arrow-right"></i></a></div>
					</div>
				</div>
			</li>
			<!--<li id="upcomingEvents2">
				<div class="row events row-eq-height">
					<div class="col-md-6 col-xs-24 event-left">
						<div class="row"><div class="col-md-24"><h5>14</h5></div></div>
						<div class="row month-year"><span>May 2018</span></div>
						<div class="row venue">Foster City, CA</div>
					</div>
					<div class="col-md-18 col-xs-24 event-right">
						<div class="row "><h5>Symposium on genomics on May 14, 2018 at MedGenome Foster City</h5></div>
						<div class="row"><p>Often referred to as the father of hereditary cancer, Dr. Lynch is a pioneer in the study of cancer and genetics...</p></div>
						<div class="row"><a href="<?php /*echo $site_path;*/?>/events">Learn More <i class="fa fa-long-arrow-right"></i></a></div>
					</div>
				</div>
			</li>
			<li id="upcomingEvents2">
				<div class="row events row-eq-height">
					<div class="col-md-6 col-xs-24 event-left">
						<div class="row"><div class="col-md-24"><h5>22</h5></div></div>
						<div class="row month-year"><span>April 2018</span></div>
						<div class="row venue">Hotel Hilton, Jaipur</div>
					</div>
					<div class="col-md-18 col-xs-24 event-right">
						<div class="row "><h5>MedGenome will be presenting at the Dialogue 2018 conference in Chennai</h5></div>
						<div class="row"><p>MedGenome will be presenting at the Dialogue 2018 conference in Chennai on the 22nd of April. The conference is...</p></div>
						<div class="row"><a href="<?php echo $site_path;?>/events">Learn More <i class="fa fa-long-arrow-right"></i></a></div>
					</div>
				</div>
			</li>-->

				<a href="<?php echo $site_path;?>/events">See More <span></span></a>

				<!--<div class="alert alert-danger text-center">
					<strong>No upcoming events!</strong>
				</div>-->
		</ul>

	</div>
	<div class="pastEvents">
		<h4>Past Events</h4>
		<ul>
			<li id="pastEvents1">
				<div class="row events row-eq-height">
					<div class="col-md-6 col-xs-24 event-left">
						<div class="row"><div class="col-md-24"><h5>14</h5></div></div>
						<div class="row month-year"><span>May 2018</span></div>
						<div class="row venue">Foster City, CA</div>
					</div>
					<div class="col-md-18 col-xs-24 event-right">
						<div class="row "><h5>Symposium on genomics on May 14, 2018 at MedGenome Foster City</h5></div>
						<div class="row"><p>Often referred to as the father of hereditary cancer, Dr. Lynch is a pioneer in the study of cancer and genetics...</p></div>
						<div class="row"><a href="<?php /*echo $site_path;*/?>/events">Learn More <i class="fa fa-long-arrow-right"></i></a></div>
					</div>
				</div>
			</li>
			<li id="pastEvents2">
				<div class="row events row-eq-height">
					<div class="col-md-6 col-xs-24 event-left">
						<div class="row"><div class="col-md-24"><h5>22</h5></div></div>
						<div class="row month-year"><span>April 2018</span></div>
						<div class="row venue">Hotel Hilton, Jaipur</div>
					</div>
					<div class="col-md-18 col-xs-24 event-right">
						<div class="row "><h5>MedGenome will be presenting at the Dialogue 2018 conference in Chennai</h5></div>
						<div class="row"><p>MedGenome will be presenting at the Dialogue 2018 conference in Chennai on the 22nd of April. The conference is...</p></div>
						<div class="row"><a href="<?php echo $site_path;?>/events">Learn More <i class="fa fa-long-arrow-right"></i></a></div>
					</div>
				</div>
			</li>
			<li id="pastEvents3">
				<div class="row events row-eq-height">
					<div class="col-md-6 col-xs-24 event-left">
						<div class="row"><div class="col-md-24"><h5>23 - 25</h5></div></div>
						<div class="row month-year"><span>February 2018</span></div>
						<div class="row venue">Deenanath Mangeshkar Hospital & Research Centre, Pune</div>
					</div>
					<div class="col-md-18 col-xs-24 event-right">
						<div class="row "><h5>PEDIGEN 2018</h5></div>
						<div class="row"><p>PediGen2018 will showcase medical geneticists from India and abroad. It is a perfect combination of exciting science and day-to-day clinical practice... </p></div>
						<div class="row"><a href="<?php echo $site_path;?>/events">Learn More <i class="fa fa-long-arrow-right"></i></a></div>
					</div>
				</div>
			</li>

				<a href="<?php echo $site_path;?>/events">See More <span></span></a>

				<!--<div class="alert alert-danger text-center">
					<strong>No upcoming events!</strong>
				</div>-->

		</ul>
		<!--<a href="javascript:;">Learn More <span></span></a>-->
	</div>
</div>
<script>
	$("#upcomingEvents1").click(function(){
		window.location.href = "<?php echo $site_path;?>/events";
	});
	$("#upcomingEvents2").click(function(){
		window.location.href = "<?php echo $site_path;?>/events";
	});
	$("#pastEvents1").click(function(){
		window.location.href = "<?php echo $site_path;?>/events";
	});
	$("#pastEvents2").click(function(){
		window.location.href = "<?php echo $site_path;?>/events";
	});
	$("#pastEvents3").click(function(){
		window.location.href = "<?php echo $site_path;?>/events";
	});
</script>