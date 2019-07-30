<?php

// soumission de quote

function submit_post() {
 
  $current_user = wp_get_current_user();

    //déjà appelé dans le header
 
    if ((isset($_POST['cptContent'])) &&  $current_user->exists())  {

        $cptContent='';

        $cptContent = $_POST['cptContent'];

        $cptContentLenght = strlen($cptContent);

        if ($cptContentLenght > 40) {
        

 
            // create post object with the form values
 
            $user_id = get_current_user_id();
 
            $my_cptpost_args = array(
 
                'post_content' => $_POST['cptContent'],
 
                'post_status' => 'pending',
 
                'post_type' => 'quote',
 
                'post_author' => $user_id,
 
            );
 
            $cpt_id = wp_insert_post($my_cptpost_args);

            if (isset($_POST['publishing-alert']) && ($_POST['publishing-alert']=='on')) {
                update_field('quote_publishing_notification', 1, $cpt_id);
            }

            wp_redirect(get_permalink(150));
            exit;
 
        }

        else {
            $_SESSION['message-submit'] = 'Ta citation me paraît courte! Peux-tu la vérifier ?';
        }
 
    }
 
    elseif ((isset($_POST['cptContent'])) &&  $current_user->exists()==0)  {

    $cptContent='';

    $cptContent = $_POST['cptContent'];

    $cptContentLenght = strlen($cptContent);

        if ($cptContentLenght > 40) {

            $my_cptpost_args = array(
   
            'post_content' => $_POST['cptContent'],
   
            'post_status' => 'pending',
   
            'post_type' => 'quote',
   
            'post_author' => 4,
   
            );
   
            $cpt_id = wp_insert_post($my_cptpost_args);

             update_field('not_connected_user_email', $_POST['email'], $cpt_id);
             update_field('not_connected_user_name', $_POST['author'], $cpt_id);

             if (isset($_POST['publishing-alert']) && ($_POST['publishing-alert']=='on')) {
                update_field('quote_publishing_notification', 1, $cpt_id);
            }

   
            // wp_set_object_terms( $cpt_id, $category_name, 'categorie' );
 
            // update_field(pseudo_not_connected,$_POST['author'],$cpt_id);
 
            wp_redirect(get_permalink(150));
            exit;
        }

        else {
            $_SESSION['message-submit'] = 'Ta citation me paraît courte! Peux-tu la vérifier ?';
        }
 }


}
 
add_action('wp_loaded', 'submit_post');