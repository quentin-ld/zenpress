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
    'title' => __('Remove WooCommerce default block patterns', 'zenpress'),
    'description' => __('Removes all WooCommerce block patterns to avoid unnecessary pattern registration in the editor.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
