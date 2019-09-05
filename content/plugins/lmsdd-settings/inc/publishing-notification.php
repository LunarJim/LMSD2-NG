<?php


function notifyAuthor($post_id) {
 
 $post = get_post($post_id);
 $author = get_userdata($post->post_author);
 $subject = "Citation publiée !";

 $sendNotificationStatus = get_field(quote_publishing_notification, $post_id);

 $emailIfUserNotConnected = get_field("not_connected_user_email", $post_id);

 $nameIfUserNotConnected = get_field("not_connected_user_name", $post_id);
 

 if (($sendNotificationStatus==1) && isset($emailIfUserNotConnected)) {
  
    $message = "
       Bonjour ".$nameIfUserNotConnected.",
        
       Ta citation vient d'être publiée.
        
       A voir ici: ".get_permalink( $post_id )."
        
       Merci"
       ;
        
    wp_mail($emailIfUserNotConnected, $subject, $message);
 }

 elseif (($sendNotificationStatus==1) && !isset($emailIfUserNotConnected)) {

    $message = "
        Bonjour ".$author->display_name.",
     
        Ta citation vient d'être publiée.
     
        A voir ici: ".get_permalink($post_id)."
     
        Merci";
 
    wp_mail($author->user_email, $subject, $message);
 }

}

 add_action('publish_quote', 'notifyAuthor');