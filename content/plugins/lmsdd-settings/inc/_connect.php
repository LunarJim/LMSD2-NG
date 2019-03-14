<?php

// Je démarre les sessions
session_start();

if (!empty($_POST['username']) && !empty($_POST['password'])) {

    // J'inclue le fichier users.php
    // il contient une variable $users
    // qui est un tableau avec les utilisateurs autorisés à se connecter
    require 'inc/users.php';

    // Je regarde si la clé existe dans le tableau
    // si oui c'est que l'utilisateur est bien présent
    if (isset($users[$_POST['username']])) {

        // Je compare le mot de passe de l'utilisateur avec celui saisi
        if ($users[$_POST['username']]['pass'] === $_POST['password']) {

            // Je retiens en session l'utilisateur connecté
            $_SESSION['user']['name'] = $_POST['username'];
            $_SESSION['user']['role'] = $users[$_POST['username']]['data']['role'];
            $_SESSION['user']['age'] = $users[$_POST['username']]['data']['age'];
            $_SESSION['user']['gimmick'] = $users[$_POST['username']]['data']['gimmick'];

            // Je redirige vers la page home.php
            header('Location: home.php');

        // Les mots de passes ne correspondent pas !
        } else {

            $_SESSION['message'] = 'Login ou mot de passe incorrect';

            header('Location: index.php');
        }

    // Sinon c'est que l'utilisateur n'existe pas
    } else {

        $_SESSION['message'] = 'Login ou mot de passe incorrect';

        header('Location: index.php');
    }

} else {

    // Je stock en session un message
    $_SESSION['message'] = 'Merci de renseigner les champs du formulaire';


    // Je demande à Apache d'ajouter dans les entêtes de la réponse
    // une nouvelle information: "Location"
    // Lorsque le navigateur va recevoir les entêtes, il va lire l'information
    // et changer d'URL: nous avons réalisé une redirection
    header('Location: index.php');
}