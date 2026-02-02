<?php
/**
 * Metadata for remove-thanks-for-using-wordpress-in-footer.php
 *
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Remove "Thanks for using WordPress" in footer', 'zenpress'),
    'description' => __(
        'Removes the "Thank you for creating with WordPress" message from the admin footer.',
        'zenpress'
    ),
    'category' => __('core', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];
