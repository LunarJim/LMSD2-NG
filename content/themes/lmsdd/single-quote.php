<?php get_header();
$single_quote = get_queried_object();
?>

<div class="main container posts">
  <div class="row mb-4 pb-3">
    <?php

    if (have_posts()): while(have_posts()): the_post(); ?>
    
    <?php get_template_part('template-parts/quotes/quote'); ?>

    
      <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</div>

<?php get_footer();?>