<?php

// soumission de quote

function submit_post() {
 
  $current_user = wp_get_current_user();
 
    if ((isset($_POST['quoteContent'])) &&  $current_user->exists())  {

        $quoteContent='';
        $quoteContent = $_POST['quoteContent'];
        $quoteContentLenght = strlen($quoteContent);

        if ($quoteContentLenght > 40) {
        
            $user_id = get_current_user_id();
            $newQuote = array(
 
                'post_content' => $_POST['quoteContent'],
                'post_title'   => $_POST['quoteContent'],
                'post_status' => 'pending',
                'post_type' => 'quote',
                'post_author' => $user_id,
            );
 
            $quote_id = wp_insert_post($newQuote);

            if (isset($_POST['publishing-alert']) && ($_POST['publishing-alert']=='on')) {
                update_field('quote_publishing_notification', 1, $quote_id);
            }

            wp_redirect(get_permalink(150));
            exit;
        }

        else {
            $_SESSION['message-submit'] = 'Ta citation me paraît courte! Peux-tu la vérifier ?';
        }
    }
 
    elseif ((isset($_POST['quoteContent'])) &&  $current_user->exists()==0)  {

    $quoteContent='';
    $quoteContent = $_POST['quoteContent'];
    $quoteContentLenght = strlen($quoteContent);

        if ($quoteContentLenght > 40) {

            $newQuote = array(
   
            'post_content' => $_POST['quoteContent'],
            'post_title'   => $_POST['quoteContent'],
            'post_status' => 'pending',
            'post_type' => 'quote',
            'post_author' => 4,
   
            );
   
            $quote_id = wp_insert_post($newQuote);

             update_field('not_connected_user_email', $_POST['email'], $quote_id);
             update_field('not_connected_user_name', $_POST['author'], $quote_id);

             if (isset($_POST['publishing-alert']) && ($_POST['publishing-alert']=='on')) {
                update_field('quote_publishing_notification', 1, $quote_id);
            }
 
            wp_redirect(get_permalink(150));
            exit;
        }

        else {
            $_SESSION['message-submit'] = 'Ta citation me paraît courte! Peux-tu la vérifier ?';
        }
 }


}
 
add_action('wp_loaded', 'submit_post');