<?php
/*
Template Name: submit
Template Post Type: page
 */
?>

<?php get_header(); ?>
   

  <div class="main-contact container">
    <div class="row">
      <div class="col-md-6 submit-post mx-auto">
        
            <p>
                <h4 class="text-center">
                  A toi de jouer : 
                </h4> 

                <!-- mode d'emploi avant publication -->

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  mode d'emploi ici
                </button>
            </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Les citations sont toutes modérées : tâchons de rester poli ! Du fait de la modération, les citations ne sont pas publiées dès soumission mais sous 48 heures</li>
                    <li class="list-group-item">La publication est possible sans être connecté en tant que membre. Cependant, nous vous recommandons de <a href="<?= get_page_link(11); ?>">créer un compte</a>  afin de pouvoir retrouver vos propres citations et de disposer de tous nos services perso miam miam !</li>
                    <li class="list-group-item">Votre citation ne doit pas dépasser 120 caractères et si possible ne pas comporter de fautes (go Bescherelle)</li>
                  </ul>
                </div>
              </div>

          <!-- formulaire de soumission de citation -->
        
          <form action="" method="post" id="submit-form">
          <div class="" id="errors-submit" role="alert"></div>
              <div class="form-group">
                <label for="email" class="">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" value="<?php echo $current_user->user_email ?>" required>
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="Pseudo" class="">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="author" value="<?php echo $current_user->user_login ?>" required>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="">Ta citation (doit commencer par "ceux qui" ou "celles qui")</label>
                  <textarea class="form-control field-input" id="cptContent" rows="3" name="cptContent" required></textarea>
                </div>
              <button type="submit" class="btn btn-primary mb-2">Go !</button>
            </form>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

<script src="<?= get_theme_file_uri('submit.js')?>"></script>

<script>
<?php

// Si j'ai un message à afficher...
if (!empty($_SESSION['message-submit'])) {

    // Alors je l'affiche
    echo 'app.errorsMsg.push("'.$_SESSION['message-submit'].'");';

    // PUIS, comme il vient d'être affiché, je le supprime
    $_SESSION['message'] = [];

    // ... ainsi mon message ne sera plus affiché
}

?>

// script js création de compte 

</script>