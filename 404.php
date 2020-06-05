<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'insightcustom' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Take a look at some of the links below or try a search to find what you are looking for? Contact us if the issue persists and you cannot find what you\'re looking for.', 'insightcustom' ); ?></p>
					<ul>
						<?php
		          wp_nav_menu( array(
		              'theme_location'    => 'main-menu',
		              'container_class'				=> 'main-menu',
		              'depth'             => 4,
		              'container'         => false,
		              'items_wrap' 				=> '%3$s'
		          ) );
			      ?>
					</ul>
					<?php
					the_widget( 'WP_Widget_Recent_Posts' );
					?>
				</div><!-- .page-content -->
			</div>
			<div class="sub-nav-sidebar w-100 w-30-m">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
