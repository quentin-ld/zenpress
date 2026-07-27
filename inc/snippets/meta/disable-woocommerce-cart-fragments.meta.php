<?php
/**
 * Metadata for disable-woocommerce-cart-fragments.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable WooCommerce cart fragments', 'zenpress'),
    'description' => __('Stops the script that updates the cart count without reloading the page. The cart total no longer updates without a page reload.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
