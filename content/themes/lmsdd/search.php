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
    


    <div class="col-lg-4 col-sm-6 posts__sticker">
      <div class="posts__content bg-warning pl-1 pr-1 pt-1 pb-1 rounded shadow  bg-warning rounded">
        <?php the_content(); ?>
          <hr>

          

          <div class=" row ml-3 post__category">

            <?php // affichage des catégories 

            $terms = wp_get_post_terms(get_the_ID(),'categorie');

            if(is_array($terms)): 

            foreach ($terms as $term):  ?>

            <a href="<?=get_term_link($term); ?>"> <button type="button" class=" pt-0 pb-0 btn btn-secondary mb-1 mr-1 pl-1 pr-1"><?= $term->name; ?></button></a>

            <?php endforeach; endif; ?>
            
          </div>

          
          <div class="container">
            <button type="button" class="btn btn-primary">
            <i class="fas fa-heart"></i> <span class="badge badge-success">4</span>
            </button>
            <button type="button" class="btn btn-primary">
              <i class="fas fa-heart-broken"></i> <span class="badge badge-danger">4</span>
            </button>
            <button type="button" class="btn btn-primary">
              <i class="fas fa-temperature-high"></i> <span class="badge badge-danger">4</span>
            </button>
              <a class="ml-3" href=""><i class="fas fa-share-alt share"></i></a>
            </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</div>

<?php get_footer();?>