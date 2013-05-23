<form role="search" method="get" id="searchform" class="form-search" action="<?php echo home_url('/'); ?>">
  <label class="hide" for="s"><?php _e('Search for:', 'roots'); ?></label>
  <span class="add-on"><i class="icon-search"></i></span>
  <input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s" class="search-query" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
</form>