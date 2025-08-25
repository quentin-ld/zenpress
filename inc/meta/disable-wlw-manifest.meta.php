<?php
/**
 * Metadata for "Disable the Windows Live Writer (WLW) manifest link".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable the Windows Live Writer (WLW) manifest link', 'zenpress'),
    'description' => __('Removes the WLW manifest link from the <head> section of WordPress pages, reducing unnecessary metadata output.', 'zenpress'),
    'category' => __('Performance', 'zenpress'),
];
