<?php
/*
Template Name: mon-compte
Template Post Type: page
 */?>

<?php get_header();?>


<div class="container main posts">
    <div class="row align-items-center profile ">
        

        <div class="col-sm-12 pt-3 pb-3">
            <form action="" method="post">
                <p>Choisir ma couleur de fond :</p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="color" value="background-color:aqua;" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Bleu magique</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="color" value="background-color:red;" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Rouge pompier</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" name="color" value="background-color:yellow;" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio3">Jaune violent</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio4" name="color" value="background-image:
                    radial-gradient(circle at top right,#C7CDEA,#DFDFDF); " class="custom-control-input">
                    <label class="custom-control-label" for="customRadio4">défaut : magnifique dégradé</label>
                </div>
                <button type="submit" name="color-submit" class="btn btn-primary mt-2">Enregistrer la couleur</button>
            </form>
        </div>

        <div class="col-sm-12  pt-3 pb-3">
        <form action="">
            <p>M'abonner à la newsletter ?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                Oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                Non
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Valider mon choix</button>
            </form>
            
        </div>
        <div class="col-sm-12 bg-white pt-3 pb-3 ">
            <a class="" href="<?=wp_lostpassword_url();?>">mot de passe oublié ?
            </a>
        </div>
    </div>
</div>


<?php get_footer();?>