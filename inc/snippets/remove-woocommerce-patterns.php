<?php

/**
* Title : Remove WooCommerce patterns
* Category : WooCommerce
* Description : Remove all WooCommerce remote patterns
*
* @return void
* @since 1.0.4
*/

if (!defined('ABSPATH')) {
    die();
}

use Automattic\WooCommerce\Blocks\Package;

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
