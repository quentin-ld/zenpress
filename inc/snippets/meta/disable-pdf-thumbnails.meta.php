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
    'description' => __('Prevents WordPress from generating thumbnails for uploaded PDF files by removing fallback image sizes. saves storage space and improves performance by avoiding unnecessary image generation.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
