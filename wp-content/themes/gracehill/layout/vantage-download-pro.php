<?php
/*
 * Template Name: Vantage Pro Download
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
							<br /><br />
							<h4><?php the_field('intro'); ?></h4>
							<p><?php the_field('Credit'); ?></p>
							

						</div>
						
						

					</div>
				</section><!-- .entry-content -->

				
				<section id="large-image-callout" style="background-image:url('<?php the_field( 'call_out_image_cover'); ?>');">
					<div class="container">
						<div class="col-1">
							
							<p><?php the_field('call_out_title'); ?></p>
						</div>
						
						
					</div>
				</section>

				<section id="previous-editions">
					<div class="container">
						
						<p><?php the_field('call_out_title_2'); ?></p>
					
					
                        
	
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
				
				<div id="salesforceform" class="sf">
					<h6><?php the_field('sf_title'); ?></h6>
					<div class="sf-form-container">
						<?php include 'sf-form-landing.php'; ?>
					</div>
				</div>
			
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php get_footer(); ?>


