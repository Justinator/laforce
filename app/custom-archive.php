<?php
// Function to get archives list by year
function wpb_limit_archives() {
$my_archives = wp_get_archives(array(
  'type'=>'yearly',
  'limit'=>10,
  'echo'=>0
));
return $my_archives;
}
// Create a shortcode
add_shortcode('wpb_custom_archives', 'wpb_limit_archives');
// Enable shortcode execution in text widget
add_filter('widget_text', 'do_shortcode');
?>
