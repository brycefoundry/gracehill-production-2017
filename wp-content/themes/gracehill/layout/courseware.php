<?php
/*
 * Template Name: Courseware
 * Description: Page template without sidebar
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="courseware-section-1" class="cover-masthead center-align" style="background-image:url('<?php the_field( 'masthead-image'); ?>');">
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
						
						<a href="/demo/" class="cta orange">Schedule a Demo</a>
					</div>				
				</div>

				<div id="scroll-down-btn"></div>
			</section>

			<section id="courseware-section-2">
				<div class="container">
					<div class="left-align-icon">
						<div class="svg-container animated left"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/courseware/courseware-1.svg"></object></div>
						<div class="content animated right">
							<h3><?php the_field('section_1_header', 10);?></h3>
							<?php the_field('section_1_content', 10);?>		
						</div>
					</div>

					<div class="right-align-icon">
						<div class="svg-container animated right"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/courseware/courseware-2.svg"></object></div>
						<div class="content animated left">
							<h3><?php the_field('section_2_header', 10);?></h3>
							<?php the_field('section_2_content', 10);?>		
						</div>
					</div>

					<div class="left-align-icon">
						<div class="svg-container animated left"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/courseware/courseware-3.svg"></object></div>
						<div class="content animated right">
							<h3><?php the_field('section_3_header', 10);?></h3>
							<?php the_field('section_3_content', 10);?>	
							
						</div>
					</div>

					<div class="right-align-icon">
						<div class="svg-container animated right"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/courseware/courseware-4.svg"></object></div>
						<div class="content animated left">
							<h3><?php the_field('section_4_header', 10);?></h3>
							<?php the_field('section_4_content', 10);?>	
							
						</div>
					</div>

					<div class="left-align-icon">
						<div class="svg-container animated left"><object id="my-svg" type="image/svg+xml" data="/wp-content/themes/gracehill/img/illustrations/courseware/courseware-5.svg"></object></div>
						<div class="content animated right">
							<h3><?php the_field('section_5_header', 10);?></h3>
							<?php the_field('section_5_content', 10);?>	
							
						</div>
					</div>

					<div class="center-align-3-col">
						

						<div style="text-align: center; margin-top: 100px;">
							<h6><?php the_field('cta_title', 10);?>	</h6>
							<a target="_blank" href='<?php the_field( 'cta_link_1', 10); ?>' class="cta blue">Download</a>
						</div>

						<div style="text-align: center; margin-top: 100px;">
							<h6><?php the_field( 'cta_title_2', 10); ?></h6>
							<a href="/demo/" class="cta blue">Schedule a Demo</a>
						</div>
					</div>

				</div>
			</section>
		

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
