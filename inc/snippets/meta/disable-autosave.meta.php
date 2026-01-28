<?php
/**
 * Metadata for disable-autosave.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable autosave', 'zenpress'),
    'description' => __(
        'Stops the classic editor from autosaving drafts periodically. Reduces database writes and heartbeat traffic. The block editor may still use its own autosave; this targets the legacy post editor.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('performance', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
