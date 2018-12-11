<?php
/*
 * Template Name: Landing
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	

				<section class="content animated fade">
					<div class="container">

						<div id="bottom" class="event-content">
							<div class="description">
							<h1><?php the_field('line_primary'); ?></h1>
							<h3><?php the_field('line_secondary'); ?></h3>
							<h3><?php the_field('line_tertiary'); ?>
							
							</h3>
							<h5><span><?php the_field('line_quattro'); ?></span></h5>
							
								<div class="logo">
									<img src="<?php the_field( 'event_logo'); ?>"/>
								</div>
								<div class="entry-content">
									<?php the_field('description'); ?>
								</div>
							</div>
							<?php if( get_field('watch_toggle') == 'On' ): ?>
								<div class="watch-container">
									<h2><?php the_field('watch_title'); ?></h2>
									<div class="watch"><?php the_field( 'watch_content'); ?></div>
									
								</div>
							<?php endif; ?>
							
							<?php if( get_field('map_toggle') == 'On' ): ?>
								<div class="map-container">
									<h2><?php the_field('where_to_find_us_title'); ?></h2>
									<div class="map"> <a href="<?php the_field( 'map'); ?>" target="_blank"><img src="<?php the_field( 'map'); ?>"/></a>
									</div>
								</div>
							<?php endif; ?>

							
						</div>
						<?php if( get_field('sf_toggle') == 'On' ): ?>
						<div id="salesforceform" class="sf">
							<h6><?php the_field('call_to_action'); ?></h6>
							<div class="sf-form-container">
								<?php include 'sf-form-landing.php'; ?>
							</div>
						</div>
						<?php endif; ?>

					</div>
				</section><!-- .entry-content -->

				
				

			
			
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php get_footer(); ?>


