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
    'description' => __('Stops WordPress from generating thumbnail image sizes for uploaded PDF files. PDFs remain uploadable but no fallback image is created.', 'zenpress'),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
