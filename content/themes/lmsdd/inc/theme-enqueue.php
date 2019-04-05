<?php

function lmsdd_scripts()
{
    wp_enqueue_style(
        'lmsdd_app_css',
        get_theme_file_uri('/public/css/app.css'),
        ['lmsdd_vendor_css'],
        '1.0.0'
    );

    wp_enqueue_style(
        'lmsdd_vendor_css',
        get_theme_file_uri('/public/css/vendor.css'),
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'lmsdd_app_js',
        get_theme_file_uri('/public/js/app.js'),
        ['lmsdd_vendor_js'],
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'lmsdd_vendor_js',
        get_theme_file_uri('/public/js/vendor.js'),
        [],
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'lmsdd_scripts');

// logo personnalisé

function lmsdd_custom_login_logo() {
 echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login.css" />';
}

add_action('login_head', 'lmsdd_custom_login_logo');?>