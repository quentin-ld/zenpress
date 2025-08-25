<?php
/**
 * Disable unwanted default block patterns in Gutenberg editor.
 *
 * Disables the loading of remote block patterns and removes the
 * core block patterns that WordPress includes by default.
 * Improves performance by preventing unnecessary block patterns
 * from being loaded in the editor.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

// Disable remote block patterns
add_filter('should_load_remote_block_patterns', '__return_false');

// Remove core block patterns
add_action('after_setup_theme', 'zenpress_remove_core_block_patterns');
function zenpress_remove_core_block_patterns() {
    remove_theme_support('core-block-patterns');
}
