<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kishore
 */

?>

	</div><!-- #content -->

	<!-- <footer id="colophon" class="myfooter">
		<div class="container">
			<div class="footer-row">
				<div class="footer-col">
					<div class="footer-logo">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
						?>
						<?php endif; ?>
					</div>
					<div class="social-icons">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-4',
						) );
						?>
					</div>
				</div>
				<div class="footer-col">
					<div class="f-menu">
						<div class="hal">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',

							) );
							?>
						</div>
						
					</div>
				</div>
				<div class="footer-col">
					<div class="f-menu">
						<div class="hal">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-3',

							) );
							?>
						</div>
					</div>
				</div>
				<div class="footer-col">
					<div class="address">
						<p>Address: 102B City Road,<br> Beenleigh, QLD 4207</p>
							<a href="tel:(07) 3287 1230">Phone: (07) 3287 1230</a><br>
							<a href="info@hgj.com.au">Email: info@hgj.com.au</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer> --><!-- #colophon -->
</div><!-- #page -->


<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>
<?php wp_footer(); ?>

</body>
</html>
