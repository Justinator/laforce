<div class="hero-slider" data-carousel>
<?php if( have_rows('hero_slider') ): ?>
	<?php while( have_rows('hero_slider') ): the_row();
	// vars
	$slideBackground = get_sub_field('slide_background');
	$slideHeading = get_sub_field('slide_heading');
	$slideContent = get_sub_field('slide_content');
	$slideButtonText = get_sub_field('slide_button_text');
	$slideButtonLink = get_sub_field('slide_button_link');
	?>
	<div class="carousel-cell" style="background-image:url(<?php echo $slideBackground ?>);">
		<div class="overlay">
		</div>
		<div class="container-wide flex">
			<div class="inner flex flex-column flex-justify-center">
				<h2 class="title"><?php echo $slideHeading; ?></h2>
				<p class="slide-content"><?php echo $slideContent; ?></p>
				<p><a href="<?php echo $slideButtonLink ?>" class="btn-fill fill" aria-label="<?php echo $slideButtonText; ?>: <?php echo $slideHeading; ?>"><?php echo $slideButtonText; ?></a></p>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>
</div>
