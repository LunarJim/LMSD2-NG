<?php get_header();?>

<div class="main container posts">
  <div class="row mb-4 pb-3">



  <?php

  // query des cpt quotes

  $args = [
    'post_type'  => 'quote',
    'posts_per_page' => 9,
  ];

  $quotes = new WP_Query($args);

  if ($quotes->have_posts()) : while ($quotes->have_posts()): $quotes->the_post();
  ?>


    <div class="col-lg-4 col-sm-6 posts__sticker">
      <div class="posts__content bg-warning pl-1 pr-1 pt-1 pb-1 rounded shadow  bg-warning rounded">
        <?php the_content(); ?>
          <hr>
          <div class=" row ml-3 post-rate">
            <a href=""> <button type="button" class="btn btn-secondary mb-1 mr-1 pl-1 pr-1">Classique</button></a>
            <a href=""><button type="button" class="btn btn-secondary mb-1 pl-1 pr-1">Humour</button></a>
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