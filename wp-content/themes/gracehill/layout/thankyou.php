<?php
/*
 * Template Name: Thank You
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
				
				<section class="entry-header animated fade" style="">
				

					<div class="container">
						<h1><?php wp_title(''); ?></h1>
						<h2><?php the_field( 'teaser_description'); ?></h2>
						
					</div>
					
				</section><!-- .entry-header -->

				

				

			<?php include 'blog-feature.php'; ?>

				


			
			
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php get_footer(); ?>


