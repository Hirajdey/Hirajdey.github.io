<?php
require '.././config/config.php';
require '.././config/db.php';
?>
<div class="events">
	<div class="upcomingEvents">
		<h4>Upcoming Events</h4>
		<ul>
			<?php
			$event_url = '../events.php';
			//echo "SELECT * FROM events WHERE (CURDATE() BETWEEN start_date AND end_date) OR (start_date >= CURDATE()) OR (end_date >= CURDATE()) ORDER BY id DESC limit 0, 3;"; exit;
			$events = $conn->query("SELECT * FROM events WHERE (CURDATE() BETWEEN start_date AND end_date) OR (start_date >= CURDATE()) OR (end_date >= CURDATE()) ORDER BY id DESC limit 0, 3");
			if ($events->num_rows > 0){
				while($row = $events->fetch_assoc()){

					$date = date_create($row['start_date']);
					$month = date_create($row['start_date']);
					$year = date_create($row['start_date']);

					$date = date_format($date,"d");
					$month = date_format($month,"F");
					$year = date_format($year,"Y");
			?>
				<li>
					<div class="row events row-eq-height">
						<div class="col-md-6 text-center event-left">
							<div class="row"><div class="col-md-24"><h5><?=$date;?></h5></div></div>
							<div class="row month-year"><span><?=$month;?> <?=$year;?></span></div>
							<div class="row venue"><?=$row['venue'];?></div>
						</div>
						<div class="col-md-18 event-right">
							<div class="row "><h5><?=$row['title'];?></h5></div>
							<div class="row"><p><?=$row['content'];?></p></div>
							<div class="row"><a href="#">Join Us <i class="fa fa-long-arrow-right"></i></a></div>
						</div>
					</div>
				</li>
			<?php } ?>
				<a href="javascript:;">See More <span></span></a>
				<?php } else { ?>
				<div class="alert alert-danger text-center">
					<strong>No upcoming events!</strong>
				</div>
			<?php } ?>
		</ul>

	</div>
	<div class="pastEvents">
		<h4>Past Events</h4>
		<ul>

			<?php
			$event_url = '../events.php';
			//echo "SELECT * FROM events WHERE (start_date < CURDATE()) AND (end_date < CURDATE()) ORDER BY id DESC limit 0, 3"; exit;
			$events = $conn->query("SELECT * FROM events WHERE (start_date < CURDATE()) AND (end_date < CURDATE()) ORDER BY id DESC limit 0, 3");
			if ($events->num_rows > 0){
				while($row = $events->fetch_assoc()){
					$date = date_create($row['start_date']);
					$month = date_create($row['start_date']);
					$year = date_create($row['start_date']);

					$date = date_format($date,"d");
					$month = date_format($month,"F");
					$year = date_format($year,"Y");
					?>
					<li>

						<div class="row events row-eq-height">
							<div class="col-md-6 text-center event-left">
								<div class="row"><div class="col-md-24"><h5><?=$date;?></h5></div></div>
								<div class="row month-year"><span><?=$month;?> <?=$year;?></span></div>
								<div class="row venue"><?=$row['venue'];?></div>
							</div>
							<div class="col-md-18 event-right">
								<div class="row "><h5><?=$row['title'];?></h5></div>
								<div class="row"><p><?php echo htmlspecialchars_decode($row['content'], ENT_NOQUOTES);?></p></div>
								<div class="row"><a href="#">Join Us <i class="fa fa-long-arrow-right"></i></a></div>
							</div>
						</div>
					</li>
				<?php } ?>
				<a href="javascript:;">See More <span></span></a>
			<?php } else { ?>
				<div class="alert alert-danger text-center">
					<strong>No upcoming events!</strong>
				</div>
			<?php } ?>
		</ul>
		<a href="javascript:;">Learn More <span></span></a>
	</div>
</div>