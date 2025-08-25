<?php
/**
 * Metadata for the "Disable adjacent posts link tags in the header" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable adjacent posts link tags in the header', 'zenpress'),
    'description' => __(
        'Removes the rel="prev" and rel="next" link tags from the wp_head output, which can improve performance by reducing unnecessary HTML in the header.',
        'zenpress'
    ),
    'category' => __('Performance', 'zenpress'),
];
