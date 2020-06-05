<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package InsightCustom
 */

get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part( "/template-parts/hero" ); ?>
		<div class="container-wide flex flex-column flex-row-m padding-top-25 padding-bottom-25">
			<div class="archive-content w-100 flex flex-wrap">
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
					endwhile;
					$prev_arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow-left"><polygon fill-rule="evenodd" points="9.414 12 16.707 19.293 15.293 20.707 6.586 12 15.293 3.293 16.707 4.707"/></svg>';
					$prev_label = 'Previous Posts';
					$prev = $prev_arrow . $prev_label;
					$next_arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow-right"><polygon fill-rule="evenodd" points="14.586 12 7.293 4.707 8.707 3.293 17.414 12 8.707 20.707 7.293 19.293"/></svg>';
					$next_label = 'Next Posts';
					$next = $next_label . $next_arrow;
					the_posts_navigation( array(
						'prev_text' => $prev,
						'next_text' => $next,
						'screen_reader_text' => __( 'Post Navigation' )
					) );
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
