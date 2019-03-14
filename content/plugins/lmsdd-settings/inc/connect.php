<?php

function connect() {

    if (!empty($_POST['User_name']) && !empty($_POST['InputPassword_has_account'])) {

        $login=$_POST['User_name'];
        $password=$_POST['InputPassword_has_account'];

        $user = get_user_by( 'login', $login );

        if ($user && wp_check_password( $password, $user->data->user_pass, $user->ID)) {

            $creds = array();
		    $creds['user_login'] = $login;
		    $creds['user_password'] = $password;
            $creds['remember'] = false;
            
            $userLogged = wp_signon( $creds, false );
        
            // wp_set_current_user($userLogged); 

            wp_redirect(get_home_url()); exit;

        }
        else {

        echo "noooOOpe";
        }
    }
}

add_action('init', 'connect');