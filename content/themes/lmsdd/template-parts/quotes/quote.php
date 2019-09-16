<div class="col-lg-4 col-sm-6 posts__sticker">
    <div class="posts__content pl-1 pr-1 pt-1 pb-1 
    rounded 
    shadow rounded 
    font-weight-bold 
    text-uppercase">
        <div class="quote">
            <?php the_content(); ?>
        </div>
        <div class="post__category">

            <?php // affichage des catégories 
                $terms = wp_get_post_terms(get_the_ID(),'categorie');
                if(is_array($terms)): 
                foreach ($terms as $term):  ?>

                <a href="<?=get_term_link($term); ?>">
                    <button type="button" class="btn btn-secondary
                     mb-1 mr-1 pl-1 pr-1 pt-0 pb-0">
                        <?= $term->name; ?>
                    </button>
                </a>

            <?php endforeach; endif; ?>
        </div>
        <div class="vot_mp2" data-vote_id="<?php the_ID();?>">
        <button type="button" class="btn btn-danger">
            <i class="fas fa-heart-broken">
            </i> 
            <span class="badge badge-danger score-area count-down" id="down">
            </span>
        </button>
        <button type="button" class="btn btn-success">
            <i class="fas fa-heart">
            </i>
            <span class="badge badge-success score-area count-up" id="up">
            </span>
        </button>
        <button type="button" class="btn btn-light ml-2">
            <i class="fas fa-temperature-high">
            </i> <span class="badge badge-warning score-area count-total" id="total">
            </span>
        </button>
        </div>
        <div>
            <?php  get_favorites_button(get_the_ID()); ?>
        </div>
        <div class="font-italic text-lowercase pt-2 author">
            <?php the_author_posts_link();?>
        </div>
    </div> 
</div>