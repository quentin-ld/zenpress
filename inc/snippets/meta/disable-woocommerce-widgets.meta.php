<?php
/**
 * Metadata for disable-woocommerce-widgets.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable WooCommerce widgets', 'zenpress'),
    'description' => __('Unregisters all default WooCommerce widgets. Removes them from the widget administration screen and prevents them from rendering in widget areas.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
