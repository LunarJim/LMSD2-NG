<?php get_header();?>

<div class="main container posts">
  <div class="row mb-4 pb-3">

  <?php

  // query des cpt quotes

        $args = [
          'post_type'  => 'quote',
          'posts_per_page' => 6,
        ];

        $quotes = new WP_Query($args);

        if ($quotes->have_posts()) : while ($quotes->have_posts()): $quotes->the_post();
        ?>

        <?php get_template_part('template-parts/quotes/quote'); ?>
          
      
      <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</div>

<?php get_footer();?>