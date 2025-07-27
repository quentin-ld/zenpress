<?php

/**
 * Disable the Login Language Selector
 *
 * This function disable the language selector on the WordPress login page
 *
 *
 * @return void
 *
 * @since 1.0.9
 */

if (!defined('ABSPATH')) {
    die();
}

add_filter('login_display_language_dropdown', '__return_false');