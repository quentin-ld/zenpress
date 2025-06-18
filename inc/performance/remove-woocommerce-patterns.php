<?php

if (!defined('ABSPATH')) {
    die();
}

use Automattic\WooCommerce\Blocks\Package;

/*
Snippet Name: Remove WooCommerce patterns
Version: 1.0.0
Plugin URI: https://mariecomet.fr/
Description: Remove all WooCommerce patterns
Author: Marie Comet
Author URI: https://mariecomet.fr/
Contributors: rahe, chaton666, beapi
/**
 * Remove WooCommerce patterns
 *
 * @return void
 */
add_action('woocommerce_blocks_loaded', 'zenpress_remove_wc_patterns');
function zenpress_remove_wc_patterns(): void {
    remove_action(
        'init',
        [
            Package::container()->get(\Automattic\WooCommerce\Blocks\BlockPatterns::class),
            'register_block_patterns'
        ]
    );
}
