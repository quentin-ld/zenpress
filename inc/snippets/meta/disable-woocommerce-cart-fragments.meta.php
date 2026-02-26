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
    'description' => __('Stops the script that updates the cart without reloading the page. Turn off if you don\'t need live cart updates.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
