<?php
/*
 * Template Name: Home
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<section id="home-section-1" class="cover-masthead center-align" style="background-image:url('<?php the_field( 'masthead-image'); ?>');">
				
				<div class="loader">
					<div class='uil-ripple-css'>
						<div></div>
						<div></div>
						
					</div>
					<span>Loading</span>
				</div>
				
				<div class="container">
					<h1><span><?php the_field('header');?></span><?php the_field( 'subheader');?></h1>
					<h2><?php the_field('allcapsheader');?></h2>
					<a href="/demo/" class="cta orange">Schedule a Demo</a>
				</div>

				<div id="scroll-down-btn"></div>
			</section>
			
			<?php include 'blog-feature.php'; ?>
			<?php include 'callout.php'; ?>
			
			<section id="home-section-4">
				<div class="container">
					<h1><?php the_field('what-header', 5); ?></h1>
					<h2><?php the_field('what-all-caps', 5);?></h2>

					<div class="icon-container">
						<div id="logo-animation-container" class="scale animated">
							<object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/center-piece.svg"></object>
						</div>
						<div id="icon-1" class="left animated">
							<div class="svg-container"><object id="test-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/raising-performance.svg"></object></div>
							<h4><?php the_field( 'top_left_title', 5);?></h4>
							<p><?php the_field( 'top_left_desc', 5);?></p>
							
						</div>

						<div id="icon-2" class="right animated">
							<div class="svg-container"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/streamlining-admin.svg"></object></div>
							<h4><?php the_field( 'top_right_title', 5);?></h4>
							<p><?php the_field( 'top_right_desc', 5);?></p>
						</div>

						<div id="icon-3" class="left animated">
							<div class="svg-container"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/reduce-risk.svg"></object></div>
							<h4><?php the_field( 'Bottom_Left_Title', 5);?></h4>
							<p><?php the_field( 'bottom_left_desc', 5);?></p>
							
						</div>

						<div id="icon-4" class="right animated">
							<div class="svg-container">
								<object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/customize-solutions.svg"></object>

							</div>
							<h4><?php the_field( 'bottom_right_title', 5);?></h4>
							<p><?php the_field( 'bottom_right_desc', 5);?></p>
						</div>

						
					</div>
				</div>
			</section>
			<section id="home-section-5" class="product-module left-align-image">
				<div class="container">
					<div class="accent-image-container animated left" style="background-image:url('<?php the_field( 'vision-accent', 5); ?>');"></div>
					<div class="content-container animated right">
						<img src='<?php the_field( 'home-vision-logo', 5); ?>' alt="vision logo">
						<h3><?php the_field( 'home-vision-title', 5); ?></h3>
						<p><?php the_field( 'home-vision-content', 5); ?></p>
						<a class="cta blue" href="/products#vision">Learn More</a>
					</div>
				</div>
			</section>
			<section id="home-section-6" class="product-module right-align-image">
				<div class="container">
					<div class="accent-image-container animated right" style="background-image:url('<?php the_field( 'visto-accent', 5); ?>');"></div>
					<div class="content-container animated left">
						<img src='<?php the_field( 'home-visto-logo', 5); ?>' alt="visto logo">
						<h3><?php the_field( 'home-visto-title', 5); ?></h3>
						<p><?php the_field( 'home-visto-content', 5); ?></p>
						<a class="cta blue" href="/products#visto">Learn More</a>
					</div>
				</div>
			</section>

			<?php include 'companies.php'; ?>
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
