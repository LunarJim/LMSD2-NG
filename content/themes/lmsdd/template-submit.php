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
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  mode d'emploi ici
                </button>
            </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
              </div>
        
          <form>
              <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Pseudo</label>
                <input type="text" class="form-control" id="" placeholder="pseudo">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Ta citation</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">M'avertir lors de la publication !</label>
              </div>
              <button type="submit" class="btn btn-primary">Go !</button>
            </form>
      </div>
    </div>
  </div>

<?php get_footer(); ?>