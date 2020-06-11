<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<div class="bg-grey padding-20">
			<div class="container-wide">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<section id="project-specs" class="container project padding-top-25 lane-wide">
			<div class="w-100">
				<?php insightCustom_post_thumbnail(); ?>
			</div>
			<div class="w-100">
				<?php
					$subtitle = get_field( 'project_subtitle' );
					$projectDesc = get_field( 'project_short_description' );
					$supplies = get_field( 'supplies' );
					$downloadsTitle = get_field( 'downloads_title' );
					$downloadsURL = get_field( 'download_url' );
				if ( !empty( $subtitle ) ){
					?>
				<h2><?php echo $subtitle; ?></h2>
				<?php }
				if ( !empty( $projectDesc ) ){
					?>
				<p><?php echo $projectDesc ?></p>
				<?php } ?>
				<div class="flex flex-column flex-row-l padding-bottom-10">
					<div class="w-100 w-30-l padding-10 border-right">
						<div class="w-100">
							<strong>LOCATION</strong><br>
							<?php echo get_field( 'project_location' ); ?><br>
						</div>
						<div class="w-100">
							<strong>COMPLETED</strong><br>
							<?php echo get_field( 'date_completed' ); ?><br>
						</div>
					</div>
					<div class="w-100 w-30-l padding-10 border-right">
						<?php
						if (!empty( $supplies )){
							?>
							<strong>LAFORCE SUPPLIED</strong><br>
							<?php echo $supplies; ?>
						<?php } ?>
					</div>
					<div class="w-100 w-30-l padding-10">
						<p>
						<?php if( have_rows( 'project_partners' ) ): ?>
							<strong>PROJECT PARTNERS</strong><br>
							<?php while( have_rows( 'project_partners' ) ): the_row();
							// vars
							$partner = get_sub_field( 'partner' );
							$partnerWebsiteURL = get_sub_field( 'partner_website_url' );
							?>
							<a href="<?php echo $partnerWebsiteURL; ?>" target="_blank" rel="nofollow noreferrer" aria-label="Opens our project partner's website in a new window"><?php echo $partner; ?></a><br>
							<?php endwhile; ?>
						<?php endif; ?>
						</p>
						<?php
						if ( !empty( $downloadsURL ) ){
							?> <p><a href="<?php echo $downloadsURL; ?>" target="_blank" aria-label="Download the project PDFs"><?php echo $downloadsTitle; ?></a></p>
						<?php }  ?>
					</div>
				</div>
			</div>
		</section>
		<section id="project-details" class="container padding-top-25 padding-bottom-25 lane-wide">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'single' );
			endwhile; // End of the loop.
			?>
		</section>
		<?php
		$gallery = get_field( 'project_gallery' );
		if ( !empty( $gallery ) ){
			?>
			<div class="bg-grey padding-20">
				<div class="container-wide">
					<h6 class="g2">Gallery</h6>
				</div>
			</div>
			<section id="project-gallery" class="gallery-container container-wide padding-top-25 padding-bottom-25">
				<?php echo $gallery; ?>
			</section>
		<?php } ?>
		<?php get_template_part( "/inc/portfolio/custom-post-nav" ); ?>
		<?php get_template_part( "/inc/portfolio/related-projects" ); ?>
	</main>
</div>
<?php
get_footer();
