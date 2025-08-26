<?php
/**
 * Metadata for "Disable WooCommerce scripts and styles on non-WooCommerce pages".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable WooCommerce scripts and styles on non-WooCommerce pages', 'zenpress'),
    'description' => __('Dequeues WooCommerce scripts and styles on non-WooCommerce pages such as the homepage, blog posts, and custom pages, improving performance by reducing unnecessary asset loading.', 'zenpress'),
    'category' => __('WooCommerce 🛒', 'zenpress'),
];
