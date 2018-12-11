<?php
/*
 * Template Name: Demo
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="demo-section-1" class="short-masthead center-align animated expand-down">
				<div class="container">
					<h1><?php the_field('header', 440);?></h1>
					<h2><?php the_field('all_caps_header', 440);?></h2>
				</div>
			</section>

			
			
			<section id="demo-content">
				<div class="container">
					<div class="sf">
						
						<p class="desc intro">Complete the form below and click on the "Submit" button. If you prefer, you can call us directly by dialing toll free, (866) 472-2344.</p>
						<p class="desc error-message hide">Error: Please fill out the required fields and select "Submit" when finished.</p>
						<div class="sf-form-container">
							<?php include 'sf-form-demo-contents.php'; ?>
						</div>
					</div>
				</div>
				
			</section>

		
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php get_footer(); ?>


