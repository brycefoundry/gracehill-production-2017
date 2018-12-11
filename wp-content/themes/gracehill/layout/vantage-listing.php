<?php
/*
 * Template Name: Vantage Listings
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<section class="masthead">
					<div class="container">
						<div class="col-1">
							<h1><?php the_field('page_header'); ?></h1>
							<h2><?php the_field('subheader'); ?></h2>
							
							

						</div>
						
						

					</div>
				</section><!-- .entry-content -->

				


				<section id="previous-editions">
					<div class="container">
						<div class="col-1">
							<h6>Issues <span><?php // Get total number of posts in "Books" post type
					$count_vantage = wp_count_posts('vantage');
					$total_vantage = $count_vantage->publish;
					echo $total_vantage;
				?></span></h6>
							 <ul> 
							
							<?php $loop = new WP_Query( array( 'post_type' => 'vantage', 'numberposts' => 0,'orderby'=>'title' ) );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>

						
					        <li>
					        	<a href="<?php the_permalink() ?>"><div style="background-image:url('<?php the_field( 'thumbnail'); ?>');"></div></a>
					        	<h5>The Vantage Volume <?php the_field( 'volume'); ?>, Issue <?php the_field( 'issue'); ?></h5>
					        	<a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
					        	<p><?php the_field('vantage_excerpt'); ?></p>
					       
					           
					        </li>
						 
										
						<?php endwhile; ?>

                        <?php else: ?>
                           
                        <?php endif; 
                         wp_reset_postdata();?>
                         </ul>   
						</div>
						
					
					
                        
	
				</div>
				</section>

				<section id="stay-tuned-module">
					<div class="col-1">
						<div class="wrap">
							<h1>Stay Tuned</h1>
							<p>for quarterly issues of The Vantage delivered straight to your inbox from Grace Hill and HSB. If you have tips for future content, please let us know!</p>
							<button id="footer-contact" class="cta">Send Us a Message</button>
						</div>
						
					</div>
					<div class="col-2" style="background-image:url('<?php the_field( 'call_out_image_cover'); ?>');"></div>
				</section>

			
			
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	
	<section id="vantage-thankyou-container" class="disable">
		<div class="wrap">
			<div class="inner">
				
			
			<div class="svg-container"></div>

			<div class="content">
				<h3>Welcome to the Vantage</h3>
				<h5>Brought to you by Grace Hill and Haynsworth Sinkler Boyd P.A. (HSB)</h5>
				<br />
				<p>Thank you for subscribing! Check back here every month and quarter to get the newest insider updates on the property management industry.</p>
				<button id="confirm-vantage" class="cta blue">Ok</button>
			</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>


