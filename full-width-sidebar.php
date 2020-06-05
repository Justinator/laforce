<?php
/**
 * @package InsightCustom
 * Template Name: Full Width with Sidebar Nav
 */
get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part( "/template-parts/hero" ); ?>
		<div class="container-wide flex flex-column flex-row-m padding-top-25 padding-bottom-25">
			<div class="sub-nav-sidebar w-100 w-30-m">
				<?php get_template_part( '/template-parts/sidebar' ); ?>
			</div>
			<div class="w-100 w-70-m lane-wide">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
