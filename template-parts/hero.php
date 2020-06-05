<?php
  $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  $customHeroTitle = get_field('custom_hero_title');
  $postid = get_the_ID();
  $bodyClass = get_body_class();
  if ( is_home() ) {
    ?>
    <section class="hero" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="hero-overlay">
        <a href="<?php the_permalink(); ?>"><div class="featured-post">Featured</div></a>
        <div class="header-outer-wrap container-wide">
          <div class="header-inner-wrap text-left text-center-l">
            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            <div>
      				<p class="post-data">
      					<span class="post-author"><?php insightCustom_posted_by(); ?></span><br>
      					<span class="post-date">
      						<?php
      						$post_date = get_the_date( 'm/d/Y' );
      						echo $post_date . " ";
      						?>
      					</span>
      					<span class="post-cat">
      					<?php
      					get_template_part("/inc/svg-icons/tags");
      					$categories = get_the_category();
      					$separator = ' | ';
      					$output = '';
      					if ( ! empty( $categories ) ) {
      					    foreach( $categories as $category ) {
      					        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
      					    }
      					    echo trim( $output, $separator );
      					}
      					?>
      				</span>
      				</p>
      			</div>
          </div>
        </div>
      </div>
    </section>
    <?php
  } elseif ( is_search() ) {
    ?>
    <section class="hero" style="background-image: url('/assets/css/wp-content/themes/insightcustom/images/LaForce-Office-Entrance.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="hero-overlay">
        <div class="header-outer-wrap container-wide">
          <div class="header-inner-wrap text-left text-center-l">
            <h1>You Searched
              <?php
                /* translators: %s: search query. */
                printf( esc_html__( ' For: %s ', 'insightcustom' ), '<span>' . get_search_query() . '</span><br>' );
								$allsearch = new WP_Query("s=$s&showposts=0");
								echo $allsearch ->found_posts.' results found';
								?>
            </h1>
          </div>
        </div>
      </div>
    </section>
    <?php
  } elseif( is_archive() ) {
    ?>
    <section class="hero" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="hero-overlay">
        <div class="header-outer-wrap container-wide">
          <div class="header-inner-wrap text-left text-center-l">
            <header class="page-header greyBorder">
              <?php
              the_archive_title( '<h1 class="page-title">', '</h1>' );
              the_archive_description( '<div class="archive-description">', '</div>' );
              ?>
            </header><!-- .page-header -->
            <a href="/blog/"><span class="back-to-blog flex flex-center flex-justify-center"><?php get_template_part("/inc/svg-icons/chevron-left"); ?>Back to all posts</span></a>
          </div>
        </div>
      </div>
    </section>
    <?php
  } elseif( is_category() ) {
    ?>
    <section class="hero" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="hero-overlay">
        <div class="header-outer-wrap container-wide">
          <div class="header-inner-wrap text-left text-center-l">
            <header class="page-header greyBorder">
              <?php
              the_archive_title( '<h1 class="page-title">', '</h1>' );
              the_archive_description( '<div class="archive-description">', '</div>' );
              ?>
            </header><!-- .page-header -->
            <a href="/blog/"><span class="back-to-blog flex flex-center flex-justify-center"><?php get_template_part("/inc/svg-icons/chevron-left"); ?>Back to all posts</span></a>
          </div>
        </div>
      </div>
    </section>
    <?php
  } elseif( $featuredImg ) {
    ?>
    <section class="hero" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="hero-overlay">
        <div class="header-outer-wrap container-wide">
          <div class="header-inner-wrap text-left text-center-l">
            <?php if ($customHeroTitle) {
              ?>
              <h1><?php echo $customHeroTitle ?></h1>
              <?php
            } else {
              ?>
              <h1><?php the_title(); ?></h1>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php
  } elseif ( $postid == '467' ) {
    ?>
    <section class="hero hero-video">
      <video autoplay muted loop class="back-video">
        <source src="/assets/css/wp-content/uploads/2020/03/firedoorloop.mp4" type="video/mp4">
        <source src="/assets/css/wp-content/uploads/2020/03/firedoorloop.webm" type="video/webm">
        <source src="/assets/css/wp-content/uploads/2020/03/firedoorloop.ogv" type="video/ogv">
      </video>
      <div class="video-caption">
        <ul>
          <li><?php get_template_part("/inc/svg-icons/play"); ?>Fire Doors  (4m 55s)</li>
        </ul>
      </div>
    </section>
    <div class="popup-video-container">
      <div class="video-container-inner">
        <?php get_template_part("/inc/svg-icons/close"); ?>
        <div class="aspect-ratio">
          <iframe class="youtube-player" type="text/html" width="700" height="350" src="//www.youtube.com/embed/qunBxV9dabo?rel=0&amp;showinfo=0" frameborder="0"><!-- YouTube Player --></iframe>
        </div>
      </div>
    </div>
    <?php
  } elseif ( $postid == '469' ) {
    ?>
    <section class="hero hero-video">
      <video autoplay muted loop class="back-video">
        <source src="/assets/css/wp-content/uploads/2020/03/pre-install-loop.mp4" type="video/mp4">
        <source src="/assets/css/wp-content/uploads/2020/03/pre-install-loop.webm" type="video/webm">
        <source src="/assets/css/wp-content/uploads/2020/03/pre-install-loop.ogv" type="video/ogv">
      </video>
      <div class="video-caption">
        <ul>
          <li><?php get_template_part("/inc/svg-icons/play"); ?>Pre-Install  (2m 45s)</li>
        </ul>
      </div>
    </section>
    <div class="popup-video-container">
      <div class="video-container-inner">
        <?php get_template_part("/inc/svg-icons/close"); ?>
        <div class="aspect-ratio">
          <iframe class="youtube-player" type="text/html" width="320" height="200" src="//www.youtube.com/embed/2uQ4CJQ5fdk?rel=0&amp;showinfo=0" frameborder="0"><!-- YouTube Player --></iframe>
        </div>
      </div>
    </div>
    <?php
  } elseif ( $postid == '217' || $postid == '1022' || $postid == '1020' ) {
    ?>
    <section class="hero hero-video">
      <video autoplay muted loop class="back-video">
        <source src="/assets/css/wp-content/uploads/2020/04/career-loop.mp4" type="video/mp4">
        <source src="/assets/css/wp-content/uploads/2020/04/career-loop.webm" type="video/webm">
        <source src="/assets/css/wp-content/uploads/2020/04/career-loop.ogv" type="video/ogv">
      </video>
      <div class="video-caption">
        <ul>
          <li><?php get_template_part("/inc/svg-icons/play"); ?>Careers  (2m 34s)</li>
        </ul>
      </div>
    </section>
    <div class="bg-accent text-white text-center">
      <div class="container padding-20">
        <a href="https://www2.appone.com/Search/Search.aspx?ServerVar=laforceinc.appone.com" target="_blank" class="careers-btn careers-fill">View Current Openings</a>
        <span class="screen-reader-text">Opens Job Openings link in a new window</span>
      </div>
    </div>
    <div class="popup-video-container">
      <div class="video-container-inner">
        <?php get_template_part("/inc/svg-icons/close"); ?>
        <div class="aspect-ratio">
          <iframe class="youtube-player" type="text/html" width="320" height="200" src="//www.youtube.com/embed/yS-usgK-0JQ?rel=0&amp;showinfo=0" frameborder="0"><!-- YouTube Player --></iframe>
        </div>
      </div>
    </div>
    <?php
  } else {
    ?>
    <section class="hero" style="background-image: url('/assets/css/wp-content/themes/insightcustom/images/LaForce-Office-Entrance.jpg'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="hero-overlay">
        <div class="header-outer-wrap container-wide">
          <div class="header-inner-wrap text-left text-center-l">
            <?php if( $customHeroTitle ) {
              ?>
              <h1><?php echo $customHeroTitle ?></h1>
              <?php
            } else {
              ?>
              <h1><?php the_title(); ?></h1>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php
  }
?>
