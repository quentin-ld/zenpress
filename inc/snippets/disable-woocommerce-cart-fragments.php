<?php

/**
* Title : Disable WooCommerce cart fragments script
* Category : WooCommerce
* Description : Removes the WooCommerce cart fragments JavaScript, which is responsible for dynamically updating the cart contents on the page without reloading. Disabling this script can improve performance, especially for stores that do not require the dynamic cart updates on the frontend.
*
* @return void
* @since 1.0.0
*/

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable WooCommerce cart fragments script', 'zenpress'),
    'description' => __('Removes the WooCommerce cart fragments JavaScript, which is responsible for dynamically updating the cart contents on the page without reloading. Disabling this script can improve performance, especially for stores that do not require the dynamic cart updates on the frontend.', 'zenpress'),
    'category' => __('WooCommerce', 'zenpress')
];

add_action('wp_enqueue_scripts', 'zenpress_disable_cart_fragments', 11);
function zenpress_disable_cart_fragments() {
    if (class_exists('woocommerce')) {
        wp_dequeue_script('wc-cart-fragments');
    }
}
