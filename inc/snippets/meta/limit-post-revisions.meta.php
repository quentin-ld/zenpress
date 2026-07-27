<?php
/**
 * Metadata for limit-post-revisions.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Limit post revisions to 10', 'zenpress'),
    'description' => __(
        'Limits post revisions to a maximum of 10 per post or page. Older revisions are automatically deleted when new ones are created.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
