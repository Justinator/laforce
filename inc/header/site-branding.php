<div class="masthead-inner container-wide">
  <div class="masthead-inner-wrap w-90 w-100-l">
    <div class="logo-wrapper w-70 w-100-l">
      <div class="logo-wrapper-inner center">
        <a href="<?php echo esc_url( home_url() ); ?>" id="primary-logo" class="site-logo dim-light" title="LaForce Home">
          <?php $custom_logo_id = get_theme_mod( 'primary_logo' ); ?>
          <img src="<?php echo $custom_logo_id; ?>">
        </a>
        <a href="<?php echo esc_url( home_url( '/security-systems/' ) ); ?>" id="secondary-logo" class="site-logo dim-light" title="LaForce Electronic Security Systems Home">
          <?php $secondary_logo_id = get_theme_mod( 'your_secondary_logo' ); ?>
          <img src="<?php echo $secondary_logo_id; ?>">
        </a>
      </div>
    </div>
    <div class="menu-button-wrap" aria-label="mobile menu toggle button" tabindex="0">
      <button class="hamburger hamburger--collapse" type="button" aria-label="Mobile menu button" aria-expanded="false">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>
  <?php get_template_part('/inc/header/main-menu'); ?>
  <div id="search-form-wrap">
    <div id="search-form-inner" class="w-70">
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
