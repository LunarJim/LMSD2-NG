<?php


// fonction de connexion (compte existant)

function connect_api() {


    if (!empty($_POST['userName_api']) && !empty($_POST['passwordHasAccount_api']) && (isset($_POST['login_nonce_field_api']) && wp_verify_nonce($_POST['login_nonce_field_api'], 'login_nonce_action_api')) ) {

        $login = $_POST['userName_api'];
        $password = $_POST['passwordHasAccount_api'];

        $user = get_user_by('login', $login);

        if ($user && wp_check_password($password, $user->data->user_pass, $user->ID)) {
            $creds = array();
            $creds['user_login'] = $login;
            $creds['user_password'] = $password;
            $creds['remember'] = false;
                
            $userLogged = wp_signon($creds, false);

            if (!empty($_POST['rememberMeHasAccount']) && $_POST['rememberMeHasAccount']==='rememberMeHasAccount') {
                    wp_set_auth_cookie($user->ID, true);
            }
            
            wp_redirect('http://localhost/LMSD2-NG/admintalk');
            exit;
                
        } else {
            $_SESSION['message'] = 'Login ou mot de passe incorrect';
        }
    }
}

add_action('init', 'connect_api');

function adminTalk_template_redirect() {
    if ( is_page( 'admintalk' ) && ! current_user_can('administrator') ) {
        wp_redirect( home_url() );
        die;
    }
}
add_action( 'template_redirect', 'adminTalk_template_redirect' );

add_action( 'init', 'quote_cpt' );

function quote_cpt() {
    $args = array(
      'public'       => true,
      'show_in_rest' => true,
      'label'        => 'quote'
    );
    register_post_type('quote', $args);
}
