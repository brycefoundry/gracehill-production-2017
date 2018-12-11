<?php
/*
 * Template Name: Products
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<section id="products-section-1" class="cover-masthead left-align" style="background-image:url('<?php the_field( 'masthead-image'); ?>');">>
				<div class="loader">
					<div class='uil-ripple-css'>
						<div></div>
						<div></div>
						
					</div>
					<span>Loading</span>
				</div>
				<div class="container">
					<h1><?php the_field('header');?></h1>
					<h2><?php the_field('allcapsheader');?></h2>
					<div class="buttons">
						
						<a href="/demo/" class="cta blue">Schedule a Demo</a>

					</div>				
				</div>

				<div id="scroll-down-btn"></div>
			</section>
			<nav id="product-nav">
				<div class="container">
					<ul>
						<li><button id="vision-button">Vision</button></li>
						<li><button id="visto-button">Visto</button></li>
						<li><button id="mystery-button">Mystery Shopper</button></li>
					</ul>
				</div>
			</nav>
			<?php include 'vision.php'; ?>
			<?php include 'visto.php'; ?>
			<?php include 'mysteryshopper.php'; ?>

			

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
