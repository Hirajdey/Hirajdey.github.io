<?php
require '.././config/config.php';
require '.././config/db.php';
?>

<div class="pressContent">
	<?php
	$event_url = '../events.php';
	$media_news = $conn->query("SELECT * FROM media_news WHERE status = 1 ORDER BY id DESC limit 0,3");
	while($row = $media_news->fetch_assoc()){
	?>
	<a href="<?=$event_url;?>">
				<span class="leftSpan">
					<span class="icon"></span>
					<span class="text">View More</span>
				</span>
				<span class="rightSpan">
					<span class="headSpan"><?=$row['title'];?></span>
					<span class="textCont"><?=$row['title'];?></span>
				</span>
	</a>
	<?php } ?>
	<div class="seeMorePress">
		<a href="<?=$event_url;?>">See More</a>
	</div>
</div>