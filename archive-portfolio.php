<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<section id="portfolio-hero" class="hero">
      <div class="hero-overlay">
        <div class="header-outer-wrap container-wide">
          <div class="header-inner-wrap text-left text-center-l">
            <h1>Featured Projects Gallery</h1>
          </div>
        </div>
      </div>
    </section>
		<div class="container-wide center">
			<div class="lane-wide padding-top-25 padding-bottom-25">
				<p>
					We have worked on projects of all sizes across the country including, healthcare, educational facilities, government buildings, industrial, religious, multi-residential housing and much more.
				</p>
			</div>
			<div class="portfolio-wrap center">
				<?php
				$the_query = new WP_Query( array(
	        'post_type' => 'Portfolio',
	        'order' => 'DESC',
	        'posts_per_page' => 9,
					'paged' => get_query_var( 'paged' ),
	        )
	      );?>
        <?php
          while ( $the_query->have_posts() ) :
          $the_query->the_post();
					get_template_part( 'template-parts/content', get_post_type() );
					endwhile;


        ?>
			</div>
			<div class="pagination-wrapper">
				<?php
				get_template_part( '/inc/blog/archive-pagination' );
				?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
