<?php require 'config/db.php'; ?>
<?php
if($site_path == "http://medgenome.com")
	$site_path = "https://www.medgenome.com";
?>

<div class="event" ng-app="eventsApp" ng-init="sitepath='<?php echo $site_path;?>'">
	<div class="container" ng-controller="eventsCtrl">
		<div class="tab">
			<div class="with-nav-tabs">
				<div class="panel-heading">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#upcomingEvents" data-toggle="tab" ng-click="upcomingEvent()">Upcoming Events</a></li>
						<li><a href="#recentEvents" data-toggle="tab" ng-click="recentEvent()">Recent Events</a></li>
						<li><a href="#passedEvents" data-toggle="tab" ng-click="pastEvent()">Past Events</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div class="tab-content">

						<!-- Search Section -->
						<div id="search" class="container-fluid">
							<div class="row">
								<div class="col-md-13 col-lg-offset-6"><input type="text" class="form-control" ng-model="search" placeholder="Enter the text for search"></div>
							</div>
						</div>
						<!-- End search -->

						<div class="tab-pane fade in active" id="upcomingEvents">
							<!-- Upcoming body section -->
							<div class="main" ng-repeat="x in upcomingEventsList | filter:search">
								<div class="left" >
									<h3>{{ x.left_title }}</h3>
									<hr>
									<h4>Date:</h4>
									<p>{{ x.start_date }}{{ x.end_date }}</p>
									<h4>Venue:</h4>
									<p><span>{{ x.venue }}</span>
									</p>
								</div>
								<div class="body">
									<h3>{{ x.title }}</h3>
									<p class="text-justify" ng-bind-html="x.content"></p>
									<p ng-if="x.image1!=''"><img alt="{{ x.image1 }}" src="<?php echo $site_path;?>/img/event/{{ x.image1 }}"><br></p>
									<p ng-if="x.image2!=''"><img alt="{{ x.image2 }}" src="<?php echo $site_path;?>/img/event/{{ x.image2 }}"><br></p>
									<p ng-if="x.image3!=''"><img alt="{{ x.image3 }}" src="<?php echo $site_path;?>/img/event/{{ x.image3 }}"><br></p>
									<p>
									<!--<div class="row events_notes">
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=papers">Research Papers</a></div>
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=posters">Posters presented</a></div>
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=photos">Photos</a></div>
									</div>-->
									</p>
									<p ng-if="x.url"><a dpc-external="true" target="_blank" href="{{ x.url }}">Click here to know more</a>
									</p>
								</div>
							</div>
							<div id="noUpcomingRecord" style="display: none;">
								<div colspan="7" class="text-danger text-center lead well">No Records</div>
							</div>
							<!-- End -->
						</div>

						<div class="tab-pane fade" id="recentEvents">
							<!-- Recent body section -->
							<div class="main" ng-repeat="x in recentEventsList | filter:search">
								<div class="left" >
									<h3>{{ x.left_title }}</h3>
									<hr>
									<h4>Date:</h4>
									<p>{{ x.start_date }}{{ x.end_date }}</p>
									<h4>Venue:</h4>
									<p><span>{{ x.venue }}</span>
									</p>
								</div>
								<div class="body">
									<h3>{{ x.title }}</h3>
									<p class="text-justify" ng-bind-html="x.content"></p>
									<p ng-if="x.image1!=''"><img alt="{{ x.image1 }}" src="<?php echo $site_path;?>/img/event/{{ x.image1 }}"><br></p>
									<p ng-if="x.image2!=''"><img alt="{{ x.image2 }}" src="<?php echo $site_path;?>/img/event/{{ x.image2 }}"><br></p>
									<p ng-if="x.image3!=''"><img alt="{{ x.image3 }}" src="<?php echo $site_path;?>/img/event/{{ x.image3 }}"><br></p>
									<p>
									<!--<div class="row events_notes">
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=papers">Research Papers</a></div>
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=posters">Posters presented</a></div>
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=photos">Photos</a></div>
									</div>-->
									</p>
									<p ng-if="x.url"><a dpc-external="true" target="_blank" href="{{ x.url }}">Click here to know more</a>
									</p>
								</div>
							</div>
							<div id="noRecentRecord" style="display: none;">
								<div colspan="7" class="text-danger text-center lead well">No Records</div>
							</div>
							<!-- End -->
						</div>

						<div class="tab-pane fade" id="passedEvents">

							<div id="process" class="text-success text-center"><h3>Please be patient ... </h3></div>

							<!-- Past body section -->
							<div class="main" ng-repeat="x in pastEventsList | filter:search">
								<div class="left" >
									<h3>{{ x.left_title }}</h3>
									<hr>
									<h4>Date:</h4>
									<p>{{ x.start_date }}{{ x.end_date }}</p>
									<h4>Venue:</h4>
									<p><span>{{ x.venue }}</span>
									</p>
								</div>
								<div class="body">
									<h3>{{ x.title }}</h3>
									<p class="text-justify" ng-bind-html="x.content"></p>
									<p ng-if="x.image1!=''"><img alt="{{ x.image1 }}" src="<?php echo $site_path;?>/img/event/{{ x.image1 }}"><br></p>
									<p ng-if="x.image2!=''"><img alt="{{ x.image2 }}" src="<?php echo $site_path;?>/img/event/{{ x.image2 }}"><br></p>
									<p ng-if="x.image3!=''"><img alt="{{ x.image3 }}" src="<?php echo $site_path;?>/img/event/{{ x.image3 }}"><br></p>
									<p>
									<!--<div class="row events_notes">
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=papers">Research Papers</a></div>
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=posters">Posters presented</a></div>
										<div class="col-xs-24 col-md-8"><a href="<?php /*echo $site_path;*/?>/events-download.php?act=photos">Photos</a></div>
									</div>-->
									</p>
									<p ng-if="x.url"><a dpc-external="true" target="_blank" href="{{ x.url }}">Click here to know more</a>
									</p>
								</div>
							</div>
							<!-- No Record -->
							<div id="noPastRecord" style="display: none;">
								<div colspan="7" class="text-danger text-center lead well">No Records</div>
							</div>
							<!-- End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo $site_path;?>/js/events.js"></script>