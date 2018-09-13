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
     content:'<strong>Medgenome Labs Pvt Ltd</strong><br>3rd Floor, Narayana Netralaya Building,<br>Narayana Health City,<br># 258/A, Bommasandra, Hosur Road,<br>Bangalore – 560 099, India.'});
     google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div>
	</div>
	<!--<div class="container">
		<br><div id="mail-sent" style="display: none"><h4 class="text-success text-center well">Your message was successfully sent!</h4></div>
		<br><div id="mail-sent-failed" style="display: none"><h4 class="text-danger text-center well">Mail Sent Failed!</h4></div>
		<div class="row">
			<div class="col-md-6 email"><a href="mailto:contact@medgenome.com">contact@medgenome.com</a></div>
			<div class="col-md-6 askdoctor" ng-click="showRegisterForm()"><a href="#">Ask Doctor</a></div>
		</div>
	</div>-->
	<div class="container">
			<div class="col-md-9 address1">
				<address>
					<p></p>
					<p><strong>Bengaluru</strong></p>
					<p>MedGenome Labs Pvt. Ltd.<br>
						3rd Floor, Narayana Netralaya Building,<br>
						Narayana Health City,<br>
						# 258/A, Bommasandra, Hosur Road,<br>
						Bangalore - 560 099, India.</p>
					<!--<p>T: +91 (0)80 67154900 / 67154901</p>-->
				</address>
				<!--<address>
					<p><strong>Kochi</strong></p>
					<p>MedGenome Labs Pvt.Ltd.<br>
						SDF 17, 1st Floor, C Block,<br>
						CSEZ, Cochin, Kerala - 682037, India.</p>
					<p>T: +91 (0)4842413115</p>
				</address>

                <address>
					<p><strong>Delhi/NCR</strong></p>
					<p>MedGenome Labs Pvt. Ltd.<br>
						Unit No.353, 3rd Floor,<br>
						Building No. B-2,<br>
						Spaze I-Tech Park,<br>
						Sohna Road, Sector-49, Gurgaon,<br>
						Gurgaon Haryana &ndash; 122018,<br>
						India</p>
					<p>T: +91(0)12 4436 6759</p>
				</address>
				<address>
					<p><strong>Chennai</strong></p>
					<p>MedGenome Labs Pvt. Ltd.<br>
						#55, First Floor,<br>
						1st Kamaraj Avenue,<br>
						Kasturibai Nagar,<br>
						Adyar, Chennai &ndash; 600020</p>
					<p>T: +91 (0)44 2445 5152</p>
				</address>-->

			</div>
			<!--<div class="col-md-9 address2">
				<address>
					<p class="usa"><strong>United States</strong><br>
					<strong>Delaware</strong><br></p>
					<strong>Registered Address:</strong><br>
					<p> MedGenome Inc.<br>
						108, West 13th Street<br>
						Wilmington, Delaware 19801, USA</p>
				</address>
				<address>
					<p><strong>Foster City</strong></p>
					<p> MedGenome Inc<br>
						348 Hatch Drive<br>
						Foster City, CA 94404, USA</p>
					<p>Phone: (888) 440-0954 <br>
						FAX: (888) 440-0946</p>
				</address>
			</div>-->
			<div class="container contact-form">
				<!--<span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span>-->
					<?php require 'php-templates/contact-form.php'?>
			</div>
	</div>
	</div>
</div>
<script src="<?php echo $site_path;?>/js/contact.js"></script>
<?php require 'php-templates/footer.php' ?>