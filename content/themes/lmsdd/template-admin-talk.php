<?php
/*
Template Name: Admin
Template Post Type: page
*/ ?>

<?php get_header();?>


<div class="main-contact main container mb-4 pb-4">
    <h4 class="text-center">
        > Quick access 
    </h4> 
    <div class="row">
   
        <?php
        // query des cpt quotes
        $args = [
                'post_type'  => 'quote',
                'posts_per_page' => -1,
                ];

        $quotes = new WP_Query($args);

        if ($quotes->have_posts()) : while ($quotes->have_posts()): $quotes->the_post();
        ?>

        <div class="col-12 posts__sticker__admin mb-2" data-quoteContainerId="<?php the_ID();?>">
            <div class="posts__content
                rounded 
                shadow rounded 
                font-weight-bold 
                text-uppercase">
                    <div class="quote text-center">
                        <?php the_content(); ?>
                        <button type="button" class="btn btn-danger mb-2 delete-btn" data-quoteId="<?php the_ID();?>">Supprimer</button>
                    </div>
            </div>
        </div> 
    

    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>

    

<script src="<?=get_theme_file_uri('admin.js')?>"></script>
  <?php get_footer() ?>