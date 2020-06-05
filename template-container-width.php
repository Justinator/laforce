<?php
/**
 * Template Name: Container Width Template
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part( "/template-parts/hero" ); ?>
		<div class="container padding-top-25 padding-bottom-25 lane-wide">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
		</div>
	</main>
</div>
<?php
get_footer();
