<?php

if (!defined('ABSPATH')) {
    exit;
}

if (class_exists('WooCommerce')) {
    add_action('wp_enqueue_scripts', static function () {
        wp_dequeue_script('wc-cart-fragments');
    }, 11);
}
