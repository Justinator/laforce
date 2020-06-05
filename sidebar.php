<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package InsightCustom
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<div id="social-2" class="blog-social-wrap">
  <div class="social-outer">
    <div class="social-inner">
      <h2 class="widget-title">Follow Us</h2>
      <?php get_template_part( "/inc/footer/social-media" ); ?>
    </div>
  </div>
</div>
<div id="subscribe" class="blog-social-wrap">
  <div class="social-outer">
    <div class="social-inner">
      <h2 class="widget-title">Subscribe to LaForce's Blog!</h2>
			<p>
				<a href="https://signup.e2ma.net/signup/1819240/1776279/" class="btn-fill-alt fill-alt" target="_blank" rel="noreferrer">Subscribe</a>
			</p>
    </div>
  </div>
</div>
