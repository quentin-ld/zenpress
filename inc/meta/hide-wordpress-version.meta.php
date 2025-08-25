<?php
/**
 * Metadata for "Hide WordPress version from HTTP headers, scripts, and styles".
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

return [
    'title' => __('Hide WordPress version from HTTP headers, scripts, and styles', 'zenpress'),
    'description' => __('Removes the WordPress version number from the HTML head, the generator tag, and script/style URLs, improving security by preventing version disclosure.', 'zenpress'),
    'category' => __('Security', 'zenpress'),
];
