<?php

if (!defined('ABSPATH')) {
    exit;
}

function bl_enqueue_assets() {

    wp_enqueue_style(
        'book-library-style',
        plugin_dir_url(__FILE__) . '../assets/css/style.css',
        [],
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'bl_enqueue_assets');