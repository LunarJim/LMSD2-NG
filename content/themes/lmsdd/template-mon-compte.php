<?php
/*
Template Name: mon-compte
Template Post Type: page
 */?>

<?php get_header();?>


<div class="container main posts">
    <div class="row align-items-center profile ">
        <div class="col-sm-12 bg-white pt-3 pb-3 ">
            <a class="" href="<?=wp_lostpassword_url();?>">mot de passe oublié ?
            </a>
        </div>

        <div class="col-sm-12 bg-white pt-3 pb-3">
            <form action="">
            <p>Choisir ma couleur de fond :</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                Bleu
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                Jaune
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                Rouge
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                Dégradé du plus bel effet (défaut)
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Enregistrer la couleur</button>
            </form>
        </div>
        <div class="col-sm-12 bg-white pt-3 pb-3">
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
    </div>
</div>


<?php get_footer();?>