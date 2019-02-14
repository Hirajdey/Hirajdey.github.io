						
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kishore
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<section class="banner owl-carousel owl-theme">
				<?php if(have_rows('banner')) : while(have_rows('banner')) : the_row();
          		$memberimage = get_sub_field('banner_image'); ?>
				<div class="item">
					<img src="<?php echo $memberimage ['url']; ?>" alt="">
					<div class="container">
						<div class="banner-caption">
							<div class="container">
								<p><?php the_sub_field('banner_offer'); ?></p>
								<h1><?php the_sub_field('banner_title'); ?></h1>
								<span><?php the_sub_field('banner_starting_price'); ?></span>
								<div class="btn">
									<a href="btns btn-outline">Explore the collection</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</section>


			<section class="garden-jewellery">
				<div class="container">
					<div class="heading">
						<h2><?php the_field('hatton_garden_jewellers_title'); ?></h2>
						<p><?php the_field('hatton_garden_jewellers_content'); ?></p>
					</div>
					<div class="garden-jewellery-row">
						<?php if(have_rows('hatton_garden_products')) : while(have_rows('hatton_garden_products')) : the_row();
          				$pimage = get_sub_field('hatton_garden_image'); ?>
						<div class="garden-jewellery-col">
							<div class="col-info">
								<img src="<?php echo $pimage ['url']; ?>" alt="">
								<div class="garden-caption">
									<h3><?php the_sub_field('hatton_garden_jewellers_heading'); ?></h3>
									<div class="btn">
										<a href="btns btn-outline">Explore the collection</a>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; endif; ?>
						
				</div>
			</section>

			<section>
				<div class="container">
					<div class="produts-heading">
					<?php 
			    	$args = array('child_of' => 9);
						$categories = get_categories( $args );
						foreach($categories as $category) { 
						?>
		    			<li class="catlink"><a href="javascript:void(0)"  id="<?php echo $category->name ?>"><?php echo $category->name ?></a></li>
		    			<?php }?>
					</div>

					<div class="product-row" >
						<?php $pestBlogs = new WP_Query('post_type=product&posts_per_page=-1&orderby=date&order=ASC'); ?>
						<?php if ($pestBlogs->have_posts() ) : while ($pestBlogs->have_posts() ) : $pestBlogs->the_post(); ?>
							<?php 
						      $categories = get_the_category();
						      $outputCatName = '';
						      if($categories){
						        foreach ($categories as $category){
						          $outputCatName .= $category->cat_name;
						        }
						      }
						    ?>
						<div class="product-col blogarticlecol" id="<?php echo $outputCatName ?>">
							<img src="<?php the_post_thumbnail_url() ?>" alt="jwellery">
							<div class="product-info">
								<span><?php the_field('women'); ?></span>
								<h4><?php the_field('products_title'); ?></h4>
								<p>
									<span class="old-price"><del><?php the_field('old_price'); ?>&nbsp;&nbsp;</del></span>
									<span class="new-price"><?php the_field('new_price'); ?></span>
								</p>
							</div>
						</div>
						<?php endwhile; endif;  wp_reset_postdata(); ?>
					</div>
				</div>
			</section>

			<section class="testimonial">
				<div class="container">
					<div class="abt-header mg-tp">
						<h2>Testimonials</h2>
						<a href="" class="effect effect-1">View all</a>
					</div><!-- /.abt-header -->
					<div class="owl-carousel pb-testimonial owl-theme">
						<?php
		          $args = array( 'post_type' => 'jetpack-testimonial', 'posts_per_page' => -1 );
		          $loop = new WP_Query( $args );
		            while ( $loop->have_posts() ) : $loop->the_post();?>
						<div class="item">
							<div class="testi-img">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="Pest Buters" />
							</div>
							<div class="testi-info">
								<?php the_title(); ?>
								<?php the_content(); ?>
							</div>
						</div>
						<?php endwhile;?>
					</div>
				</div>
			</section>

			<section class="blog">
				<div class="container">
					<h2>Latest from the blog</h2>
					<div class="blogs-row">
						<?php $pestBlogs = new WP_Query('category_name=blog&posts_per_page=3&orderby=date&order=ASC'); ?>
						<?php if ($pestBlogs->have_posts() ) : while ($pestBlogs->have_posts() ) : $pestBlogs->the_post(); ?>
						<div class="blog-col">
							<a href="<?php the_permalink();?>">
								<div class="blog-img">
									<img src="<?php the_post_thumbnail_url() ?>" alt="jwellery">
									<i class="fas fa-angle-right"></i>
								</div>
								<div class="blog-info">
									<span><?php echo get_the_date('M j, Y') ?></span>
									<h4><?php the_title(); ?></h4>
								</div>
							</a>
						</div>
						<?php endwhile; endif;  wp_reset_postdata(); ?>
					</div>
				</div>
			</section>
			

		</main><
	</div><!-- #primary -->

<?php
get_footer();
