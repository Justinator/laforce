<?php
	$background = get_field('background_color');
	$headingColor = get_field('heading_color');
?>
<div class="padding-20" style="<?php if( !empty( $background ) ) echo "background-color: " . $background; ?>">
	<div class="text-center"><h5 class="no-margin text-white" style="<?php if( !empty( $headingColor ) ) echo "color: " . $headingColor; ?>"><?php echo get_field("heading"); ?></h5></div>
</div>
