<?php

function neda_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'neda-theme'),
    ]);
}

add_action('after_setup_theme', 'neda_theme_setup');


function neda_theme_assets() {
    wp_enqueue_style(
        'neda-theme-style',
        get_stylesheet_uri(),
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'neda-theme-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'neda_theme_assets');
