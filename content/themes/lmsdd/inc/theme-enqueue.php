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

/*    wp_enqueue_script(
        'lmsdd_like_system_script',
        get_theme_file_uri('like.js'),
        [],
        '1.0.0',
        true
    );

    wp_localize_script(
        'lmsdd_like_system_script',
        'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));


*/


}

add_action('wp_enqueue_scripts', 'lmsdd_scripts');

