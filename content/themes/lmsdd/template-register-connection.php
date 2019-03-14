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

        <div class="alert alert-danger" id="errors" role="alert">
          
        </div id=login>
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
      </div>

      <!-- Formulaire d'inscription -->

      <div class="col-md-6 register-form">
        <h4 class="mb-4">Pas encore de compte ?</h4>
        <div class="alert alert-danger" id="errors" role="alert">
          messages d'erreur ici
        </div>
          <form>
              <div class="form-group">
                  <label for="pseudo">Pseudo</label>
                  <input type="text" class="form-control" id="pseudo_no_account" aria-describedby="pseudoHelp" placeholder="Pseudo" name="pseudo_no_account">
                </div>
              <div class="form-group">
                <label for="email_no_account">Email</label>
                <input type="email" class="form-control" id="email_no_account" aria-describedby="emailHelp" placeholder="Email" name="email_no_account">
                
              </div>
              <div class="form-group">
                <label for="inputPassword_no_account">Mot de passe</label>
                <input type="password" class="form-control" id="InputPassword_no_account" placeholder="Mot de passe" name="InputPassword_no_account">
                <small id="emailHelp" class="form-text text-muted">Votre mot de passe doit contenir au moins 6 caractères</small>
              </div>
              <div class="form-group">
                  <label for="inputPassword2_no_account">Mot de passe (vérification)</label>
                  <input type="password" class="form-control" id="InputPassword2_no_account" placeholder="Mot de passe" name="InputPassword2_no_account">
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

<?php get_footer(); ?>


