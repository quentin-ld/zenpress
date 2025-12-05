<?php
/**
 * Metadata for block-user-enumeration.php
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Block user enumeration', 'zenpress'),
    'description' => __(
        'Prevents attackers from guessing WordPress usernames by blocking requests with the `author` parameter in query strings or permalinks. Reduces exposure to brute-force and user-targeted attacks.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('security', 'zenpress'),
    'weight' => 0,
    'preset' => ['showcase-website', 'blog', 'ecommerce'],
];
