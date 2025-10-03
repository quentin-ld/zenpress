<?php

if (!defined('ABSPATH')) {
    exit;
}

use Automattic\WooCommerce\Blocks\Package;

add_action('woocommerce_blocks_loaded', static function (): void {
    remove_action(
        'init',
        [
            Package::container()->get(\Automattic\WooCommerce\Blocks\BlockPatterns::class),
            'register_block_patterns',
        ]
    );
});
