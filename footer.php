<?php
/**
 * @package InsightCustom
 **/
?>

</div><!-- #content -->
	<footer id="footer" class="site-footer" role="contentinfo">
		<div id="footer-content" class="container-wide flex-container">
			<div class="w-100 w-50-l text-center text-left-l">
				<?php get_template_part( "/inc/footer/copyright" ); ?>
			</div>
			<div id="social" class="w-100 w-50-l text-center text-right-l">
				<a id="footer-phone" href="tel:<?php echo get_theme_mod( 'phone' ); ?>"><?php echo get_theme_mod( 'phone' ); ?></a>
				<?php get_template_part( "/inc/footer/social-media" ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
		var options = {
	  accessibility: true,
		prevNextButtons: false,
	  pageDots: true,
	  setGallerySize: false,
		wrapAround: true,
		bgLazyLoad: true,
	};

	var carousel = document.querySelector('[data-carousel]');
	var slides = document.getElementsByClassName('carousel-cell');
	var flkty = new Flickity(carousel, options);

	flkty.on('scroll', function () {
	  flkty.slides.forEach(function (slide, i) {
	    var image = slides[i];
	    var x = (slide.target + flkty.x) * -1/3;
	    image.style.backgroundPosition = x + 'px';
	  });
	});
</script>
<?php

	if( get_theme_mod( 'footer_scripts' ) ) {
		echo get_theme_mod( 'footer_scripts' );
	}

	?>
<?php wp_footer(); ?>
</body>
</html>
