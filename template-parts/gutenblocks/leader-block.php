<?php
  $leaderImage = get_field('leader_image');
  $name = get_field('leader_name');
  $desc = get_field('leader_short_description');
  $url = get_field('leader_page_url');
?>

<figure class="fig" style="background-image: url('<?php echo $leaderImage ?>');">
  <figcaption class="figcaption">
    <h3><?php echo $name; ?></h3>
    <a href="<?php echo $url; ?>" aria-label="Read More: about <?php echo $name; ?>">
      <div class="fig-more">
        <div class="fig-more-inner">
          <p><span class="btn-fill fill">Read More</span></p>
        </div>
      </div>
    </a>
  </figcaption>
</figure>
