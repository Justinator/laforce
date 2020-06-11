<div class="bg-grey padding-top-25 padding-bottom-25">
	<div class="container-wide">
		<h4><?php echo get_field( "slider_heading" ); ?></h4>
	</div>
</div>
<div class="container-wide partners">
	<div class="partner-wrap">
		<div class="partner-inner padding-top-25 padding-bottom-25 flex flex-align-center flex-justify-between">
			<?php if( have_rows( 'partner_slider' ) ): ?>
				<?php while( have_rows( 'partner_slider' ) ): the_row();
				// vars
				$logo = get_sub_field( 'partner_logo' );
				$partnerWebsite = get_sub_field( 'partner_website' );
				?>
				<a href="<?php echo $partnerWebsite ?>" class="dim" target="_blank" aria-label="Visit our partner websites in a new window">
					<?php
		        $imageID = $logo['ID'];
		        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'partner-logo', 'data-sizes' => 'auto' ) );
		      ?>
				</a>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
