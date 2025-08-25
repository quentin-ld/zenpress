<?php
/**
 * Metadata for the "Disable pingback and trackback" snippet.
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable pingback and trackback', 'zenpress'),
    'description' => __('Removes the X-Pingback header, disables pingbacks and trackbacks on new posts, and prevents self-pingbacks. This improves security and performance by reducing unnecessary requests and mitigating spam or DDoS risks.', 'zenpress'),
    'category' => __('Security', 'zenpress'),
];
