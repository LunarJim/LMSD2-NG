<?php


// fonction de connexion (compte existant)

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

//fonction de création de compte

function create_new_user() {

    if (!empty($_POST['pseudo_no_account']) && !empty($_POST['email_no_account']) && !empty($_POST['password_no_account']) && ($_POST['password_no_account']==$_POST['password2_no_account'])) {

        $create_login=$_POST['pseudo_no_account'];
        $create_password=$_POST['password_no_account'];
        $create_email=$_POST['email_no_account'];
		

		// Vérifier que l'user (email ou nom) n'existe pas
		if ( ! username_exists( $create_login )  && ! email_exists( $create_email ) ) {
			// Création de l'utilisateur
	        $user_id = wp_create_user( $create_login, $create_password, $create_email );
	        $user = new WP_User( $user_id );
	        // On lui attribue un rôle
	        $user->set_role( 'contributor' );
	        // Envoie un mail de notification au nouvel utilisateur
	        wp_new_user_notification( $user_id );
	    } else {
	    }

		// Connecter automatiquement le nouvel utilisateur
	    $creds = array();
		$creds['user_login'] = $create_login;
		$creds['user_password'] = $create_password;
		$creds['remember'] = false;
		$user = wp_signon( $creds, false );

		// Redirection
        wp_redirect(get_home_url()); exit;
        
    }
	
}

add_action('init', 'create_new_user');



/*
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
*/