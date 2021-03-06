<div class="bg-grey">
  <div class="nav-links-container container-wide">
    <?php if( is_singular( 'post' ) ) { ?>
    <div class="nav-links">
      <div class="w-25">
        <?php
        $prev_post = get_next_post();
        if ( ! empty( $prev_post ) ): ?>
        <div class="nav-previous">
           <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
             <?php get_template_part( "/inc/svg-icons/chevron-left" ); ?>
             Previous Post
           </a>
        </div>
        <?php endif; ?>
      </div>
      <div class="w-50 nav-back">
        <a href="/blog/" class="back">
          <?php get_template_part( "/inc/svg-icons/grid" ) ?>
          Back to all Posts
        </a>
      </div>
      <div class="w-25">
        <?php
        $next_post = get_previous_post();
        if ( ! empty( $next_post ) ): ?>
        <div class="w-25 nav-next">
           <a href="<?php echo get_permalink( $next_post->ID ); ?>">
             Next Post
             <?php get_template_part( "/inc/svg-icons/chevron-right" ); ?>
           </a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
