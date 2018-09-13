<?php
$poster = ["Poster-Whd.png", "Poster-Cough.png", "Poster-canwetalk.png", "World-heart-day.png", "Poster-pink-ribbons.png", "Poster-whatever.png"];
$title = ["Poster-Whd", "Poster-Cough", "Poster-Canwetalk", "World-heart-day", "Poster-pink-ribbons", "Poster-whatever"];
?>
<div class="row right">
  <?php for($i=0; $i<count($poster); $i++){?>
  <div class="col-xs-12 col-md-8 text-center hvr-grow">
    <img src="<?php echo $site_path;?>/img/webinar/<?php echo $poster[$i];?>" alt="Poster-Whd"><br><br><?php echo $title[$i];?>
  </div>
  <?php } ?>
</div>
