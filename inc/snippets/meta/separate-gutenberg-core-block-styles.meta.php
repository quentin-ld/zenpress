<?php
/**
 * Metadata for separate-gutenberg-core-block-styles.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Separate loading of core block styles', 'zenpress'),
    'description' => __('Forces WordPress to load core block styles separately, improving performance by only loading the styles required for the blocks used on a page.', 'zenpress'),
    'category' => __('gutenberg', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
