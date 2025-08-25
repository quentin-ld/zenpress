<?php
/**
 * Remove WooCommerce patterns.
 *
 * Removes all WooCommerce remote block patterns to avoid
 * unnecessary pattern registration in the editor.
 *
 * @since 1.0.4
 * @return void
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access.
}

use Automattic\WooCommerce\Blocks\Package;

add_action('woocommerce_blocks_loaded', 'zenpress_remove_wc_patterns');
function zenpress_remove_wc_patterns(): void {
    remove_action(
        'init',
        [
            Package::container()->get(\Automattic\WooCommerce\Blocks\BlockPatterns::class),
            'register_block_patterns',
        ]
    );
}
