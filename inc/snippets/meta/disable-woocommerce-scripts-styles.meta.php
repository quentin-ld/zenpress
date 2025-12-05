<?php
/**
 * Metadata for disable-woocommerce-scripts-styles.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable WooCommerce scripts and styles on non-WooCommerce pages', 'zenpress'),
    'description' => __('Dequeues WooCommerce assets on pages where WooCommerce functionality is not required, such as homepage, blog posts, or custom pages. Helps improve performance by preventing unnecessary asset loading.', 'zenpress'),
    'category' => __('woocommerce', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['ecommerce'],
];
