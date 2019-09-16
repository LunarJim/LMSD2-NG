<?php

global $wpdb;

// connexion table like

$connection = new wpdb('lmsd2-vote','Jd240982!', 'lmsd2-vote', 'localhost');

// récupérer l'intégralité du contenu de la table

$likesList = $connection->get_results('SELECT * FROM rating');

$jsonLikesList = json_encode($likesList);

$votersList = $connection->get_results('SELECT * FROM vote', ARRAY_A);

// insérer une ligne : $wpdb->insert( $table, $data, $format ); 



// var_dump($likesList);

// var_dump($votersList);

// INSERT INTO `rating` (`quote_id`, `vote_up`, `vote_down`) VALUES ('245', '1', '0');
// INSERT INTO `vote` (`voter_id`, `rating_quote_id`) VALUES ( '1', '245');








