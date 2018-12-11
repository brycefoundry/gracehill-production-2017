<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<section class="page-header animated expand-down">
				<div class="container">
					<h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h3>
				</div>
				
			</section><!-- .page-header -->
			
			<section id="blog-listing-section-1">
				<div class="container">
					<div class="search-container">
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


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<?php include 'layout/blog-feature.php'; ?>
		<?php include 'layout/schedule-demo.php'; ?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
