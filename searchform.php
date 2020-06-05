<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
    <input type="search" class="search-field whiteText" aria-label="Search"
        placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ) ?>"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
  <button type="submit" class="search-submit" aria-label="Submit search term"><!-- TODO: clean this up -->
    <span class="screen-reader-text"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></span>
    <?php get_template_part( "/inc/svg-icons/search" ); ?>
  </button>
</form>
