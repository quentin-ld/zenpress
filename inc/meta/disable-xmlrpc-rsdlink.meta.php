<?php
/**
 * Metadata for "Disable XML-RPC and remove the RSD link".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Disable XML-RPC and remove the RSD link', 'zenpress'),
    'description' => __('Disables XML-RPC functionality to reduce attack surface (brute force, DDoS) and removes the RSD link from the HTML head for better security and reduced exposure.', 'zenpress'),
    'category' => __('Performance 🚀', 'zenpress'),
];
