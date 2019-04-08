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
          <ul class="navbar-nav ml-5">
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Catégories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <?php $categories = $terms = get_Terms(array(
                  'taxonomy' => 'categorie',
                  'hide_empty' => false,
                ));

                if(is_array($categories)):

                foreach ($categories as $category): ?>

                  <a class="dropdown-item" href="<?php echo get_term_link($category); ?>"><?= $category->name; ?></a>

                <?php endforeach; endif; ?>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-success" href="<?= get_page_link(80);?>">Top 10</a>
                  <a class="dropdown-item text-success" href="<?= get_page_link(72);?>">Random</a>
                  <a class="dropdown-item text-success" href="<?= get_post_type_archive_link( 'quote' ); ?>">je veux tout !</a>
                </div>
              </li>
            </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <a class="btn btn-primary btn-submit mr-5" href="<?= get_page_link(70); ?>" role="button"><span class="">Ta vision du monde ici !</span></a>
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

            <a href="<?= get_page_link(11); ?>"> <button type="button" class="btn btn-warning ">Connexion/inscription</button></a>

            <?php endif; ?>
          </div>
        </nav>
    
    
  </header>