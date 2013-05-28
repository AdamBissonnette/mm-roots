<div class="page-header">
  <h2 class="section-title">
    <?php echo roots_title(); ?>
  <?php
    $description = get_post_meta(get_the_ID(), "tagline", true);
  ?>  
    <small><?php echo $description; ?></small>
  </h2>
</div>