<?php

if (!defined('ABSPATH')) {
    exit;
}

function bl_restrict_books_access() {

    if (!is_user_logged_in()) {

        if (
            is_singular('books') ||
            is_post_type_archive('books') ||
            is_page('books-listing')
        ) {

            $message = '
<div class="book-login-notice">
    <h2>You must be logged in to view this content.</h2>
    <p>Please log in or register to continue.</p>

    <div class="book-login-actions">
        <a href="' . wp_login_url( home_url( $_SERVER['REQUEST_URI'] ) ) . '" class="btn-login">Login</a>
        <a href="' . wp_registration_url() . '" class="btn-register">Register</a>
    </div>
</div>';

wp_die($message);

        }
    }
}

add_action('template_redirect', 'bl_restrict_books_access');