<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/dist/app.css', [], '1.0');
});

add_filter('acf/settings/save_json', function () {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function ($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});