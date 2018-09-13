<?php require 'config/db.php'; ?>

<div class="event">
	<div class="container">
		<div class="tab">
			<div class="with-nav-tabs">
				<div class="panel-heading">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#upcomingEvents" data-toggle="tab">Upcoming Events</a></li>
						<li><a href="#recentEvents" data-toggle="tab">Recent Events</a></li>
						<li><a href="#passedEvents" data-toggle="tab">Past Events</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<!--<div class="tab-pane fade in active" id="tab1info">Info 1</div>-->

						<div class="tab-pane fade in active" id="upcomingEvents">
							<?php
							$recent_events = $conn->query("SELECT * FROM events WHERE start_date > CURRENT_DATE() AND (start_date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC;");
							//$recent_events = $conn->query("SELECT * FROM questionnaire limit 0,20");

							if($recent_events->num_rows > 0) {
								while ($row = $recent_events->fetch_assoc()) {
									?>
									<div class="main">
										<div class="left" >
											<h3><?php echo $row['left_title'];?></h3>
											<hr>
											<h4>Date:</h4>
											<p><?php echo date_format(date_create($row['start_date']),"M d")." - ".date_format(date_create($row['end_date']),"M d, Y");?></p>
											<h4>Venue:</h4>
											<p><span><?php echo $row['venue'];?></span>
											</p>
										</div>
										<div class="body">
											<h3><?php echo $row['title'];?></h3>
											<p><?php echo $row['content'];?></p>
											<p><?php if($row['image'] != ""){?><img alt="<?php echo $row['title'];?>" src="<?php echo $site_path;?>/img/event/<?php echo $row['image'];?>"><br><?php } ?></p>
											<p>
											<div class="row events_notes">
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=papers">Research Papers</a></div>
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=posters">Posters presented</a></div>
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=photos">Photos</a></div>
											</div>
											</p>
											<p><?php if($row['url'] != "#"){?><a dpc-external="true" target="_blank" href="<?php echo $row['url'];?>">Click here to know more</a><?php } ?>
											</p>
										</div>
									</div>
								<?php } } else { ?>
									<div class="wall">No events</div>
								<?php } ?>
						</div>


						<div class="tab-pane fade" id="recentEvents">
							<?php
							$recent_events = $conn->query("SELECT * FROM events WHERE (start_date BETWEEN DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC;");
							//$recent_events = $conn->query("SELECT * FROM questionnaire limit 0,20");

							if($recent_events->num_rows > 0) {
								while ($row = $recent_events->fetch_assoc()) {
									?>
									<div class="main">
										<div class="left" >
											<h3><?php echo $row['left_title'];?></h3>
											<hr>
											<h4>Date:</h4>
											<p><?php echo date_format(date_create($row['start_date']),"M d")." - ".date_format(date_create($row['end_date']),"M d, Y");?></p>
											<h4>Venue:</h4>
											<p><span><?php echo $row['venue'];?></span>
											</p>
										</div>
										<div class="body">
											<h3><?php echo $row['title'];?></h3>
											<p><?php echo $row['content'];?></p>
											<p><?php if($row['image'] != ""){?><img alt="<?php echo $row['title'];?>" src="<?php echo $site_path;?>/img/event/<?php echo $row['image'];?>"><br><?php } ?></p>
											<p>
											<div class="row events_notes">
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=papers">Research Papers</a></div>
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=posters">Posters presented</a></div>
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=photos">Photos</a></div>
											</div>
											</p>
											<p><?php if($row['url'] != "#"){?><a dpc-external="true" target="_blank" href="<?php echo $row['url'];?>">Click here to know more</a><?php } ?>
											</p>
										</div>
									</div>
								<?php } } else { ?>
								<div class="wall">No events</div>
							<?php } ?>
						</div>

						<div class="tab-pane fade" id="passedEvents">
							<?php
							$recent_events = $conn->query("SELECT * FROM events WHERE start_date < CURRENT_DATE() AND (start_date NOT BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY start_date DESC");
							//$recent_events = $conn->query("SELECT * FROM questionnaire limit 0,20");

							if($recent_events->num_rows > 0) {
								while ($row = $recent_events->fetch_assoc()) {
									?>
									<div class="main">
										<div class="left" >
											<h3><?php echo $row['left_title'];?></h3>
											<hr>
											<h4>Date:</h4>
											<?php
											$end_date = "";
											if($row['end_date'] != "0000-00-00")
												$end_date = " - ".date_format(date_create($row['end_date']),"M d, Y");
											else
												$end_date = date_format(date_create($row['start_date']),", Y")
											?>
											<p><?php echo date_format(date_create($row['start_date']),"M d").$end_date;?></p>
											<h4>Venue:</h4>
											<p><span><?php echo $row['venue'];?></span>
											</p>
										</div>
										<div class="body">
											<h3><?php echo $row['title'];?></h3>
											<p><?php echo $row['content'];?></p>
											<p><?php if($row['image'] != ""){?><img alt="<?php echo $row['title'];?>" src="<?php echo $site_path;?>/img/event/<?php echo $row['image'];?>"><br><?php } ?></p>
											<p>
											<div class="row events_notes">
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=papers">Research Papers</a></div>
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=posters">Posters presented</a></div>
												<div class="col-xs-24 col-md-8"><a href="<?php echo $site_path;?>/events-download.php?act=photos">Photos</a></div>
											</div>
											</p>
											<p><?php if($row['url'] != "#"){?><a dpc-external="true" target="_blank" href="<?php echo $row['url'];?>">Click here to know more</a><?php } ?>
											</p>
										</div>
									</div>
								<?php } } else { ?>
								<div class="wall">No events</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>