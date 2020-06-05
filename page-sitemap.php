<?php
/**
 * @package InsightCustom
 */
get_header();

?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part( "/template-parts/hero" ); ?>
		<div class="container-wide flex flex-column flex-row-m padding-top-25 padding-bottom-25">
			<div id="pages" class="w-100 w-50-l">
				<h3>Pages</h3>
				<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '1117', 'title_li' => ' ', 'depth' => 0)); ?>
				<h3>Featured Projects</h3>
				<ul class="featured-projects">
				<?php
				$the_query = new WP_Query( array(
	        'post_type' => 'Portfolio',
	        'order' => 'DESC',
	        'posts_per_page' => 100,
	        )
	      );?>
        <?php
          while ( $the_query->have_posts() ) :
          $the_query->the_post();
					?>
					<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php
					endwhile;
					wp_reset_postdata();
        ?>
				</ul>
			</div>
			<div class="w-100 w-50-l">
				<h3>News</h3>
				<ul class="newsPosts">
					<?php wp_get_archives( 'type=alpha' ); ?>
				</ul>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
