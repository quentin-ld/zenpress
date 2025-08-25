<?php
/**
 * Enable separate loading of core block styles.
 *
 * Forces WordPress to load block styles for core blocks separately
 * instead of bundling them all together. This helps improve performance
 * by ensuring only the necessary styles are loaded on each page.
 *
 * @since 1.0.0
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

add_filter('should_load_separate_core_block_assets', '__return_true');
