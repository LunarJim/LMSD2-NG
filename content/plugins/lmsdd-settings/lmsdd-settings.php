<?php
/*
Plugin Name: lmsdd settings
Description: Réglages pour le thème le monde se divise en 2: Custom Post Type, Taxonomies, Custom Fields, ...
Author: JimDeghaye
Version: 1.0.0
*/

//Sécurise le plugin
if (!defined('WPINC')) {die();}

require plugin_dir_path(__FILE__) . 'inc/quote_cpt.php';
require plugin_dir_path(__FILE__) . 'inc/connect.php';
/* 
require plugin_dir_path(__FILE__) . 'inc/roles.php';
require plugin_dir_path(__FILE__) . 'inc/settings.php';
require plugin_dir_path(__FILE__) . 'inc/dashboard.php';
require plugin_dir_path(__FILE__) . 'inc/interface.php';
require plugin_dir_path(__FILE__) . 'inc/footer.php';
require plugin_dir_path(__FILE__) . 'inc/login.php';
require plugin_dir_path(__FILE__) . 'inc/rest_api.php';
*/

/// CPT QUOTE ///
$quote_cpt = new Quote_cpt();

register_activation_hook(__FILE__, [$quote_cpt, 'activation']);
register_deactivation_hook(__FILE__, [$quote_cpt, 'deactivation']);


/// ROLES ///
/* 
$role = new oCookingRole();

register_activation_hook(__FILE__, [$role, 'activation']);
register_deactivation_hook(__FILE__, [$role, 'deactivation']);
