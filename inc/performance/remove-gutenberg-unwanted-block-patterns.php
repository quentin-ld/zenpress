<?php

/**
 * Disable unwanted default block patterns in gutenberg editor
 *
 * This function Disable the loading of remote block patterns and removes
 * the core block patterns that WordPress includes by default. This can
 * improve performance by preventing unnecessary block patterns from
 * being loaded in the editor.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

add_filter('should_load_remote_block_patterns', '__return_false');

add_action('after_setup_theme', 'zenpress_removecoreblockpatterns');
function zenpress_removecoreblockpatterns() {
    remove_theme_support('core-block-patterns');
}
