<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Grace Hill
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KLGPH2N');</script>
	<!-- End Google Tag Manager -->



	<script type="text/javascript">
	piAId = '144301';
	piCId = '7801';

	(function() {
		function async_load(){
			var s = document.createElement('script'); s.type = 'text/javascript';
			s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
			var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
		}
		if(window.attachEvent) { window.attachEvent('onload', async_load); }
		else { window.addEventListener('load', async_load, false); }
	})();
	</script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-29188594-8', 'auto');
	  ga('send', 'pageview');

	</script>	


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLGPH2N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	
		
		<div id="menu-btn">
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<a href="/" id="mobile-home-btn">Home</a>
			
		
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<ul id="global-nav-list">
					<li id="global-nav-1"><a href="/products/">Products</a></li>
					<li id="global-nav-2"><a href="/courseware/">Courseware</a></li>
					<li id="global-nav-3"><a href="/support">Support</a></li>
					<li id="global-nav-4" class="logo"><a href="/">Home</a></li>
					<li id="global-nav-5"><a href="/about/">About</a></li>
					<li id="global-nav-6"><a href="/blog/">Blog</a></li>
					<li id="global-nav-7" class="demo-init"><a href="/demo/">Demo</a></li>
				</ul>
			</div>
			
		</header><!-- .site-header -->

		<div id="content" class="site-content">
