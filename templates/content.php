<article <?php post_class(); ?>>
  <div class="post-header">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <div class="post-footer">
    <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
  </div>
</article>
