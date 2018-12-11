<section id="home-section-2" class="blog-listing-module">





				<div class="container">



					<?php query_posts('cat=3&posts_per_page=1'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
					if (have_posts()) : ?>	
					
					<?php while (have_posts()) : the_post(); 

					$title= get_the_title();

					?>
						<div class="grid-prime" style="background-image:url('<?php the_field( 'featured_post_cover_image'); ?>');">
							<div class="blog-container animated expand-right">
								<h6 class="date"><?php echo get_the_date( 'F j Y' ); ?></h6>
								<h4><?php echo $title;?></h4>
								<p class="desc"><?php the_field('teaser_description'); ?></p>
								<a class="read-blog cta" href="<?php the_permalink() ?>">Read More</a>
							</div>
						</div>

					<?php endwhile; ?>
					
					<?php else : ?>
						
					<?php endif; ?>


					<aside class="">
						<?php query_posts('cat=4&posts_per_page=1'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
						if (have_posts()) : ?>	
						
						<?php while (have_posts()) : the_post(); 

						$title= get_the_title();

						?>
							<div class="grid-second" style="background-image:url('<?php the_field( 'featured_post_cover_image'); ?>');">
								<div class="blog-container animated expand-right">
									<h6 class="date"><?php echo get_the_date( 'F j Y' ); ?></h6>
									<h4><?php echo $title;?></h4>
									<p class="desc"><?php the_field('teaser_description'); ?></p>
									<a class="read-blog cta" href="<?php the_permalink() ?>">Read More</a>
								</div>
							</div>

						<?php endwhile; ?>
						
						<?php else : ?>
							
						<?php endif; ?>


						<?php query_posts('cat=5&posts_per_page=1'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
						if (have_posts()) : ?>	
						
						<?php while (have_posts()) : the_post(); 

						$title= get_the_title();

						?>
							<div class="grid-third" style="background-image:url('<?php the_field( 'featured_post_cover_image'); ?>');">
								<div class="blog-container animated expand-right">
									<h6 class="date"><?php echo get_the_date( 'F j Y' ); ?></h6>
									<h4><?php echo $title;?></h4>
									<p class="desc"><?php the_field('teaser_description'); ?></p>
									<a class="read-blog cta" href="<?php the_permalink() ?>">Read More</a>
								</div>
							</div>

						<?php endwhile; ?>
						
						<?php else : ?>
							
						<?php endif; ?>
							
					</aside>


</section>