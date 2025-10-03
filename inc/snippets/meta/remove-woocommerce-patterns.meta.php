<?php
/**
 * Metadata for remove-woocommerce-patterns.php
 *
 * @since 1.0.4
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Remove WooCommerce default remote block patterns', 'zenpress'),
    'description' => __('Removes all WooCommerce remote block patterns to avoid unnecessary pattern registration in the editor.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
