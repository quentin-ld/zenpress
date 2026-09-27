<?php
/**
 * Snippet: remove woocommerce patterns.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Only proceed if WooCommerce is active.
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

use Automattic\WooCommerce\Blocks\Package;

add_action(
	'woocommerce_blocks_loaded',
	static function (): void {
		if ( ! class_exists( Package::class ) || ! class_exists( \Automattic\WooCommerce\Blocks\BlockPatterns::class ) ) {
			return;
		}

		try {
			$container = Package::container();
			if ( ! $container ) {
				return;
			}

			$block_patterns = $container->get( \Automattic\WooCommerce\Blocks\BlockPatterns::class );
			if ( $block_patterns && method_exists( $block_patterns, 'register_block_patterns' ) ) {
				remove_action(
					'init',
					array( $block_patterns, 'register_block_patterns' )
				);
			}
		} catch ( \Exception $e ) {
			return;
		}
	}
);

add_action(
	'init',
	static function (): void {
		if ( ! class_exists( 'WP_Block_Patterns_Registry' ) ) {
			return;
		}

		$all_patterns = WP_Block_Patterns_Registry::get_instance()->get_all_registered();
		foreach ( $all_patterns as $pattern ) {
			if ( isset( $pattern['name'] ) && str_starts_with( $pattern['name'], 'woocommerce-blocks' ) ) {
				unregister_block_pattern( $pattern['name'] );
			}
		}
	},
	20
);

/**
 * Disables the WooCommerce Pattern Toolkit Full Composability feature.
 *
 * This feature flag controls advanced block patterns functionality
 * and can be tied to large transients or caching issues.
 */
add_filter(
	'woocommerce_admin_features',
	static function ( array $features ): array {
		$feature_to_disable = 'pattern-toolkit-full-composability';
		$key                = array_search( $feature_to_disable, $features, true );
		if ( false !== $key ) {
			unset( $features[ $key ] );
		}

		return $features;
	}
);
