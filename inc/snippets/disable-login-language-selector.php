<?php
/**
 * Disable the Login Language Selector.
 *
 * Removes the language selector from the WordPress login page,
 * simplifying the login screen for users.
 *
 * @since 1.0.9
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_filter('login_display_language_dropdown', '__return_false');
