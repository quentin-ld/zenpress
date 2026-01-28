<?php
/**
 * Metadata for disable-pdf-thumbnails.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable PDF thumbnails', 'zenpress'),
    'description' => __('Prevents WordPress from generating thumbnails for uploaded PDF files by removing fallback image sizes. Saves storage space and improves performance by avoiding unnecessary image generation.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
