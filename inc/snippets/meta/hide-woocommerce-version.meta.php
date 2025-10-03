<?php
/**
 * Metadata for hide-woocommerce-version.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Hide WooCommerce version', 'zenpress'),
    'description' => __('Removes WooCommerce version info from HTTP headers and asset URLs. Reduces exposure of version number and makes it harder for attackers to target specific WooCommerce versions.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
