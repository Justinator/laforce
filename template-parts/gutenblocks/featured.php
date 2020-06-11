<div class="featured-project bg-grey padding-top-25 padding-bottom-50">
  <div class="container-wide"><h4><?php echo get_field( "project_title" ); ?></h4></div>
  <div class="featured-project-wrap" style="background-image: url('<?php echo get_field( 'background_image' ); ?>');background-repeat: no-repeat; background-size:cover;">
    <div class="container-wide">
      <div class="featured-project-content w-100 w-50-l lane">
        <div class="featured-project-inner">
          <h4 class="g5"><?php echo get_field( "project_subtitle" ); ?></h4>
          <p><?php echo get_field( "project_description" ); ?></p>
          <p>
            <a href="<?php echo get_field( "project_link" ); ?>" class="btn-fill-alt fill-alt" aria-label="<?php echo get_field("project_link_text"); ?>: <?php echo get_field("project_title"); ?>">
            <?php echo get_field("project_link_text"); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
