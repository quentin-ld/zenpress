<?php
/**
 * Disable Dashicons for non-logged-in users.
 *
 * Prevents WordPress from loading the Dashicons CSS for visitors
 * who are not logged in, improving frontend performance by
 * reducing unnecessary styles.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_action('wp_enqueue_scripts', function () {
    if (!is_user_logged_in()) {
        wp_dequeue_style('dashicons');
        wp_deregister_style('dashicons');
    }
});
