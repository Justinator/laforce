<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package InsightCustom
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<!-- Preconnect to Google Analytics -->
	<link rel="dns-prefetch" href="https://www.google-analytics.com">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
	<link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
	<link href="/assets/css/wp-content/themes/insightcustom/images/laforce-fav.png" rel="shortcut icon">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27521876-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<?php

		if( get_theme_mod( 'header_scripts' ) ) {
			echo get_theme_mod( 'header_scripts' );
		}

		?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="screen-reader-skip-to-content" href="#main-content" tabindex="0">Skip to main content</a>
<a class="screen-reader-skip-to-content" href="#footer" tabindex="0">Skip to footer content</a>
<div id="page" class="site">
	<header id="masthead" class="site-header shadow-1" role="banner">
		<?php get_template_part( '/inc/header/site-branding' ); ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
