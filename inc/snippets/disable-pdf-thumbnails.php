<?php
/**
 * Disable PDF thumbnails.
 *
 * Prevents WordPress from generating thumbnails for PDF files by filtering out
 * the fallback image sizes. This improves performance by avoiding unnecessary
 * image file creation.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_filter('fallback_intermediate_image_sizes', function () {
    return [];
});
