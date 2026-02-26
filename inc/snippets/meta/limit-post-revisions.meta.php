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
        'Keeps at most 10 revisions per post (or page). Older revisions are deleted when new ones are created. Reduces database size and improves performance.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
