<?php

if (!defined('ABSPATH')) {
    exit;
}

// Only proceed if WooCommerce is active
if (!class_exists('WooCommerce')) {
    return;
}

use Automattic\WooCommerce\Blocks\Package;

add_action('woocommerce_blocks_loaded', static function (): void {
    // Check if required classes exist before accessing them
    if (!class_exists(Package::class) || !class_exists(\Automattic\WooCommerce\Blocks\BlockPatterns::class)) {
        return;
    }

    try {
        $container = Package::container();
        if (!$container) {
            return;
        }

        $block_patterns = $container->get(\Automattic\WooCommerce\Blocks\BlockPatterns::class);
        if ($block_patterns && method_exists($block_patterns, 'register_block_patterns')) {
            remove_action(
                'init',
                [$block_patterns, 'register_block_patterns']
            );
        }
    } catch (\Exception $e) {
        // Silently fail if container or class is not available
        return;
    }
});

add_action('init', static function() {
    if (!class_exists('WP_Block_Patterns_Registry')) {
        return;
    }

    $all_patterns = WP_Block_Patterns_Registry::get_instance()->get_all_registered();
    foreach ($all_patterns as $pattern) {
        if (isset($pattern['name'])) {
            // Use str_starts_with() for PHP 8.0+, fallback to strpos() for older versions
            $is_woocommerce_pattern = function_exists('str_starts_with')
                ? str_starts_with($pattern['name'], 'woocommerce-blocks')
                : strpos($pattern['name'], 'woocommerce-blocks') === 0;

            if ($is_woocommerce_pattern) {
                unregister_block_pattern($pattern['name']);
            }
        }
    }
}, 20);

/**
 * Disables the WooCommerce Pattern Toolkit Full Composability feature.
 *
 * This feature is a flag for advanced block patterns functionality, which can
 * sometimes be tied to large transients/caching issues.
 */
add_filter('woocommerce_admin_features', static function($features) {
    // Ensure $features is an array
    if (!is_array($features)) {
        return $features;
    }

    $feature_to_disable = 'pattern-toolkit-full-composability';

    // Find the feature's identifier in the array and remove it.
    $key = array_search($feature_to_disable, $features, true);
    if ($key !== false) {
        unset($features[$key]);
    }

    return $features;
});