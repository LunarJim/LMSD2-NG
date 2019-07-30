<?php 



function sendMessageByContactForm() {
    
    if (isset($_POST["contact_message"]) && ($_POST["contact_email"])) {
        $contact_content = $_POST["contact_message"];
        $my_mail='jim.deghaye@gmail.com';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $wp_mail_result = wp_mail($my_mail, 'nouveau message du formulaire de contact lmsd2', $contact_content, $headers);

        wp_redirect(get_page_link(150));

        exit;
    }
}


  add_action('init', 'sendMessageByContactForm');