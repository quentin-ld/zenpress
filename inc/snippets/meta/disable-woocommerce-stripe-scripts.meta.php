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
    'title' => __('Disable Stripe scripts on product and cart pages', 'zenpress'),
    'description' => __('Stops Stripe-related scripts from loading on product and cart pages when the Payment Request Button Support (PRBS) is disabled in WooCommerce. The checkout page still loads Stripe scripts.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
