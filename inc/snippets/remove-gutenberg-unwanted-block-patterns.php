<?php

if (!defined('ABSPATH')) {
    exit;
}

// Disable remote block patterns
add_filter('should_load_remote_block_patterns', '__return_false');

// Remove core block patterns
add_action('after_setup_theme', 'zenpress_remove_core_block_patterns');
function zenpress_remove_core_block_patterns() {
    remove_theme_support('core-block-patterns');
}
