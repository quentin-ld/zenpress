<?php
/**
 * Metadata for the "Disable PDF thumbnails" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable PDF thumbnails', 'zenpress'),
    'description' => __('Disable the generation of PDF thumbnails by filtering out the fallback image sizes, which helps improve performance by avoiding the creation of unnecessary image files for PDFs.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
