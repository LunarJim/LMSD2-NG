<?php
/*
Template Name: connection
Template Post Type: page
*/ ?>



<?php get_header(); ?>

  <div class="main-contact container">
    <div class="row">
      <div class="col-md-6 sign-in-form border-right">
        <h4 class="mb-4">Déjà un compte ?</h4>

        <!-- affichage des messages d'erreur -->

        <div class="" id="errors" role="alert">
          
        </div id="login">
          <form action="" method="post" id="login-form">
              <div class="form-group field">
                <label for="login_has_account">login</label>
                <input type="text" class="form-control field-input" id="field-username" name="User_name" aria-describedby="" placeholder="login" required>
              </div>
              <div class="form-group field">
              <span id="reveal">👁</span>
                <label for="InputPassword_has_account">Mot de passe</label>
                <input type="password" class="form-control field-input" id="field-password" name="InputPassword_has_account" placeholder="mot de passe" required>
              </div>

                <!--checkbox -->

              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkBox_has_account">
                <label class="form-check-label" for="checkBox_has_account">Se souvenir de moi</label>
              </div>
              <button type="submit" id="login-submit" class="btn btn-primary">Connexion</button>
            </form>
            <br>
            <div><a href="">mot de passe oublié ?</a></div>
      </div>

      <!-- Formulaire d'inscription -->

      <div class="col-md-6 register-form">
        <h4 class="mb-4">Pas encore de compte ?</h4>
        <div class="" id="errors-na" role="alert">
          
        </div>
          <form action="" method="post" id="register-form">
              <div class="form-group">
                  <label for="pseudo">Pseudo</label>
                  <input type="text" class="form-control field-input-na" id="pseudo_no_account" aria-describedby="pseudoHelp" placeholder="Pseudo" name="pseudo_no_account" required>
                </div>
              <div class="form-group">
                <label for="email_no_account">Email</label>
                <input type="email" class="form-control field-input-na" id="email_no_account" aria-describedby="emailHelp" placeholder="Email" name="email_no_account" required>
                
              </div>
              <div class="form-group">
                <label for="password_no_account">Mot de passe</label>
                <input type="password" class="form-control field-input-na" id="password_no_account" placeholder="Mot de passe" name="password_no_account" required>
                <small id="emailHelp" class="form-text text-muted">Votre mot de passe doit contenir au moins 6 caractères</small>
              </div>
              <div class="form-group">
                  <label for="password2_no_account">Mot de passe (vérification)</label>
                  <input type="password" class="form-control field-input-na" id="password2_no_account" placeholder="Mot de passe" name="password2_no_account" required>
                </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
              </div>
              <button type="submit" class="btn btn-primary">Créer un compte</button>
            </form>

        </div>

    </div>

  </div>

<script src="<?= get_theme_file_uri('connect.js')?>"></script>

<script>
<?php

// Si j'ai un message à afficher...
if (!empty($_SESSION['message'])) {

    // Alors je l'affiche
    echo 'app.errorsMsg.push("'.$_SESSION['message'].'");';

    // PUIS, comme il vient d'être affiché, je le supprime
    $_SESSION['message'] = [];

    // ... ainsi mon message ne sera plus affiché
}

?>

// script js création de compte 

</script>

<script src="<?= get_theme_file_uri('connect_user.js')?>"></script>

<script>
<?php

// Si j'ai un message à afficher...
if (!empty($_SESSION['msg'])) {

    // Alors je l'affiche
    echo 'appRegister.errorsMsgNa.push("'.$_SESSION['msg'].'");';

    // PUIS, comme il vient d'être affiché, je le supprime
    $_SESSION['msg'] = [];

    // ... ainsi mon message ne sera plus affiché
}

?>
</script>

<?php get_footer(); ?>


