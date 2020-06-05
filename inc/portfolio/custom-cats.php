<?php
//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_custom_taxonomy', 0 );
//create a custom taxonomy name it topics for your posts
function create_custom_taxonomy() {
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Project Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Project Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Project Categories' ),
    'all_items' => __( 'All Project Categories' ),
    'parent_item' => __( 'Parent Project Categories' ),
    'parent_item_colon' => __( 'Parent Project Categories:' ),
    'edit_item' => __( 'Edit Project Categories' ),
    'update_item' => __( 'Update Project Categories' ),
    'add_new_item' => __( 'Add New Project Categories' ),
    'new_item_name' => __( 'New Project Categories Name' ),
    'menu_name' => __( 'Project Categories' ),
  );

// Now register the taxonomy

  register_taxonomy('Project Categories',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'Project Categories' ),
  ));

}
?>
