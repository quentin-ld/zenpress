<?php

/**
 * Enables separate loading of core block styles
 *
 * This function enables the separate loading of block styles for the core
 * blocks in WordPress. By default, WordPress bundles block styles together,
 * but this snippet forces them to be loaded separately, which can improve
 * performance by loading only the necessary styles for the blocks being used.
 *
 * @return void
 *
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    die();
}

add_filter('should_load_separate_core_block_assets', '__return_true');
