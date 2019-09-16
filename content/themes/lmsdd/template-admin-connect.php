<?php
/*
Template Name: admin-connect
Template Post Type: page


 */

 get_header();?>

<div class="main-contact main container">

          <form action="" method="post" id="login-form">
              <div class="form-group field">
                <label for="login_has_account">login</label>
                <input type="text" class="form-control field-input" id="field-username" name="userName_api" aria-describedby="" placeholder="login" required>
              </div>
              <div class="form-group field">
                <label for="InputPassword_has_account">Mot de passe</label>
                <input type="password" class="form-control field-input" id="field-password" name="passwordHasAccount_api" placeholder="mot de passe" required>
              </div>

                <!--checkbox -->

              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkBox_has_account" name="rememberMeHasAccount" value="rememberMeHasAccount">
                <label class="form-check-label" for="checkBox_has_account">Se souvenir de moi</label>
              </div>
              <button type="submit" id="login-submit" class="btn btn-primary">Connexion</button>
              <?php wp_nonce_field( 'login_nonce_action_api', 'login_nonce_field_api' ); ?>
        </form>
            <br>
            <div>
                <a href="<?=wp_lostpassword_url();?>">
                    mot de passe oublié ?
                </a>
            </div>
            <div class="text-center">
                <span><h1 class="text-monospace">>> Admin access only</h1></span>
            </div>
      </div>







</div>
 <?php get_footer() ?>