<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', 'zenpress_disable_cart_fragments', 11);

function zenpress_disable_cart_fragments() {
    if (class_exists('WooCommerce')) {
        wp_dequeue_script('wc-cart-fragments');
    }
}
