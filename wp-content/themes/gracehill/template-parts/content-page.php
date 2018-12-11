<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( get_field('masthead_type') == 'cover' ): ?>
	<section class="entry-header animated fade cover" style="background-image:url('<?php the_field( 'blog_cover_image'); ?>');">
	<?php endif; ?>


	<?php if( get_field('masthead_type') == 'color' ): ?>
	<section class="entry-header animated expand-down" style="">
	<?php endif; ?>

	<?php if( get_field('masthead_type') == 'centerblock' ): ?>
	<section class="entry-header animated fade centerblock" style="background-image:url('<?php the_field( 'blog_cover_image'); ?>');">
	<?php endif; ?>

	<?php if( get_field('masthead_type') == 'none' ): ?>
	<section class="entry-header animated fade none" style="background-image:url('<?php the_field( 'blog_cover_image'); ?>');">
	<?php endif; ?>

	<?php if( get_field('masthead_type') == 'contained' ): ?>
	<section class="entry-header animated fade contained" style="">
	<?php endif; ?>

		<div class="container">
			<?php if( get_field('display_author_attribution') == 'yes' ): ?>
			<div class="col-1">
				<?php the_title( '<h3 class="entry-title">', '</h3>' );
				$author_avatar_size = apply_filters( 'twentysixteen_author_avatar_size', 49 );
				printf( '<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n disable-link" href="%3$s">%4$s</a></span></span>',
					get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
					_x( '', 'Used before post author name.', 'twentysixteen' ),
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					get_the_author()
				);
				?>
			</div>
			<?php endif; ?>
			<?php if( get_field('display_author_attribution') == 'no' ): ?>
			<div class="col-1">
				<?php the_title( '<h3 class="entry-title">', '</h3>' );?>
			</div>
			<?php endif; ?>

			<?php if( get_field('display_author_attribution') == '' ): ?>
			<div class="col-1">
				<?php the_title( '<h3 class="entry-title">', '</h3>' );
				$author_avatar_size = apply_filters( 'twentysixteen_author_avatar_size', 49 );
				printf( '<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n disable-link" href="%3$s">%4$s</a></span></span>',
					get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
					_x( '', 'Used before post author name.', 'twentysixteen' ),
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					get_the_author()
				);
				?>
			</div>
			<?php endif; ?>
			<div class="col-2">
				<?php twentysixteen_entry_date();?>
			</div>
			

			<?php if( get_field('masthead_type') == 'contained' ): ?>
				<div class="block-image">
					<img src='<?php the_field( 'blog_cover_image'); ?>'>
				</div>
			<?php endif; ?>
			
		</div>
		
	</section><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	

	<section class="entry-content animated fade">
		<div class="container">
			<div class="inner">
				
				<?php the_field('post_content'); ?>
			</div>
		</div>
		
	</section><!-- .entry-content -->

	


</article><!-- #post-## -->
