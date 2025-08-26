<?php
/**
 * Metadata for "Remove REST API links from the <head>".
 *
 * @since 1.0.4
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Remove REST API links from the <head>', 'zenpress'),
    'description' => __('Removes REST API discovery links from the <head> section of the site, improving performance and reducing unnecessary HTML output while keeping the REST API available.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
];
