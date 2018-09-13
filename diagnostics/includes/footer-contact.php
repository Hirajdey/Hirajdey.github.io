<?php require 'config/config.php';
require 'config/config.php';
$split = explode('/', $_SERVER['REQUEST_URI']);
$page_name = explode('.', $split[count($split)-1]);
$page_name = $page_name[0];
?>


<div class="footer">

	<div class="footerTop">

		<div class="wrapper">

			<div class="footerLeft">
				<img src="images/whitelogo.png" alt="footerlogo" />
				<p>MedGenome is a genomics driven research and diagnostics company with a mission to improve global health by decoding the genetic information contained in an individual's genome.
					 Its unique access to genomics data with clinical and phenotypic data provides insights into complex diseases at the genetic and molecular level to facilitate research in personalized health care.
					MedGenome is the market leader for genomic diagnostics in South Asia and a leading provider of genomics research services globally.
					MedGenome is also a founding member of GenomeAsia 100K, an initiative to sequence 100,000 Genomes in Asia.</p>
			</div>

			<div class="footerRight">

				<div class="footerFollow">
					<h3>Follow Us</h3>
					<ul>
						<li class="fb"><a href="https://www.facebook.com/MedGenomeLabs" target="_blank">Facebook</a></li>
						<li class="tw"><a href="https://twitter.com/MedGenomeLabs" target="_blank">Twitter</a></li>
						<li class="linked"><a href="https://www.linkedin.com/company/medgenome-labs-pvt-ltd" target="_blank">Linkedin</a></li>
					</ul>

				</div>
				<div class="footerContact">
					<h3>Contact Info</h3>
					<!--<li class="footer-country-india">India</li>
					<div class="footer-country-border"></div>-->
			<?php if($page_name == "symposium-may14") {?>
					<ul>
						<li class="footermail"><a href="mailto:diagnostics@medgenome.com" target="_top">research@medgenome.com</a></li>
						<li class="footerPhone"><p>(888) 440-0954</p></li>
						<li class="footerAddr"><p>MedGenome Inc.,<br>
								348 Hatch Drive,<br>
								Foster City, CA 94404, USA</p></li>
					</ul>
			<?php } else {?>
				<ul>
					<li class="footermail"><a href="mailto:diagnostics@medgenome.com" target="_top">diagnostics@medgenome.com</a></li>
					<li class="footerPhone"><p>1800 103 3691</p></li>
					<li class="footerAddr"><p>MedGenome Labs Ltd., <br> 3rd Floor, Narayana Netralaya Building,<br>
							Narayana Health City,<br>
							# 258/A, Bommasandra, Hosur Road,<br>
							Bangalore - 560 099, India.</p></li>
				</ul>
			<?php }?>
				</div>


			</div>

		</div>

	</div>

	<div class="footerBottom">

		<div class="wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="https://www.medgenome.com/about">About</a></li>
				<li><a href="<?php echo $site_path;?>/testlist.php">Test Catalog</a></li>
				<li><a href="https://www.medgenome.com/research">Research</a></li>
				<li><a href="https://www.medgenome.com/publications">Publications</a></li>
				<li><a href="<?php echo $site_path;?>/press.php">Press</a></li>
				<li><a href="<?php echo $site_path;?>/contactus.php">Contact</a></li>
				<li><a href="<?php echo $site_path;?>/privacy-policy.php">Privacy & Policy</a></li>
			</ul>
			<p>2017 © MedGenome • All Rights Reserved</p>
		</div>

	</div>

</div>
<script src="js/scroll.js"></script>
<script src="js/vendors/jquery-ui.js"></script>
<script src="js/vendors/bootstrap.min.js"></script>
<?php require 'includes/analyticstracking.html';?>