<?php
	/*
	Plugin Name: Printing Custom Post Taxonomies & metabox
	Plugin URI:
	Description: Printing Custom Post, Taxonomies & metabox to the AliveGene Website
	Version: 1.0
	Author: HirajDey
	Author URI:
	License: GNU General Public License v2 or later
	licence URI: LICENSE
	*/


// function for site banners

function filter_site_banner_terms($term, $taxonomy){

	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'home',
		'orderby' => 'rand',
		'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $term,
				)
		),
	);


 	if($term == 'home-banner'){

 		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 				
		 	// section heading
		 	$headingA = get_post_meta(get_the_ID(), 'input-metabox-homebanner-headingA', true);
		 	$headingB = get_post_meta(get_the_ID(), 'input-metabox-homebanner-headingB', true);
		 	$headingC = get_post_meta(get_the_ID(), 'input-metabox-homebanner-headingC', true);
		 
 		?>

			<div class="banner-section py-5 homebanner-section" style="background-image: url(<?php the_post_thumbnail_url($post->ID) ?>);">

				<div class="container py-5">

					<div class="health-destiny-box">
						<div class="hdlear-1" style="background-image:url(<?php echo get_template_directory_uri();?>/assets/img/hd1.png);">
						</div>
						<div class="hdlear-2" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/hd2.png);">
							
							<div class="bannertext">
								<span class="health"><?php if($headingB) {echo $headingB;} ?></span>
								<span class="takecont"><?php if($headingA) {echo $headingA;} ?></span>
								<span class="destiny"><?php if($headingC) {echo $headingC;} ?></span>
								<span class="arow">^</span>
								<a class="exploreBtn" href="#">Explore</a>
							</div>
						
						</div>
						
					</div> <!-- eo health-destiny-box -->
					
				</div><!-- eo container -->
			</div><!-- eo banner-section -->

		<?php

		endwhile; endif;  wp_reset_postdata(); 

 	}


 	if($term == 'individuals-banner'){

 		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>

			<div class="innerpage-banner individuals-banner" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>)">

				<div class="container">
					<div class="row d-flex justify-content-center justify-content-md-end">
						<div class="col col-12 col-md-9 col-lg-7">
							<div class="knowledgeispowerArt">
								<?php
							 	 if( class_exists('Dynamic_Featured_Image')):
						        global $dynamic_featured_image;
						         $featured_images = $dynamic_featured_image->get_featured_images( $currentPost->ID );
						         if ( $featured_images ): 
						            ?>
						                <?php foreach( $featured_images as $images ): ?>
															<img src="<?php echo $images['full'] ?>">
						                <?php endforeach; ?>
						            <?php
						            endif;
						      endif;

						     ?>

								<div class="individualsBanner-text text-center">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
					</div><!-- eo row -->
				</div><!-- eo container -->

			</div><!-- eo innerpage-banner -->

 			<?php

		 endwhile; endif;  wp_reset_postdata();

 	}


 	if($term == 'genetic-services-banner'){

 		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 	
			?>

				<div class="innerpage-banner gsfor-clinicians-banner" style="background-image:url(<?php the_post_thumbnail_url($post->ID); ?>)">

					<div class="container pt-5 py-md-5">
						<div class="row">
							<div class="col col-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
								<h1><?php the_title(); ?></h1>
								<span><?php the_excerpt(); ?></span>
								<?php the_content(); ?>		
							</div><!-- eo col -->
						</div><!-- eo row -->
					</div><!-- eo container -->

				</div> <!-- eo gsfor-clinicians-banner -->

			<?php

		 endwhile; endif;  wp_reset_postdata();

 	}


	if($term == 'refer-patient-banner'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
		
			?>

			<div class="innerpage-banner refer-patient-banner py-5">

				<div class="container py-md-3">
					<div class="row">
						<div class="col col-12">
							<h1><?php the_title(); ?></h1>
						</div><!-- eo col -->
					</div><!-- eo row -->
				</div><!-- eo container -->

			</div> <!-- eo gsfor-clinicians-banner -->

			<?php

		endwhile; endif;  wp_reset_postdata();

	} 	


	if($term == 'partners-banner'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
		
			?>

			<div class="innerpage-banner  partner-banner-wrap" style="background-image:url(<?php the_post_thumbnail_url($post->ID); ?>);">

				<div class="container pt-5 py-md-5">
					<div class="row d-flex align-items-center">
						<div class="col col-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
							<?php the_content(); ?>
							<h1><?php the_title(); ?></h1>
							<a class="learnmoreBtn" href="#">Learn More</a>	
						</div><!-- eo col -->
					</div><!-- eo row -->
				</div><!-- eo container -->

			</div> <!-- eo gsfor-clinicians-banner -->
				
			<?php

		endwhile; endif;  wp_reset_postdata();

	} 	


	if($term == 'start-with-science-banner'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
		
			?>

			<section class="innerpage-banner individuals-banner" style="background-image: url(<?php the_post_thumbnail_url($post->ID);?>);">

				<div class="container">
					<div class="row d-flex justify-content-center justify-content-md-end">
						<div class="col col-12 col-md-9 col-lg-7">
							
						</div>
					</div><!-- eo row -->
				</div><!-- eo container -->

			</section><!-- eo innerpage-banner -->

				
			<?php

		endwhile; endif;  wp_reset_postdata();

	} 	


	if($term == 'our-team-banner'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
		
			?>

				<div class="innerpage-banner refer-patient-banner py-5">
					<div class="container py-md-3">
						<div class="row">
							<div class="col col-12">
								<h1><?php the_title(); ?></h1>
							</div><!-- eo col -->
						</div><!-- eo row -->
					</div><!-- eo container -->
				</div> <!-- eo gsfor-clinicians-banner -->

			<?php

		endwhile; endif;  wp_reset_postdata();

	} 	

}// end of function for Site Banners




// function for Home sections

function filter_home_section_terms($term, $taxonomy){

	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'home',
		'orderby' => 'desc',
		'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $term,
				)
		),
	);

	if($term == 'there-are-billion-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			// section heading
		 	$headingA = get_post_meta(get_the_ID(), 'input-metabox-there_billion-headingA', true);

			?>
				<img src="<?php the_post_thumbnail_url($post->ID);?>" alt="">
				<div class="container py-5 clearfix">
					<div class="row justify-content-center">
						<div class="col col-12 col-xxl-11">
							<div class="thereyou-box pt-md-5 mb-xl-5">
								<h2 class="theresYou"><?php the_title();?></h2>
								<span><?php if($headingA) {echo $headingA;} ?></span>	
							</div>
							<div class="howdo pt-5 mt-2 mt-xl-5 float-lg-right">
								<?php the_content(); ?> 	
							</div>
						</div> <!-- eo col-12 -->
					</div> <!-- eo row -->
				</div>
			<?php

		endwhile; endif;  wp_reset_postdata();

	}


	if($term == 'congratulations-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			?>

				<div class="container pb-5">
					<div class="pb-5">
						<div class="container">
							<h6><?php the_title(); ?></h6>
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>

					<div class="row justify-content-center align-items-center px-xxl-5 ">
						<div class="col col-12 col-md-3 col-lg-4 mb-5">
							<div class="aliveGeneLogoBox">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/alivegeenlogo.svg" alt="alivegenelogo"></a>
							</div>
						</div>

						<div class="col col-12 col-md-6 col-lg-5">
							<div class="text-box">
								<?php the_content(); ?>
							</div>
						</div><!-- eo col -->
					</div><!-- eo row -->	
				</div><!-- eo container -->
					
			<?php

		endwhile; endif;  wp_reset_postdata();

	}


	if($term == 'you-are-one-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			?>

				<div class="youareone-box pt-2 pt-md-5 mt-3 mt-md-5">
					<div class="hertbit" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/heartbitIcon.png);">
					</div>

					<div class="container mt-5 pt-5 mb-5 mb-md-0">
						<div class="row youare-text d-flex align-items-center">
							<div class="col col-12 col-md-6">
								<h2><?php  the_title(); ?> <span><?php the_excerpt(); ?></span> <div class="onenumber-text my-4 my-md-0">
									<!-- <img src="<?php //echo get_template_directory_uri();?>/assets/img/onenumber.png"> -->
								</div></h2>

							</div>	
							<div class="col col-12 col-md-6 d-xl-none">
								<div class="row d-flex align-items-center">
									<div class="col col-12 col-md-3 p-md-0">
										<div class="onenumber-text my-4 my-md-0">
											<!-- <img src="<?php //echo get_template_directory_uri();?>/assets/img/onenumber.png"> -->
										</div>
									</div>
									<div class="col col-12 col-md-9 p-md-0 pl-md-4">
										<h4><?php the_content(); ?></h4>
									</div>
								</div>
							
								<a class="learnmoreBtn" href="">Learn More</a>
							</div>	
						</div>
					</div>

					<div class="lefeart d-none d-md-block">
					
						<?php
					 	 if( class_exists('Dynamic_Featured_Image')):
				        global $dynamic_featured_image;
				         $featured_images = $dynamic_featured_image->get_featured_images( $currentPost->ID );
				         if ( $featured_images ): 
				            ?>
				                <?php foreach( $featured_images as $images ): ?>
													<img src="<?php echo $images['full'] ?>">
				                <?php endforeach; ?>
				            <?php
				            endif;
				      endif;

				     ?>
					</div>

					<div class="one3dart d-none d-md-block">
						<img class="one3dartImg" src="<?php echo get_template_directory_uri();?>/assets/img/youare-section3dart.png)">
						<div class="row youare-text">
							<div class="col col-12 col-md-12 d-none d-xl-block">
								<div class="row d-flex align-items-center">
									<div class="col col-12 col-md-3 p-md-0">
										<div class="onenumber-text my-4 my-md-0">
											<!-- <img src="<?php //echo get_template_directory_uri();?>/assets/img/onenumber.png"> -->
										</div>
									</div>
									<div class="col col-12 col-md-9 p-md-0 pl-md-4">
										<h4><?php the_content(); ?></h4>
									</div>
								</div>
								<a class="learnmoreBtn" href="<?php echo get_permalink(get_page_by_path('individuals')) ?>">Learn More</a>
							</div>
						</div><!-- youare-text -->
						
					</div><!-- eo one3dart -->
				</div><!-- eo youareone-box -->	
					
			<?php

		endwhile; endif;  wp_reset_postdata();

	}



	if($term == 'start-with-science-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			?>

				<div class="westart-with-science discover-you-heart-dna-section py-5" style="background-image: url(<?php the_post_thumbnail_url($post->ID);?>">
					<div class="container py-md-5 ">
						<div class="row justify-content-end">
							<div class="col col-12 col-md-12 col-lg-5 text-center">
								<h2><?php the_title(); ?></h2>
								<h3><?php the_excerpt(); ?></h3>

							</div>
						</div>
					</div>

					<div class="container py-3">
						<div class="row d-flex justify-content-end">
							<div class="col col-12 col-md-12 col-lg-6 col-xxl-5">
								
								<?php the_content(); ?>

								<a class="learnmoreBtn" href="<?php echo get_permalink(get_page_by_path('start-with-science')) ?>">Learn More</a>
							</div>
						</div><!-- eo row -->
					</div><!-- eo container -->
				</div> <!-- eo discover-you-heart-dna-section -->
					
			<?php

		endwhile; endif;  wp_reset_postdata();

	}


	if($term == 'dna-is-not-your-destiny-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			?>

			<div class="yourdnanot-destiny-section py-5">	
				
				<div class="container py-3 py-md-5">
					<div class="row d-flex justify-content-center">
						<div class="col col-12 col-md-12 col-lg-9 col-xl-8 col-xxl-7 text-center">
							
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>

							<a class="learnmoreBtn" href="#">Learn More</a>
						</div>
					</div><!-- eo row -->
				</div><!-- eo container -->

			</div> <!-- eo yourdnanot-destiny-section -->

			<?php

		endwhile; endif;  wp_reset_postdata();

	}



	if($term == 'dialogue-matters-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			?>

			<div class="col col-12 col-md-12 col-lg-9 col-xl-8 col-xxl-6 text-center">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>

			<?php

		endwhile; endif;  wp_reset_postdata();

	}


	if($term == 'dialogue-matters-cart'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			?>

			<div class="col col-12 col-md-4">
				<div class="dialogue-cart text-center">
					<div class="icon">
						<img src="<?php the_post_thumbnail_url($post->ID);?>" alt="<?php the_title(); ?>">
					</div>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>

					<!-- <a class="signinRegisterBtn" id="signin" href="javascript:void(0)">Start your counselling session now >></a> -->
				</div>
			</div><!-- eo col -->

			<?php

		endwhile; endif;  wp_reset_postdata();

	}


	if($term == 'starts-with-conversation-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			?>

				<h2><?php the_title(); ?></h2>
				<span><?php the_content(); ?></span>
			
			<?php

		endwhile; endif;  wp_reset_postdata();

	}


	if($term == 'starts-with-conversation-cart'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
			
			// Video Text Box
		 	$videoText = get_post_meta(get_the_ID(), 'input-metabox-conversationVideoText', true);

			?>
				<div class="col col-12 col-md-12">
					<div class="conversation-cart">
						<div class="icon">
							<img src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>">
						</div>
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>

						<div class="row video-box">
							<div class="col col-4">
							<?php
						 	 if( class_exists('Dynamic_Featured_Image')):
					        global $dynamic_featured_image;
					         $featured_images = $dynamic_featured_image->get_featured_images( $currentPost->ID );
					         if ( $featured_images ): 
					            ?>
					                <?php foreach( $featured_images as $images ): ?>

														<a href="#" style="background-image:url(<?php echo $images['full'] ?>)"></a>
					                <?php endforeach; ?>
					            <?php
					            endif;
					      endif;

					     ?>
								
							</div>
							<div class="col col-8">
								<?php if($videoText) {echo $videoText;} ?>
							</div>
						</div>

					</div><!-- eo conversation-cart -->
				</div><!-- eo col -->
				
			<?php

		endwhile; endif;  wp_reset_postdata();

	}


	if($term == 'start-your-journey-sec'){

		$query = new WP_Query($args);
			if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
				
				?>

					<div class="startyour-journery-better-section" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>)">

						<div class="container">
							<div class="row">
								<div class="col col-12">
									<div class="batter-healthartbox">
									
										<?php
									 	 if( class_exists('Dynamic_Featured_Image')):
								        global $dynamic_featured_image;
								         $featured_images = $dynamic_featured_image->get_featured_images( $currentPost->ID );
								         if ( $featured_images ): 
								            ?>
								                <?php foreach( $featured_images as $images ): ?>
								                	<img src="<?php echo $images['full'] ?>" alt="<?php the_title(); ?>">
								                <?php endforeach; ?>
								            <?php
								            endif;
								      endif;

								     ?>

										<div class="journeybetter-text text-center">
											<h2><?php the_title(); ?></h2>
											<?php the_content(); ?>

											<a class="learnmoreBtn" href="<?php echo get_permalink(get_page_by_path('your-journey')) ?>">AM I ELIGIBLE</a>
										</div>
									</div>
								</div>
							</div><!-- eo row -->
						</div><!-- eo container -->

					</div><!-- eo startyour-journery-better-section -->					
				
				<?php

		endwhile; endif;  wp_reset_postdata();

	}


}// end of function for Home Sections




// function for individuals page sections

function filter_individuals_section_terms($term, $taxonomy){

	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'individual',
		'orderby' => 'asc',
		'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $term,
				)
		),
	);

 	if($term == 'proactive-genetic-exploration-sec'){

 		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>
					
			<div class="container">
				<div class="row justify-content-center">
					<div class="col col-12 text-center col-md-9">
						<span><?php the_title(); ?></span>
						<?php the_content(); ?>
					</div>
				</div><!-- eo row -->
			</div><!-- eo container -->

 			<?php

		 endwhile; endif;  wp_reset_postdata();

 	}


 	if($term == 'risks-answers-action-cart'){

 		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>

			<div class="col col-12 col-md-4">
				<div class="dialogue-cart text-center">
					<div class="icon">
						<img src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>">
					</div>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			</div><!-- eo col -->
				

 			<?php

		 endwhile; endif;  wp_reset_postdata();

 	}

 	if($term == 'proactive-genetic-testing-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>

			<div class="whatis-proactivegenetictesting-section py-5" style="background-image: url(<?php the_post_thumbnail_url($post->ID); ?>)">

				<div class="container py-3 py-lg-4">
					<div class="row justify-content-lg-end">
						<div class="col col-12 col-lg-9 col-xl-8 col-xxl-7 px-xl-4 px-xxl-5 text-center">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div><!-- eo col -->
					</div><!-- eo row -->
				</div><!-- eo container -->

			</div><!-- eo whatis-proactivegenetictesting-section -->

 			<?php

		endwhile; endif;  wp_reset_postdata(); 		

 	}


 	if($term == 'genetic-navigator-services-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>

			 	<div class="container">	
					<div class="row">	
						<div class="col col-12">	
							<h2><?php the_title(); ?></h2>
						</div><!-- eo col -->
					</div>	
				</div><!-- eo container -->

				<div class="geneticnavigatorart-box mt-5">	
					<img src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>">
				</div>

				<div class="container">
					<div class="row justify-content-center">	
						<div class="col col-12 col-lg-8">	
							<h4><?php the_content(); ?></h4>
						</div>
					</div><!-- eo row -->
				</div>
			
 			<?php

		endwhile; endif;  wp_reset_postdata(); 		

 	}


 	if($term == 'gn-services-cart'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>

 				<div class="col col-12 col-sm-6 col-md-6 mb-5 mb-sm-0 px-xl-5 px-xxl-5 geneticnavigatorcart-col">	
					<div class="title">	
						<h3><?php the_title(); ?></h3>
					</div>
					<?php the_content(); ?>
				</div>
			
 			<?php

		endwhile; endif;  wp_reset_postdata(); 		

 	}


 	if($term == 'book-a-test-now-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>

				<div class="bookatest-now-section py-5" style="background-image:url(<?php the_post_thumbnail_url($post->ID); ?>);">

					<div class="container py-lg-4">
						<div class="row d-flex justify-content-center">
							<div class="col col-12 col-lg-9">
								<div class="row d-flex align-items-center">
									<div class="col col-12 col-lg-9 mb-4 mb-lg-0 text-center ">
										<h2><?php the_content(); ?></h2>
									</div>
									<div class="col col-12 col-lg-3">
										<a class="learnmoreBtn" href="<?php echo get_permalink(get_page_by_path('book-a-test')) ?>">Book a test now</a>
									</div>		
								</div><!-- eo row -->
							</div>
						</div>
					</div>

				</div><!-- eo bookatest-now-section -->
			
 			<?php

		endwhile; endif;  wp_reset_postdata(); 		

 	}

 	if($term == 'how-it-works-sec'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>

				<h2><?php the_title(); ?></h2>
				<span><?php the_content(); ?></span>
			
 			<?php

		endwhile; endif;  wp_reset_postdata(); 		

 	}


 	if($term == 'how-it-works-cart'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();

		 	// Video Text Box
		 	$videoText = get_post_meta(get_the_ID(), 'input-metabox-conversationVideoText', true);
 		
 			?>

				<div class="col col-12 col-md-12">
					<div class="conversation-cart">
						<div class="icon">
							<img src="<?php the_post_thumbnail_url($post->ID); ?>" alt="<?php the_title(); ?>">
						</div>
						<h3><?php the_title(); ?></h3>
							
							<?php the_content(); ?>

						<div class="row video-box">
							<div class="col col-4">
								<?php
							 	 if( class_exists('Dynamic_Featured_Image')):
						        global $dynamic_featured_image;
						         $featured_images = $dynamic_featured_image->get_featured_images( $currentPost->ID );
						         if ( $featured_images ): 
						            ?>
						                <?php foreach( $featured_images as $images ): ?>

															<a href="#" style="background-image:url(<?php echo $images['full'] ?>)"></a>
						                <?php endforeach; ?>
						            <?php
						            endif;
						      endif;

						     ?>
							</div>
							<div class="col col-8">
								<p><?php if($videoText) {echo $videoText;} ?></p>
							</div>
						</div>

					</div><!-- eo conversation-cart -->
				</div><!-- eo col -->
				
 			<?php

		endwhile; endif;  wp_reset_postdata(); 		

 	}

}// end of function for Individuals Page Sections





// function for Genetic Services for Clinicians page sections

function filter_genetic_services_clinicians_section_terms($term, $taxonomy){

	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'clinicians',
		'orderby' => 'asc',
		'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $term,
				)
		),
	);

	if($term == 'section-a'){

		$query = new WP_Query($args);
		 if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post();
 		
 			?>
 			
				<div class="col col-12 text-center col-md-9">
					<h4><?php the_content(); ?></h4>
					<h3><?php the_title(); ?></h3>
				</div>
						
 			<?php

		endwhile; endif;  wp_reset_postdata(); 		

 	}



}// end of function for Genetic Services for Clinicians page sections
















