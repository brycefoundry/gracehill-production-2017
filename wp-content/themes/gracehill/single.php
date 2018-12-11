<?php
/**
 * The template for displaying all single posts and attachments
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

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

				

			

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
