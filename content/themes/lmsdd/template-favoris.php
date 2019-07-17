<?php
/*
Template Name: favoris
Template Post Type: page
*/ ?>

<?php get_header();?>

<?php $user_favorites = get_user_favorites(get_current_user_id()); 
    
     /*foreach ($user_favorites as $key => $quoteId) {
        $selectedQuoteIds=array();
        $selectedQuoteIds($quoteId);
        }
        */

        $args = [
            'post_type'  => 'quote',
            'post__in'  => $user_favorites,
            'posts_per_page' => -1
          ];

    
?>

<div class="main container posts">
  <div class="row mb-4 pb-3">

  <?php

  // query des cpt quotes

        

        $quotes = new WP_Query($args);

        if ($quotes->have_posts()) : while ($quotes->have_posts()): $quotes->the_post();
        ?>

        <?php get_template_part('template-parts/quotes/quote'); ?>
          
      
      <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</div>



<?php get_footer();?>