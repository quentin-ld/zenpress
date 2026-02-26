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
    'title' => __('Remove Help tab', 'zenpress'),
    'description' => __(
        'Hides the Help tab on all admin screens. Reduces clutter if you don\'t use in-app help.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
