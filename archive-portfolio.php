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
			<div class="lane-wide padding-top-25">
				<p>
					These projects represent some of the most recent, challenging, and enjoyable projects that we’ve had the pleasure of producing.
					Click on the images/links below to learn more about each project.
				</p>
			</div>
			<div class="container-wide flex flex-center flex-wrap-m flex-column flex-row-m flex-row-m">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
