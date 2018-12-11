<?php
/*
 * Template Name: Blog Listing
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<section id="blog-listing-section-1">
				<div class="container">
					<div class="search-container animated fade">
						<!--<input class="search animated fade" id="search-input" placeholder="Search for Blog Entry">
						<button class="sort blue button animated fade" data-sort="title" id="search-btn">Search</button>
						<input class="search animated fade" type="text" name="s" id="search-input" placeholder="Search for Blog Entry" value="<?php the_search_query(); ?>" />
						<input type="submit" class="search-btn" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />-->

						<form role="search" method="get" id="searchform"
						    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						    <div>
						        
						        <input placeholder="Search for a Blog Entry" class="search animated fade" type="text" value="<?php echo get_search_query(); ?>" name="s" id="search-input" />
						        <input type="submit" class="blue button animated fade" id="search-btn"
						            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
						    </div>
						</form>
					</div>
				</div>
				
			</section>
			<?php include 'blog-feature.php'; ?>
			<section id="blog-listing-section-2" class="blog-listing-quarters-module">
				<div class="container">
					<ul class="blog-items">




					<?php query_posts('cat=2&posts_per_page=20'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
					if (have_posts()) : ?>	
					
					<?php while (have_posts()) : the_post(); 

					$title= get_the_title();

					?>

					<li class="blog-quarter" style="background-image:url('<?php the_field( 'featured_post_cover_image'); ?>');">
						<div class="blog-container animated expand-right">
							<h6 class="date"><?php echo get_the_date( 'F j Y' ); ?></h6>
							<h4><?php echo $title;?></h4>
							<p class="desc"><?php the_field('teaser_description'); ?></p>
							<a class="cta read-blog" href="<?php the_permalink() ?>">Read More</a>
						</div>											
					</li>

					
					<?php endwhile; ?>
					
					<?php else : ?>
						
					<?php endif; ?>
						
						

						
					</ul>
					
				</div>
			</section>
			<?php include 'schedule-demo.php'; ?>
			
		

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
