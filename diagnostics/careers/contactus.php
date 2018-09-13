<?php require 'php-templates/header.php' ?>

<div class="contact" ng-app="contactApp" ng-init="sitepath='<?php echo $site_path;?>';">
	<div ng-controller="contactCtrl">
	<div class="container-fluid">
		<div class="row">
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
			<div style='overflow:hidden;height:300px;width:100%;'>
				<div id='gmap_canvas' style='height:300px;width:100%;'></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
			<script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(12.806633,77.6938000),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.806633,77.6938000)});infowindow = new google.maps.InfoWindow({
     content:'<strong>Medgenome Labs Ltd</strong><br>3rd Floor, Narayana Netralaya Building,<br>Narayana Health City,<br># 258/A, Bommasandra, Hosur Road,<br>Bangalore – 560 099, India.'});
     google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div>
	</div>

		<!--<div class="container">
            <div class="col-md-9 col-md-offset-1 address1">
                    <address>
                        <p></p>
                        <p><strong>Bengaluru</strong></p>
                        <p>MedGenome Labs Ltd.<br>
                            3rd Floor, Narayana Netralaya Building,<br>
                            Narayana Health City,<br>
                            # 258/A, Bommasandra, Hosur Road,<br>
                            Bangalore - 560 099, India.</p>
                    </address>
                </div>
		</div>-->
		<div class="contact-body-container">
			<div class="container">
				<h1 class="text-center">Contact us</h1>
				<div class="jumbotron">
					<div class="row contact-body">
						<div class="col-md-9">
							<address>
								<strong>MedGenome Labs Ltd.</strong><br> 3rd Floor, Narayana Netralaya Building,<br> Narayana Health City,<br>
							# 258/A, Bommasandra, Hosur Road,<br> Bangalore - 560 099, India.<br>
								+91 (0)80 67154931, +91 (0)80 67154932
							</address>
						</div>
						<div class="col-md-7"><a href="mailto:diagnostics@medgenome.com">diagnostics@medgenome.com</a></div>
						<div class="col-md-6">1800 103 3691</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container contact-form">
			<?php require 'php-templates/contact-form.php'?>
		</div>
	</div>
</div>
<script src="<?php echo $site_path;?>/js/contact.js"></script>
<?php require 'php-templates/footer.php' ?>