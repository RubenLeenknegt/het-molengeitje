<?php

add_action('after_setup_theme', function () {
    // Adds support for uploading custom logo from site customizer
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Registers primary navigation menu
    register_nav_menus([
        'primary' => __('Primary Navigation', 'het-molengeitje'),
    ]);
});

// Allow .SVG files to be uploaded via the WordPress backend
function allow_svg_uploads($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_uploads');


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/dist/app.css', [], '1.0');
    wp_enqueue_script('theme-dropdown', get_template_directory_uri() . '/assets/js/header-dropdown.js', [], '1.0', true);
});

// Force AFC to sync custom fields JSON output file to the /acf-json directory
add_filter('acf/settings/save_json', function () {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function ($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});