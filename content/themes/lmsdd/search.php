<?php get_header();?>



<div class="main container posts">

<h2 class="text-center pt-1">

<?php 
$count = $wp_query->found_posts;
$several = ($count<=1) ? '' : 's';

if ($count>0) : $output =  $count.' résultat'.$several.' pour la recherche';
else : $output = 'Aucun résultat trouvé pour la recherche';
endif;

$output .= ' "<span class="terms_search">'. get_search_query() .'</span>"';

echo $output;
?>
</h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 
endwhile; 
else: 
?>

<?php endif; ?>
  <div class="row mb-4 pb-3">



    <?php

    if (have_posts()): while(have_posts()): the_post(); ?>
    

      <?php get_template_part('template-parts/quotes/quote'); ?>
    
      <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</div>

<?php get_footer();?>