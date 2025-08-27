<?php
/**
 * Metadata for "Remove WooCommerce patterns".
 *
 * @since 1.0.4
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Remove WooCommerce patterns', 'zenpress'),
    'description' => __('Removes all WooCommerce remote block patterns to prevent unnecessary editor patterns from being registered.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
