<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<div class="container-wide flex flex-column flex-row-m padding-top-25 padding-bottom-25">
			<div class="w-100 w-70-m lane-wide">
				<div class="post-wrapper">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'single' );
					endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="blog-sidebar w-100 w-30-m">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main><!-- #main -->
	<div class="subscribe-form-slideup">
		<div class="container-wide flex flex-center padding-10">
			<h6 class="no-margin">Subscribe to Our Blog</h6>
			<?php echo do_shortcode( '[gravityform id="6" title="false" description="false" ajax="true"]' ); ?>
		</div>
	</div>
</div><!-- #primary -->
<?php get_template_part( "/inc/blog/custom-post-nav" ); ?>
<?php get_template_part( "/inc/blog/related-posts" ); ?>
</div>

<?php
get_footer();
