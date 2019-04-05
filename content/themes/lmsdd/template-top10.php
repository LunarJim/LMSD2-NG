<?php
/*
Template Name: top10
Template Post Type: page
*/ ?>

<?php get_header();?>

<?php

global $wpdb;

$results = $wpdb->get_results( "SELECT id, (v_plus - v_minus) AS score FROM votitems ORDER BY score DESC LIMIT 10", OBJECT );

?>

<div class="main container posts">
  <div class="row mb-4 pb-3">



  <?php foreach ($results as $key => $value) : ?>




    <div class="col-lg-4 col-sm-6 posts__sticker">
    
      <div class="posts__content bg-warning pl-1 pr-1 pt-1 pb-1 rounded shadow  bg-warning rounded">

      <?php $content = get_post_field('post_content', $value->id)  ?>
      <?php $author = get_post_field('post_author', $value->id) ?>

      <span class=""><?= $content; ?></span>

          <div class=" row ml-3 post__category">

            <?php // affichage des catégories 

            $terms = wp_get_post_terms($value->id,'categorie');

            if(is_array($terms)): 

            foreach ($terms as $term):  ?>

            <a href="<?=get_term_link($term); ?>"> <button type="button" class="btn btn-secondary mb-1 mr-1 pl-1 pr-1 pt-0 pb-0"><?= $term->name; ?></button></a>

            <?php endforeach; endif; ?>

          </div>
          

          
          <!-- container original statique des votes

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

          -->

          <div class="vot_mp2" data-vote_id="<?= $value->id ?>"></div>
          <div class="font-italic font-size-small mt-1">Par <a href="<?= get_author_posts_url($author); ?>"><?= get_the_author_meta('nickname',$author);?></a> </div>
        </div>
        
      </div>
      
            <?php endforeach; ?>
  </div>
</div>

<?php get_footer();?>