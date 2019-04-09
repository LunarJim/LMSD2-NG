<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Le Monde se divise en 2</title>
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
  <header class="container-fluid p-0 fixed-top">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand mr-5 logo" href="<?= get_home_url() ?>">
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

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

          <!-- dropdown categories -->

            <div class="dropdown mr-5">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Catégories
                </button>
                <div class="dropdown-menu" aria-labelledby="categories">

                  <?php $categories = $terms = get_Terms(array(
                  'taxonomy' => 'categorie',
                  'hide_empty' => false,
                  ));

                  if(is_array($categories)):

                  foreach ($categories as $category): ?>

                  <a href="<?php echo get_term_link($category); ?>">
                    <button class="dropdown-item"><?= $category->name; ?>
                    </button>
                  </a> 

                    <?php endforeach; endif; ?>

                  <div class="dropdown-divider"></div>
                    <a href="<?= get_page_link(80);?>">
                      <button class="dropdown-item text-success">Top 10
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
                  </div>
              
            </div>

            <!-- submit button -->

            <a class="btn btn-primary btn-submit mr-5" href="<?= get_page_link(70); ?>" role="button"><span class="">Ta vision du monde ici !</span>
            </a>

          <!-- search field -->


            <form class="form-inline my-2 my-lg-0 mr-5" method="get">
              <input class="form-control mr-sm-2 d-none d-sm-block" value="<?php the_search_query(); ?>" type="search" placeholder="Rechercher" aria-label="Search" name="s">
            </form>

            <!-- bouton de connexion/inscription qui est modifié si user connecté -->

            <?php if(is_user_logged_in()):?>
            <?php $current_user = wp_get_current_user(); ?>
            
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle mr-5" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hello <?= $current_user->user_nicename ?> !
              </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a href="<?= get_page_link(81);?>"> <button class="dropdown-item" type="button">Mon compte</button></a>
                  <a href="<?= wp_logout_url(get_home_url());?>"> <button class="dropdown-item" type="button">Déconnexion</button></a>
                </div>
            </div>
            <?php else: ?>

            <a href="<?= get_page_link(11); ?>"> <button type="button" class="btn btn-warning mr-5">Connexion/inscription</button></a>

            <?php endif; ?>
          </div>
        </nav>
    
    
  </header>