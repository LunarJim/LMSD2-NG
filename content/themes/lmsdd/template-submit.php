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
                <h4 class="text-center text-white">
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
        
          <form>
              <div class="form-group">
                <label for="email" class="text-white">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="Pseudo" class="text-white">Pseudo</label>
                <input type="text" class="form-control" id="" placeholder="Pseudo" name="author" required>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="text-white">Ta citation (doit commencer par "ceux qui" ou "celles qui")</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cptContent" required></textarea>
                </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="Check_publish">
                <label class="form-check-label text-white font-italic" for="exampleCheck1" class="text-white">M'avertir lors de la publication !</label>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Go !</button>
            </form>
      </div>
    </div>
  </div>

<?php get_footer(); ?>