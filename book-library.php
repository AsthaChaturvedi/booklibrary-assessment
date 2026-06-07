<?php
/**
 * Plugin Name: Book Library
 * Description: Book management system assignment.
 * Version: 1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once plugin_dir_path(__FILE__) . 'includes/cpt-books.php';
require_once plugin_dir_path(__FILE__) . 'includes/access-control.php';
require_once plugin_dir_path(__FILE__) . 'includes/template-loader.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode-books-list.php';
require_once plugin_dir_path(__FILE__) . 'includes/enqueue-assets.php';