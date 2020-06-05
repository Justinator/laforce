<?php
add_filter( 'pre_get_posts', 'custom_search' );
/**
 * This function modifies the main WordPress query to include an array of
 * post types instead of the default 'post' post type.
 *
 * @param object $query  The original query.
 * @return object $query The amended query.
 */
function custom_search( $query ) {
    if ( $query->is_search ) {
	$query->set( 'post_type', array( 'post', 'portfolio', 'page' ) );
    }
    return $query;
}
?>
