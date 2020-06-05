<!--
  Create related projects
  -->
<section id="featuredProjects" class="related padding-top-25 padding-bottom-25">
  <?php
  $relatedPost = get_field('related_posts');
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  if( $relatedPost ): ?>
  <div>
    <div class="container-wide text-center">
      <h5>Related Posts</h3>
    </div>
    <div class="flex-container container-wide">
      <?php foreach( $relatedPost as $related) { ?>
      <div class="col">
        <figure class="fig" style="background: url('<?php echo get_the_post_thumbnail_url($related); ?>') no-repeat; background-size: cover; background-position:center;">
          <figcaption class="figcaption">
            <h3><?php echo get_the_title($related); ?></h3>
            <a href="<?php echo get_the_permalink($related); ?>">
              <div class="fig-more">
                <div class="fig-more-inner">
                  <p><?php echo get_the_excerpt($related); ?></p>
                  <p><span class="btn-fill fill">Read More</span></p><span class="screen-reader-text"> about <?php echo get_the_title($related); ?></span>
                </div>
              </div>
            </a>
          </figcaption>
        </figure>
      </div>
    <?php } ?>
    </div>
    <?php else:
      $the_query = new WP_Query( array(
        'post_type' => 'Post',
        'order' => 'DESC',
        'posts_per_page' => 3,
        )
      );?>
      <div class="container-wide text-center">
        <h5>Recent Posts</h3>
      </div>
      <div class="flex-container container-wide">
        <?php
          while ( $the_query->have_posts() ) :
          $the_query->the_post();
        ?>
        <div class="col">
          <figure class="fig" style="background: url('<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>') no-repeat; background-size: cover; background-position:center;">
            <figcaption class="figcaption">
              <h3><?php echo get_the_title(); ?></h3>
              <a href="<?php echo get_permalink(); ?>">
                <div class="fig-more">
                  <div class="fig-more-inner">
                    <p><?php echo get_the_excerpt(); ?></p>
                    <p><span class="btn-fill fill">Read More</span></p><span class="screen-reader-text"> about <?php echo get_the_title(); ?></span>
                  </div>
                </div>
              </a>
            </figcaption>
          </figure>
        </div>
      <?php endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<?php endif; ?>
