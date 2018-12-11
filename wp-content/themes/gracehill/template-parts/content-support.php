<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>




 	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	<?php if (in_category( 'Learners' )) : ?>
	<section class="learners-header entry-header animated fade centerblock">
	<?php endif;?>

	<?php if (in_category( 'Administrators' )) : ?>
	<section class="admin-header entry-header animated fade centerblock">
	<?php endif;?>

		<div class="container">
			 



			<div class="col-1">
				<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
				<h2>For 
					<?php if (in_category( 'Administrators' )) : ?>
			 		Administrators
			 		<?php endif;?>	
			 		<?php if (in_category( 'Learners' )) : ?>
			 		Learners
			 		<?php endif;?>			
		

				</h2>
			</div>
			
			

			<?php if( get_field('masthead_type') == 'contained' ): ?>
				<div class="block-image">
					<img src='<?php the_field( 'blog_cover_image'); ?>'>
				</div>
			<?php endif; ?>
			
		</div>
		
	</section><!-- .entry-header -->

	


	
	
	<section class="entry-content animated fade">
		<div class="container">

			
			
			<div class="inner">
				<div class="breadcrumbs">
			 	<a href="/Support">Support</a> » 
			 	<?php if (in_category( 'Administrators' )) : ?>
			 	<a href="/support/administrators/">Administrators</a>
			 	<?php endif;?>
			 	<?php if (in_category( 'Learners' )) : ?>
			 	<a href="/support/learners/">Learners</a>
			 	<?php endif;?>
				 » <?php the_title()?>
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

			 <div class="support-content">
			 	<div class="wrap">
			 		<?php the_field('post_content'); ?>
			 	</div>
			 </div>
				



			</div>

			<aside>
				
				<?php if (in_category( 'Administrators' )) : ?>
				<div class="admin-container">
					<h6>Also in Administrators</h6>
					<?php
					$args = array(
						'post_type' => 'support',
					    'cat' => '10',
					    'limit' => 5
					);

					wpp_get_mostpopular( $args );
					?>
				</div>
				<?php endif;?>
			

			

				<?php if (in_category( 'Learners' )) : ?>
					<div class="learners-container">
				
					<h6>Also in Learners</h6>
					<?php
					$args = array(
						'post_type' => 'support',
					    'cat' => '9',
					    'limit' => 5
					);

					wpp_get_mostpopular( $args );
					?>
					</div>

				<?php endif;?>

			<div class="all-cat-container">
					<h6>Support Top Viewed</h6>
					<?php
					$args = array(
						'post_type' => 'support',
					   'limit' => 5
					);

					wpp_get_mostpopular( $args );
					?>

			</div>
				
			</aside>
		</div>
		
	</section><!-- .entry-content -->
	

	

	
	<section class="comment-container">
		<div class="container">
			<?php echo do_shortcode('[rate]'); ?>
			<div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://gracehill.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
		
	</section>

						

						
				



	
	                                


</article><!-- #post-## -->
