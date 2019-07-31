<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Le Monde se divise en 2</title>
  <link href="https://fonts.googleapis.com/css?family=Pangolin|Permanent+Marker|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  
  
<?php wp_head(); ?>

<?php

  get_user_cursor_type(); ?>
</head>


<body <?php get_user_background_color(); ?>>
  <header class="container-fluid p-0 fixed-top shadow">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand logo" href="<?= get_home_url() ?>">
            <h1 class="logo mb-0">
              <span class="logo__name mb-0">LMSD</span><i class="fas fa-hand-spock"></i>
            </h1>
            <p class="font-italic logo__slogan">Le monde se divise en 2</p>
          </a>
          

          <!-- toggle button -->

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- collapse navbar -->

          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

          <!-- dropdown categories -->

            <div class="dropdown mr-3">
                <button class="btn btn btn-outline-dark dropdown-toggle font-weight-bold" type="button" id="categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Catégories
                </button>
                <div class="dropdown-menu" aria-labelledby="categories">
                  <?php if(is_user_logged_in()):?>
                <a href="<?= get_page_link(88);?>">
                      <button class="dropdown-item text-success font-weight-bold">Favoris
                      </button>
                    </a>
                  <?php endif; ?>

                  <a href="<?= get_page_link(80);?>">
                      <button class="dropdown-item text-success font-weight-bold">Top 10
                      </button>
                    </a>
                    <a href="<?= get_page_link(72);?>">
                      <button class="dropdown-item text-success">Random
                      </button>
                    </a>
                    <a href="<?= get_post_type_archive_link( 'quote' ); ?>">
                      <button class="dropdown-item text-success">Tout voir
                      </button>
                    </a>

                    <div class="dropdown-divider"></div>

                  <?php $categories = $terms = get_Terms(array(
                  'taxonomy' => 'categorie',
                  'hide_empty' => false,
                  ));


                  if(is_array($categories)):

                  foreach ($categories as $category): ?>

                  <a href="<?php echo get_term_link($category); ?>">
                    <button class="dropdown-item"><?= $category->name; ?><?=" ($category->count)" ?>
                    </button>
                  </a> 

                    <?php endforeach; endif; ?>

                  </div>
              
            </div>

            

            <!-- submit button -->

            <span>
              <a class="btn btn btn-outline-dark btn-submit mr-5 font-weight-bold" href="<?= get_page_link(70); ?>" role="button"><span class="">Ta citation</span>
              </a>
            </span>

          <!-- search field -->


            <form class="form-inline my-2 my-lg-0 mr-5" method="get">
              <input class="form-control mr-sm-2 d-none d-sm-block" value="<?php the_search_query(); ?>" type="search" placeholder="Rechercher" aria-label="Search" name="s">
            </form>

            <!-- bouton de connexion/inscription qui est modifié si user connecté -->

            <?php if(is_user_logged_in()):?>
            <?php $current_user = wp_get_current_user(); ?>
            
            <div class="dropdown">
              <button class="btn btn btn-outline-dark dropdown-toggle font-weight-bold" type="button" id="dropdownMenu2"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hello <?= $current_user->nickname ?> !
              </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a href="<?= get_page_link(81);?>">
                    <button class="dropdown-item" type="button">
                      Mon compte
                    </button>
                  </a>
                  <a href="<?= wp_logout_url(get_home_url());?>"> 
                    <button class="dropdown-item" type="button">
                      Déconnexion
                    </button>
                  </a>
                </div>
            </div>
            <?php else: ?>

            <a href="<?= get_page_link(11); ?>"> <button type="button" class="btn btn-warning mr-5">Connexion/inscription</button></a>

            <?php endif; ?>
          </div>
        </nav>
    
    
  </header>