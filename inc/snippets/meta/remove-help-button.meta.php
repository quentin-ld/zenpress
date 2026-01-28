<?php
/**
 * Metadata for remove-help-button.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Remove "Help" button', 'zenpress'),
    'description' => __(
        'Hides the Help tab and panel on all admin screens. Reduces clutter for users who do not use the in-app help.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
