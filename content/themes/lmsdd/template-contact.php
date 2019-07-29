<?php
/*
Template Name: contact
Template Post Type: page
*/ ?>


<?php get_header();?>

  <div class="main-contact main container">
    <div class="row">
      <div class="col-md-6 submit-post mx-auto mt-4">
        
            <p>
                <h4 class="text-center">
                  Une suggestion ? Merci d'avance ! 
                </h4> 
            </p>
            <div class="alert alert-danger d-none" role="alert">
                
            </div>
          <form action="" method="post">
              <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email" name="contact_email" required>
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Votre message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="contact_message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
      </div>
    </div>
  </div>

  <?php 
  

  if(isset($_POST["contact_message"]) && ($_POST["contact_email"])) 
  {
      $contact_content = $_POST["contact_message"];
      $my_mail='jim.deghaye@gmail.com';
      $headers = array('Content-Type: text/html; charset=UTF-8');
      $wp_mail_result = wp_mail($my_mail, 'nouveau message du formulaire de contact',$contact_content,$headers);

      $thksPage = 'http://localhost/LMSD2-NG/content/themes/lmsdd/template-merci.php';

      wp_redirect($thksPage);
  
  }
    
    ?>

  
  

  <?php get_footer() ?>