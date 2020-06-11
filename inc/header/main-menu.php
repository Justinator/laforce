<nav id="primary" class="site-navigation w-100" role="navigation" aria-label="primary navigation">
  <h2 class="screen-reader-text">Main navigation</h2>
  <div class="main-menu-wrapper">
    <ul class="main-menu menu" role="menu" aria-label="Main Menu">
      <div id="mobile-search">
        <?php get_search_form(); ?>
      </div>
      <?php
          wp_nav_menu( array(
              'theme_location'    => 'main-menu',
              'container_class'				=> 'main-menu',
              'depth'             => 1,
              'container'         => false,
              'items_wrap' 				=> '%3$s'
          ) );
      ?>
    </ul>
    <button id="close-menu" aria-expanded="false" aria-controls="main-menu" aria-label="Close the mobile menu">
      <span id="close">Close</span>
    </button>
    <div id="search-wrap">
      <?php get_search_form(); ?>
    </div>
  </div>
</nav><!-- #site-navigation -->
