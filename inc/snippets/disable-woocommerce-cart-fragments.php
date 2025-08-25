<?php
/**
 * Disable WooCommerce cart fragments script.
 *
 * Removes the WooCommerce cart fragments JavaScript, which updates
 * the cart contents dynamically without reloading. Disabling this
 * script can improve performance for stores that do not require
 * dynamic cart updates on the frontend.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_action('wp_enqueue_scripts', 'zenpress_disable_cart_fragments', 11);

function zenpress_disable_cart_fragments() {
    if (class_exists('WooCommerce')) {
        wp_dequeue_script('wc-cart-fragments');
    }
}
