<?php
/*
 * Template Name: Support Category
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if(is_page('Learners')): ?>
			<section id="support-cat" class="learners-header center-align animated expand-down">
			<?php endif; ?>

			<?php if(is_page('Administrators')): ?>
			<section id="support-cat" class="admin-header center-align animated expand-down">
			<?php endif; ?>
				
				<div class="container">
					<h1>Support for</h1>
					<?php if(is_page('Administrators')): ?>
					<h2>Administrators</h2>
					<?php endif; ?>

					<?php if(is_page('Learners')): ?>
					<h2>Learners</h2>
					<?php endif; ?>
					
				</div>
			</section>

			<section id="support-cat-content" class="animated fade">
				<div class="container">
					<div class="inner">
						<div class="breadcrumbs"><a href="/Support">Support</a> » 
							<?php if(is_page('Learners')): ?>
							Learners
							<?php endif; ?>

							<?php if(is_page('Administrators')): ?>
						 	Administrators
						 	<?php endif; ?>
						 	
						
						 	
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
						<div class="articles">
							<?php if(is_page('Administrators')): ?>
							<?php

											$related = get_posts( array( 'post_type' => 'support','cat' => 10, 'numberposts' => 0,'orderby'=>'title', 'order' => 'ASC' ) );
											if( $related ) foreach( $related as $post ) {
											setup_postdata($post); ?>
											 <ul> 
										        <li>
										        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										           
										        </li>
											    </ul>   
											<?php }
											wp_reset_postdata(); ?>
							<?php endif; ?>

							<?php if(is_page('Learners')): ?>
							<?php

											$related = get_posts( array( 'post_type' => 'support', 'cat' => 9, 'numberposts' => 0, 'orderby'=>'title', 'order' => 'ASC' ) );
											if( $related ) foreach( $related as $post ) {
											setup_postdata($post); ?>
											 <ul> 
										        <li>
										        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										           
										        </li>
											    </ul>   
											<?php }
											wp_reset_postdata(); ?>
							<?php endif; ?>
						</div>
					

					</div>

					<aside>
						
						
					<?php if(is_page('Learners')): ?>
					<div class="category-listing learners">
					<?php endif; ?>

					<?php if(is_page('Administrators')): ?>
					<div class="category-listing admin">
					<?php endif; ?>
							<h6>Categories</h6>
							<ul><li><a href="/support/learners/">For Learners</a><span><?php
							$cat_count = get_category( '9' );
							echo $cat_count->count;
							?>
							</span></li>
							<li><a href="/support/administrators/">For Administrators</a><span><?php
							$cat_count = get_category( '10' );
							echo $cat_count->count;
							?>
							</span></li></ul>

					</div>
						
					</aside>
				</div>


				
			</section>

			

			<?php include 'support-module.php'; ?>

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
