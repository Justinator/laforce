<?php
	$affiliateHeading = get_field("affiliate_heading");
	if (!empty( $affiliateHeading )) {
		?>
		<div class="bg-secondary padding-top-25 padding-bottom-25">
			<div class="text-center"><h4 class="no-margin text-white"><?php echo $affiliateHeading; ?></h4></div>
		</div>
		<?php
	}
?>
<div class="affilliates">
	<div class="affiliate-wrap">
		<div class="affiliate-inner padding-top-25 padding-bottom-25">
			<?php if( have_rows('affiliations') ): ?>
				<?php while( have_rows('affiliations') ): the_row();
				// vars
				$logo = get_sub_field('affiliate_logo');
				?>
				<?php
	        $imageID = $logo['ID'];
	        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'partner-logo dim', 'data-sizes' => 'auto' ) );
	      ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
