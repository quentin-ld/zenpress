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
    'title' => __('Disable WooCommerce cart fragments script', 'zenpress'),
    'description' => __('Removes the WooCommerce cart fragments JavaScript (wc-cart-fragments), which is responsible for dynamically updating the cart contents without a page reload. Disabling this can improve performance on stores that do not require live cart updates.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
