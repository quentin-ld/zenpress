<?php
/**
 * Metadata for disable-woocommerce-stripe-scripts.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable unnecessary Stripe scripts on WooCommerce pages', 'zenpress'),
    'description' => __('Prevents loading of Stripe-related scripts on the product and cart pages when the "Payment Request Button Support" (PRBS) is disabled. Helps improve performance by avoiding unnecessary JavaScript loading.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
