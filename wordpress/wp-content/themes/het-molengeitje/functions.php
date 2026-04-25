<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/dist/app.css', [], '1.0');
});