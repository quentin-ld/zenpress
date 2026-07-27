<?php
/**
 * Metadata for disable-dns-prefetch.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable DNS prefetch', 'zenpress'),
    'description' => __(
        'Removes DNS prefetch resource hints from the HTML head. Stops WordPress from instructing browsers to resolve domain names for external services before they are needed.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => ['corporate-website', 'blog', 'ecommerce'],
];
