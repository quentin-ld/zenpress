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
    'description' => __('Removes the WooCommerce version number from HTTP headers and asset URLs. Prevents the version from being visible in page source and enqueued file URLs.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
