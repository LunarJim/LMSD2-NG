<?php
/*
Plugin Name: lmsdd settings
Description: Réglages pour le thème le monde se divise en 2: Custom Post Type, Taxonomies, Custom Fields, ...
Author: Jérémie Deghaye
Version: 1.0.0
*/

//Sécurise le plugin
if (!defined('WPINC')) {die();}

require plugin_dir_path(__FILE__) . 'inc/quote_cpt.php';
require plugin_dir_path(__FILE__) . 'inc/submit.php';
require plugin_dir_path(__FILE__) . 'inc/connect.php';
require plugin_dir_path(__FILE__) . 'inc/user_settings.php';
require plugin_dir_path(__FILE__) . 'inc/contact.php';
require plugin_dir_path(__FILE__) . 'inc/publishing-notification.php';
require plugin_dir_path(__FILE__) . 'inc/connect_api.php';



// CPT QUOTE
$quote_cpt = new Quote_cpt();

register_activation_hook(__FILE__, [$quote_cpt, 'activation']);
register_deactivation_hook(__FILE__, [$quote_cpt, 'deactivation']);

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

// fonction permettant le display des cpt dans la page author

function author_custom_post_types( $query ) {
  if( is_author() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'quote'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'author_custom_post_types' );

function start_session()
{
  if( !session_id() )
  {
    session_start();
  }
}

add_action('init', 'start_session', 1); 
