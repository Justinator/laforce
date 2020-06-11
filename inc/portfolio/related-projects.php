<!--
  Create related projects
  -->
<section id="featuredProjects" class="related padding-top-25 padding-bottom-25">
  <?php
  $relatedProjects = get_field( 'related_projects' );
  if( $relatedProjects ): ?>
  <div>
    <div class="container-wide text-center">
      <h5>Related Projects</h3>
    </div>
    <div class="flex-container container-wide">
      <?php foreach( $relatedProjects as $projects ) { ?>
      <div class="col">
        <figure class="fig" style="background: url('<?php echo get_the_post_thumbnail_url( $projects ); ?>') no-repeat; background-size: cover; background-position:center;">
          <figcaption class="figcaption">
            <h3><?php echo get_the_title( $projects ); ?></h3>
            <a href="<?php echo get_the_permalink( $projects ); ?>">
              <div class="fig-more">
                <div class="fig-more-inner">
                  <p><?php echo get_the_excerpt( $projects ); ?></p>
                  <p><span class="btn-fill fill">Read More</span></p><span class="screen-reader-text"> about <?php echo get_the_title( $projects ); ?></span>
                </div>
              </div>
            </a>
          </figcaption>
        </figure>
      </div>
    <?php } ?>
    <?php else:
      $the_query = new WP_Query( array(
        'post_type' => 'Portfolio',
        'order' => 'DESC',
        'posts_per_page' => 3,
        )
      );?>
      <div class="container-wide text-center">
        <h5>Recent Projects</h3>
      </div>
      <div class="flex-container container-wide">
        <?php
          while ( $the_query->have_posts() ) :
          $the_query->the_post();
        ?>
        <div class="col">
          <figure class="fig" style="background: url('<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>') no-repeat; background-size: cover; background-position:center;">
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
