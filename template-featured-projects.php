<?php
/**
 * Template Name: Featured Projects
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php get_template_part( "/template-parts/hero" ); ?>
		<div class="container-wide center">
			<div class="lane-wide padding-top-25">
				<p>
					These projects represent some of the most recent, challenging, and enjoyable projects that we’ve had the pleasure of producing.
					Click on the images/links below to learn more about each project.
				</p>
			</div>
			<div class="container-wide flex flex-center flex-wrap-m flex-column flex-row-m flex-row-m">
			<?php
				$the_query = new WP_Query( array(
					'post_type' => 'Portfolio',
					'order' => 'DESC',
					'posts_per_page' => 10,
					)
				);?>
				<?php
					while ( $the_query->have_posts() ) :
					$the_query->the_post();
				?>
				<figure class="fig" style="background: url('<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>') no-repeat; background-size: cover; background-position:center;">
					<figcaption class="figcaption">
						<h3><?php echo get_the_title(); ?></h3>
						<a href="<?php echo get_permalink(); ?>">
							<div class="fig-more">
								<div class="fig-more-inner">
									<p><?php echo get_the_excerpt(); ?></p>
									<p><span class="btn-fill fill">Read More</span></p><span class="screen-reader-text"> about <?php echo get_the_title(); ?></span>
								</div>
							</div>
						</a>
					</figcaption>
				</figure>
				<?php endwhile; ?>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
