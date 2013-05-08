<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  <div class="post-header">
	  <h2 class="section-title">
		<?php echo the_title(); ?>
		<small><?php the_excerpt(); ?></small>
	  </h2>
	</div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <div class="post-footer">
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </div>
  </article>
<?php endwhile; ?>
