<?php
/**
 * Metadata for "Disable WordPress shortlink generation".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable WordPress shortlink generation', 'zenpress'),
    'description' => __('Removes shortlink functionality by disabling the header and template redirect actions, preventing WordPress from outputting shortlink tags and headers.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
];
