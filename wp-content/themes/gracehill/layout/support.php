<?php
/*
 * Template Name: Support
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

			
			
			<section id="support-section-2">
				<div class="container">
					
					<div id="learners-support-content">
						<div class="learners-container">
						
						<h6>Top Questions for Learners</h6>
						<?php
						$args = array(
							'post_type' => 'support',
						    'cat' => '9',
						    'limit' => 5
						);

						wpp_get_mostpopular( $args );
						?>
						<a class="view-all" href="/support/learners/">View All</a>
						</div>

						
						
						</div>
				<div class="admin-container">
					<h6>Top Questions For Administrators</h6>
					<?php
					$args = array(
						'post_type' => 'support',
					    'cat' => '10',
					    'limit' => 5
					);

					wpp_get_mostpopular( $args );
					?>
					<a class="view-all" href="/support/administrators/">View All</a>
				</div>
				
				
				
					

					
					
				</div>
				
			</section>

			<section id="support-section-3">
				<div class="container">
					<div class="news-status-container">
						<h3>Not a VisionX or Visto customer?</h3>
						
						<p>Do you just need to contact Grace Hill? Give us a call at <strong>(866) 472-2344</strong></p>
					</div>	

					
					<div class="search">
						<form method="get" id="search form" action="/">
						<div>
						<input type="text" placeholder="Find a Support Article" value="" name="s" id="s" />
						<input type="hidden" value="10" name="cat" id="scat" />
						<input type="submit" id="search_submit" name="Search" value="Search" />
						</div>
						</form>
					</div>
				</div>
				
			</section>

		
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	
<?php get_footer(); ?>


