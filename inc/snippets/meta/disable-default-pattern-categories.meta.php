<?php
/**
 * Metadata for disable-default-pattern-categories.php
 *
 * @since 2.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

return [
    'title' => __('Disable default pattern categories in Site Editor', 'zenpress'),
    'description' => __('Removes default pattern categories from the block inserter. Patterns are still available; the list is simpler.', 'zenpress'),
    'category' => __('gutenberg', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];

