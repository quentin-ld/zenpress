<?php
/**
 * Metadata for "Disable unnecessary Stripe scripts on WooCommerce pages".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable unnecessary Stripe scripts on WooCommerce pages', 'zenpress'),
    'description' => __('Prevents loading of Stripe-related scripts on WooCommerce product and cart pages when Payment Request Button Support (PRBS) is disabled, improving site performance.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
