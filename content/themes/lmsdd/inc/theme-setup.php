<?php

function lmsdd_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'lmsdd_setup');

