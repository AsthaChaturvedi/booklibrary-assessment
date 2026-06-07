<?php

if (!defined('ABSPATH')) {
    exit;
}

function bl_load_single_book_template($template) {

    if (is_singular('books')) {

        $custom_template = plugin_dir_path(__FILE__) . '../templates/single-books.php';

        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }

    return $template;
}

add_filter('template_include', 'bl_load_single_book_template');