<?php
/*
Template Name: mon-compte
Template Post Type: page
 */?>

<?php get_header();?>


<div class="container main">
    <div class="col-sm-12 pb-3">
        <form action="" method="post">
            <p>
                Choisir ma couleur de fond :
            </p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="color-blue" name="color" 
                    value="background-color:aqua;" class="custom-control-input">
                    <label class="custom-control-label" for="color-blue">
                        Bleu magique
                    </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="color-red" name="color" 
                    value="background-color:red;" class="custom-control-input">
                    <label class="custom-control-label" for="color-red">
                        Rouge pompier
                    </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="color-yellow" name="color" 
                    value="background-color:yellow;" class="custom-control-input">
                    <label class="custom-control-label" for="color-yellow">
                        Jaune violent
                    </label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="color-gradient" name="color" 
                    value="background-image:radial-gradient(circle at top right,#C7CDEA,#DFDFDF); " class="custom-control-input">
                    <label class="custom-control-label" for="color-gradient">
                        Défaut : magnifique dégradé
                    </label>
                </div>
                <button type="submit" name="color-submit" 
                class="btn btn-primary mt-2">
                Enregistrer la couleur
            </button>
        </form>
    </div>

        <div class="col-sm-12 pb-3">
            <form action="" method="post">
                <p>
                    Choisir mon curseur :
                </p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="cursor-finger" name="cursor" value="cursor1.css" class="custom-control-input">
                    <label class="custom-control-label" for="cursor-finger">Doigt magique</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="cursor-sniper" name="cursor" value="cursor2.css" class="custom-control-input">
                    <label class="custom-control-label" for="cursor-sniper">Sniper</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="cursor-default" name="cursor" value="cursor-classic.css" class="custom-control-input">
                    <label class="custom-control-label" for="ccursor-default">Défaut : curseur</label>
                </div>
                <button type="submit" name="cursor-submit" class="btn btn-primary mt-2">Enregistrer mon curseur</button>
            </form>
        </div>
        <div class="col-sm-12 bg-white pt-3 pb-3 mt-2 text-center ">
            <a class="" href="<?=wp_lostpassword_url();?>">
                mot de passe oublié ?
            </a>
        </div>
    </div>
</div>


<?php get_footer();?>