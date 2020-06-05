<?php

$prev_arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow-left"><polygon fill-rule="evenodd" points="9.414 12 16.707 19.293 15.293 20.707 6.586 12 15.293 3.293 16.707 4.707"/></svg>';
$prev_label = 'Previous';
$prev = $prev_arrow . $prev_label;
$next_arrow = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="arrow-right"><polygon fill-rule="evenodd" points="14.586 12 7.293 4.707 8.707 3.293 17.414 12 8.707 20.707 7.293 19.293"/></svg>';
$next_label = 'Next';
$next = $next_label . $next_arrow;
the_posts_pagination( array(
  'mid_size'  => 2,
  'prev_text' => $prev,
  'next_text' => $next,
  'screen_reader_text' => __( 'Post Navigation' )
) );

?>
