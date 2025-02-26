<?php

/*
Snippet Name: Disable WooCommerce Cart Fragments
Version: 1.0.0
Tag(s): Performance
Description:
*/

if (!defined('ABSPATH')) die();

function ripperdoc_disable_cart_fragments() {
    if (class_exists('woocommerce')) {
        // Disable WooCommerce Cart Fragments
        wp_dequeue_script('wc-cart-fragments');
    }
}
// Hook into the proper WordPress action for handling scripts
add_action('wp_enqueue_scripts', 'ripperdoc_disable_cart_fragments', 11);
