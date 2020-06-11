<?php
  $backgroundImage = get_field( 'project_featured_image' );
  $title = get_field( 'project_title' );
  $url = get_field( 'project_url' );
?>

<figure class="fig" style="background-image: url('<?php echo $backgroundImage ?>');">
  <figcaption class="figcaption">
    <h3><?php echo $title; ?></h3>
    <a href="<?php echo $url; ?>" aria-label="Read More: <?php echo $title; ?>">
      <div class="fig-more">
        <div class="fig-more-inner">
          <p><span class="btn-fill fill">Read More</span></p>
        </div>
      </div>
    </a>
  </figcaption>
</figure>
