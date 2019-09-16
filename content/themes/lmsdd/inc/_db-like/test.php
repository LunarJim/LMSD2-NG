
<?php

add_action('wp_ajax_insertVote', 'insertVote');


function insertVote() {

    if ($_POST['vote']==9) {

        global $wpdb;

        $connection = new wpdb('lmsd2-vote', 'Jd240982!', 'lmsd2-vote', 'localhost');

        $quoteId = 5099;

        $votersList = $connection->get_results('SELECT * FROM vote', ARRAY_A);

        $nbrRowsInVoteTable = count($votersList);

        $nbrRowsInVoteTablePlusTwo = $nbrRowsInVoteTable += 2;

        // var_dump($nbrRowsInVoteTable);


        $connection->insert(
            'rating',
            array(
                'quote_id' => $quoteId,
                'vote_up'  => 1,
                'vote_down'=> 0
                )
        );
    }

        /*
        $connection->insert(
            'vote',
             array(
                    'vote_id' => $nbrRowsInVoteTablePlusTwo,
                     'voter_id' => 3,
                     'voted_quote_id'=> $quoteId
             )
                 ); */
                 
}



// INSERT INTO `rating` (`quote_id`, `vote_up`, `vote_down`) VALUES ('245', '1', '0');
// INSERT INTO `vote` (`voter_id`, `rating_quote_id`) VALUES ( '1', '245');

