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
    'description' => __('Removes default pattern categories from the block inserter in the Site Editor. The patterns themselves remain available but are no longer grouped by category.', 'zenpress'),
    'category' => __('gutenberg', 'zenpress'),
    'subcategory' => __('user-interface', 'zenpress'),
    'weight' => 0,
    'preset' => [],
];

