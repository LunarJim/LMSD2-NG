<?php get_header();?>

<div class="main container posts">
  <div class="row mb-4 pb-3">



  <?php

  // classic loop pour author


 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <div class="col-lg-4 col-sm-6 posts__sticker">
      <div class="posts__content bg-warning pl-1 pr-1 pt-1 pb-1 rounded shadow  bg-warning rounded">
      <span class=""><?php the_content(); ?></span>
        
          

          

          <div class=" row ml-3 post__category">

            <?php // affichage des catégories 

            $terms = wp_get_post_terms(get_the_ID(),'categorie');

            if(is_array($terms)): 

            foreach ($terms as $term):  ?>

            <a href="<?=get_term_link($term); ?>"> <button type="button" class="btn btn-secondary mb-1 mr-1 pl-1 pr-1 pt-0 pb-0"><?= $term->name; ?></button></a>

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
          </div>
          <div class="font-italic font-size-small mt-1">Par <?php the_author_posts_link();?></div>
        </div>
      </div>
      <?php endwhile; endif; ?>
  </div>
</div>

<?php get_footer();?>