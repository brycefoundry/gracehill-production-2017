<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Grace Hill
 */
?>

		</div><!-- .site-content -->

		<footer>
			<div class="container">
				<div id="footer-col-1" class="footer-col">
					<div class="footer-colophon">
						<a href="/"><span class="footer-logo">Grace Hill</span></a>
						<p>All Rights Reserved ©</p>
						<p class="addr">3633 Wheeler Rd, Suite 230, Augusta, GA 30909</p>
						<p class="phone"><span>P:</span>866.472.2344</p>
						<p class="email"><span>E:</span><a href="mailto:contact@gracehill.com">contact@gracehill.com</a></p>
						<ul class="social">
							<li><a href="https://www.facebook.com/GraceHillTraining/" target="_blank"><img height="30px" width="30px" src="/wp-content/themes/gracehill/img/global/facebook-icn.png"/></a></li>
							<li><a href="https://twitter.com/gracehill" target="_blank"><img height="30px" width="30px" src="/wp-content/themes/gracehill/img/global/twitter-icn.png"/></a></li>
							<li><a href="https://www.linkedin.com/company/grace-hill" target="_blank"><img height="30px" width="30px" src="/wp-content/themes/gracehill/img/global/in-icn.png"/></a></li>
						</ul>
					</div>
				</div>

				<div id="footer-col-2" class="footer-col">
					<div class="footer-blog">
						<h6>Blog</h6>
						<ul>
							<?php query_posts('cat=6&posts_per_page=3'); //set p=x where x is post id of post you want to see or use query_posts('cat=1&posts_per_page=1); to show one post from Category 1
							if (have_posts()) : ?>	
							
							<?php while (have_posts()) : the_post(); 

							$title= get_the_title();

							?>
							<li><a href="<?php the_permalink() ?>"><?php echo $title;?></a></li>
								

							<?php endwhile; ?>
							
							<?php else : ?>
								
							<?php endif; ?>
							
							
						</ul>
					</div>
				</div>

				<div id="footer-col-3" class="footer-col">
					<div class="footer-products">
						<h6>Products</h6>
						<ul>
							<?php $loop = new WP_Query( array( 'post_type' => 'footer_products', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'DESC' ) ); ?>
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<li>
									
									<a href="<?php the_field( 'footer_link'); ?>"><?php the_title();?></a>
									
								</li>
							<?php endwhile; wp_reset_query(); ?>
						</ul>
					</div>

					<div class="footer-links">
						<ul>
							<?php $loop = new WP_Query( array( 'post_type' => 'footer_links', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<li>
									
									<a href="<?php the_field( 'footer_link'); ?>"><?php the_title();?></a>
									
								</li>
							<?php endwhile; wp_reset_query(); ?>
							<li><a href="/demo/" class="" id="footer-demo" href="">Demo</a></li>
							<li><a class="disable-link" id="footer-contact" href="">Contact</a></li>
						</ul>
					</div>
				</div>
				
				
			</div>	
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->



<?php include 'layout/modal-support.php'; ?>
<?php include 'layout/modal-demo.php'; ?>
<?php include 'layout/modal-contact.php'; ?>

<?php wp_footer(); ?>
<script type="text/javascript">
_linkedin_data_partner_id = "66695";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=66695&fmt=gif" />
</noscript>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59798cbba71c10cf"></script> 
</body>
</html>
