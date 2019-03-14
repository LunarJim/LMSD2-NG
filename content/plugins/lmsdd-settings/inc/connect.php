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

            $_SESSION['message'] = 'Login ou mot de passe incorrect';
        }
    }

}

add_action('init', 'connect');

function displayMessages() {

    //Si j'ai un message à afficher...
    if (!empty($_SESSION['message'])) {

    // Alors je l'affiche
    echo 'app.errorsMsg.push("'.$_SESSION['message'].'");';

    // PUIS, comme il vient d'être affiché, je le supprime
    $_SESSION['message'] = [];

    // ... ainsi mon message ne sera plus affiché
    }
}

add_action('init', 'displayMessages');



