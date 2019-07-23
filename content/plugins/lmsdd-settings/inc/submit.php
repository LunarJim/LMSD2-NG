<?php

// soumission de quote

function submit_post() {
 
  $current_user = wp_get_current_user();
 //déjà appelé dans le header
 
 if ((isset($_POST['cptContent'])) &&  $current_user->exists())  {
 
 // create post object with the form values
 
     $user_id = get_current_user_id();
 
     $my_cptpost_args = array(
 
         'post_content' => $_POST['cptContent'],
 
         'post_status' => 'pending',
 
         'post_type' => 'quote',
 
         'post_author' => $user_id,
 
     );
 
     // $category_name = ($_POST["categorie"]);
 
      $cpt_id = wp_insert_post($my_cptpost_args);

      wp_redirect(get_home_url()); exit;
 
     // wp_set_object_terms( $cpt_id, $category_name, 'categorie' );
 
 }
 
 elseif ((isset($_POST['cptContent'])) &&  $current_user->exists()==0)  {
 
   
       $my_cptpost_args = array(
   
           'post_content' => $_POST['cptContent'],
   
           'post_status' => 'pending',
   
           'post_type' => 'quote',
   
           'post_author' => 4,


   
       );
   
       
       // $category_name = ($_POST["categorie"]);
   
       $cpt_id = wp_insert_post($my_cptpost_args);

       update_field('not_connected_user_email', $_POST['email'], $cpt_id);
       update_field('not_connected_user_name', $_POST['author'], $cpt_id);
   
       // wp_set_object_terms( $cpt_id, $category_name, 'categorie' );
 
       // update_field(pseudo_not_connected,$_POST['author'],$cpt_id);
   
       $home = get_home_url();
 
       wp_redirect(get_home_url()); exit;
 }

}
 
add_action('wp_loaded', 'submit_post');