<section class="companies-module">
				<div class="container">
					<h1>Leading Companies</h1>
					<h2>Utilize Our Industry-Leading Online Training</h2>

					<ul class="logo-list">
					

						<?php $loop = new WP_Query( array( 'post_type' => 'logos', 'posts_per_page' => 10, 'order' => 'ASC' ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li class="animated fade">
								<div class="image-container animated fade"><img src='<?php the_field( 'company-logos'); ?>')/></div>
								
							</li>
						<?php endwhile; wp_reset_query(); ?>		
			
					</ul>
				</div>
</section>