<?php
/*
 * Template Name: Support Alt
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="support-section-1" class="short-masthead center-align animated expand-down">
				<div class="container">
					<h1><?php the_field('header', 11);?></h1>
					<h2><?php the_field('all_caps_header', 11);?></h2>
				</div>
			</section>

			
			
			<section id="support-iframe">
				<div class="container">
					<div id="learners-support-content">
						<iframe src="https://d2lprod.service-now.com/grace_hill" frameborder="0"></iframe>	
					</div>

					
					
				</div>
				
			</section>

		
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php get_footer(); ?>


