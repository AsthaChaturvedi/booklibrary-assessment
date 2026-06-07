<?php

if (!defined('ABSPATH')) {
    exit;
}

function bl_register_books_cpt() {

    $args = [
        'label' => 'Books',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-book',
        'supports' => ['title'],
        'show_in_rest' => true
    ];

    register_post_type('books', $args);
}

add_action('init', 'bl_register_books_cpt');