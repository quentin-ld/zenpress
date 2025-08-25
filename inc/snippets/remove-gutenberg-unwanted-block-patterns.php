<?php

/**
* Title : Disable unwanted default block patterns in gutenberg editor
* Category : Performance
* Description : Disable the loading of remote block patterns and removes the core block patterns that WordPress includes by default. This can improve performance by preventing unnecessary block patterns from being loaded in the editor.
*
* @return void
* @since 1.0.0
*/

if (!defined('ABSPATH')) {
    die();
}

$snippet_metadata = [
    'title' => __('Disable unwanted default block patterns in gutenberg editor', 'zenpress'),
    'description' => __('Disable the loading of remote block patterns and removes the core block patterns that WordPress includes by default. This can improve performance by preventing unnecessary block patterns from being loaded in the editor.', 'zenpress'),
    'category' => __('Performance', 'zenpress')
];

add_filter('should_load_remote_block_patterns', '__return_false');

add_action('after_setup_theme', 'zenpress_removecoreblockpatterns');
function zenpress_removecoreblockpatterns() {
    remove_theme_support('core-block-patterns');
}
