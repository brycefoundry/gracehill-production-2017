<?php
/*
 * Template Name: About
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="about-section-1" class="short-masthead center-align animated expand-down">
				
				<div class="container">
					<h1><?php the_field('header', 12);?></h1>
					<h2><?php the_field('all_caps_header', 12);?></h2>
				</div>
			</section>

			<section id="about-section-2" class="animated fade">
				<div class="container">
					<div class="floated-image-right caption" style="background-image:url('<?php the_field('intro_content_image', 12); ?>');">
						
						
					</div>
					<p><?php the_field('intro_content', 12);?></p>
				</div>
			</section>

			<section id="about-section-3">
				<div class="container">
					<div class="col-1">
						<h6><?php the_field('info_header_1', 12);?></h6>
						<div class="years-container animated fade">
							<ul>
								<li>1999</li>
								<li>2000</li>
								<li>2001</li>
								<li>2002</li>
								<li>2003</li>
								<li>2004</li>
								<li>2005</li>
								<li>2006</li>
								<li>2007</li>
								<li>2008</li>
								<li>2009</li>
								<li>2010</li>
								<li>2011</li>
								<li>2012</li>
								<li>2013</li>
								<li>2014</li>
								<li>2015</li>
								<li class="le-current-year">2016</li>
							</ul>
						</div>

						<h4><?php the_field('info_header_2', 12);?></h4>
						<div class="courses-infographic-container">
							<div class="courses-infographic">
								<div class="svg-container animated scale"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/about/about-3.svg"></object></div>
								<h5>1 MIL</h5>
							</div>

							<div class="courses-infographic">
								<div class="svg-container animated scale"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/about/about-3.svg"></object></div>
								<h5>1 MIL</h5>
							</div>

							<div class="courses-infographic">
								<div class="svg-container animated scale"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/about/about-3.svg"></object></div>
								<h5>1 MIL</h5>
							</div>

							<div class="courses-infographic">
								<div class="svg-container animated scale"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/about/about-3.svg"></object></div>
								<h5>1 MIL</h5>
							</div>
						</div>
					</div>
					<div class="col-2">
						<div class="row animated right">
							<div class="training-infographic-container">
								<span id="training-infographic-active">300,000</span>
							</div>
							<h6><?php the_field('info_header_3', 12);?></h6>
						</div>

						<div class="row animated right">
							<div class="svg-container"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/about/about-1.svg"></object></div>
							<h6><?php the_field('info_header_4', 12);?></h6>
						</div>

						<div class="row animated right">
							<div class="svg-container "><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/about/about-2.svg"></object></div>
							<h6><?php the_field('info_header_5', 12);?></h6>
						</div>
					</div>
				</div>
			</section>
			
			<section id="about-section-4">
				<div class="container">
					<h1><?php the_field('team_header', 12);?></h1>
					<h2><?php the_field('team_all_caps_header', 12);?></h2>
					<p><?php the_field('team_content', 12);?></p>
					<ul>
						<?php $loop = new WP_Query( array( 'post_type' => 'leadership', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li class="animated fade">
								<div style="background-image:url('<?php the_field( 'team-photo'); ?>');"></div>
								<h6 class="team-member-name"><?php the_title();?></h6>
								<h6 class="team-member-title"><?php the_field( 'team-title'); ?></h6>
								
							</li>
						<?php endwhile; wp_reset_query(); ?>

						<?php $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li class="animated fade">
								<div style="background-image:url('<?php the_field( 'team-photo'); ?>');"></div>
								<h6 class="team-member-name"><?php the_title();?></h6>
								<h6 class="team-member-title"><?php the_field( 'team-title'); ?></h6>
								
							</li>
						<?php endwhile; wp_reset_query(); ?>
						
						
						
					</ul>
				</div>
			</section>

			<?php include 'support-module.php'; ?>

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
