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
	
	


	
	<?php if( get_field('pdf_select') == 'Yes' ): ?>
	<section class="entry-content animated fade">
		<div class="container">

			 <div class="vantage-content">
			 	<div class="wrap">
			 		<div class="top">
			 			<a id="overview-btn" href="/vantage/news/" class="cta">All Vantages</a>

			 		</div>
			 		<?php the_content(); ?>
			 	</div>
			 </div>

		</div>

			
		
		
	</section><!-- .entry-content -->
	<?php endif; ?>

	<?php if( get_field('pdf_select') == 'No' ): ?>


		<section class="entry-content animated fade">
			<div class="container">
				<div class="vantage-content">
					<div class="wrap">
						<h1>Vantage Pro</h1>
						<h4><?php the_field( 'subheader'); ?></h4>
					</div>
					

				</div>
			</div>

		</section>

		<section id="vantage-issue">
		<div class="issue-num">
		<h6>Issue</h6>
		<span class="num">01</span>
		

		</div>
		<span class="date">June 2017</span>
		</section>

		<!--Intro-->
		
		<?php if( get_field('turn_off_intro') == 'No' ): ?>
			<section id="vantage-intro">
				<div class="container">
					<div class="wrap">
						<h3><?php the_field( 'intro_title'); ?></h3>
						<p><?php the_field( 'intro_content'); ?></p>

					</div>
				</div>

			</section>
		<?php endif; ?>


		<!--Section 1-->

		<?php if( get_field('section_1_switch') == 'No' ): ?>
			<section id="vantage-section-1">
				<div class="container">
					<div class="wrap">
					
						<?php the_field( 'section_1_content'); ?>
						
					</div>
				</div>

			</section>
		<?php endif; ?>

		<?php if( get_field('section_1_switch') == 'No' ): ?>
			<?php if( get_field('call_out_1_switch') == 'Yes' ): ?>
				<section id="vantage-section-1-callout" class="section-callout">
					<div class="container">
						<div class="wrap">
							<h3><?php the_field( 'call_out_content_1'); ?></h3>			
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endif; ?>

		<!--Section 2-->
		
		<?php if( get_field('turn_off_section_2') == 'No' ): ?>
			<section id="vantage-section-2">
				<div class="container">
					<div class="wrap">
					
						<?php the_field( 'section_2_content'); ?>
						
					</div>
				</div>

			</section>
		<?php endif; ?>

		<?php if( get_field('turn_off_section_2') == 'No' ): ?>
			<?php if( get_field('call_out_2_switch') == 'Yes' ): ?>
				<section id="vantage-section-2-callout" class="section-callout">
					<div class="container">
						<div class="wrap">
							<h3><?php the_field( 'call_out_content_2'); ?></h3>			
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endif; ?>

		<!--Section 3-->
		
		<?php if( get_field('turn_off_section_3') == 'No' ): ?>
			<section id="vantage-section-3">
				<div class="container">
					<div class="wrap">
					
						<?php the_field( 'section_3_content'); ?>
						
					</div>
				</div>

			</section>
		<?php endif; ?>

		<?php if( get_field('turn_off_section_3') == 'No' ): ?>
			<?php if( get_field('call_out_3_switch') == 'Yes' ): ?>
				<section id="vantage-section-3-callout" class="section-callout">
					<div class="container">
						<div class="wrap">
							<h3><?php the_field( 'call_out_content_3'); ?></h3>			
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endif; ?>

		<!--Section 4-->
		
		<?php if( get_field('turn_off_section_4') == 'No' ): ?>
			<section id="vantage-section-4">
				<div class="container">
					<div class="wrap">
					
						<?php the_field( 'section_4_content'); ?>
						
					</div>
				</div>

			</section>
		<?php endif; ?>

		<?php if( get_field('turn_off_section_4') == 'No' ): ?>
			<?php if( get_field('call_out_4_switch') == 'Yes' ): ?>
				<section id="vantage-section-4-callout" class="section-callout">
					<div class="container">
						<div class="wrap">
							<h3><?php the_field( 'call_out_content_4'); ?></h3>			
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endif; ?>

		<!--Section 5-->
		
		<?php if( get_field('turn_off_section_5') == 'No' ): ?>
			<section id="vantage-section-5">
				<div class="container">
					<div class="wrap">
					
						<?php the_field( 'section_5_content'); ?>
						
					</div>
				</div>

			</section>
		<?php endif; ?>

		<?php if( get_field('turn_off_section_5') == 'No' ): ?>
			<?php if( get_field('call_out_5_switch') == 'Yes' ): ?>
				<section id="vantage-section-5-callout" class="section-callout">
					<div class="container">
						<div class="wrap">
							<h3><?php the_field( 'call_out_content_5'); ?></h3>			
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endif; ?>


		

		

	<?php endif; ?>

	

	
	

						

						
				



	
	                                


</article><!-- #post-## -->
