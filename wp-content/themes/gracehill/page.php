<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
		<?php if( get_field('sf_switch') == 'yes' ): ?>
			
				<?php include 'layout/sf-form-demo.php'; ?>
								
		<?php endif; ?>

		<?php if( get_field('sf_switch') == 'no' ): ?>
			<?php include 'layout/blog-feature.php'; ?>
			<?php include 'layout/schedule-demo.php'; ?>
		<?php endif; ?>

		<?php if( get_field('sf_switch') == '' ): ?>
			<?php include 'layout/blog-feature.php'; ?>
			<?php include 'layout/schedule-demo.php'; ?>
		<?php endif; ?>
	</main><!-- .site-main -->

	

</div><!-- .content-area -->


<?php get_footer(); ?>
