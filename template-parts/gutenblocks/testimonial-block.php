<div class="testimonial-slider" data-carousel style="background-image: url('/assets/css/wp-content/themes/insightcustom/images/LaForce-Office-Entrance.jpg');">
<?php if( have_rows( 'testimonial_slider' ) ): ?>
	<?php while( have_rows( 'testimonial_slider' ) ): the_row();
	// vars
	$slideHeading = get_sub_field( 'slide_heading' );
	$slideContent = get_sub_field( 'slide_content' );
	$author = get_sub_field( 'testimonial_author' );
	?>
	<div class="carousel-cell">
		<div class="overlay">
		</div>
		<div class="container-wide">
			<div class="inner">
				<h4 class="g6 text-white"><?php echo $slideHeading; ?></h4>
				<p class="slide-content text-white"><?php echo $slideContent; ?></p>
				<h5 class="text-white"><?php echo $author; ?></h5>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>
</div>
