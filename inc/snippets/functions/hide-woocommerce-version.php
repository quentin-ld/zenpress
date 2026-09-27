<?php
/**
 * Snippet: hide woocommerce version.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'WooCommerce' ) && ! is_admin() ) {
	add_filter(
		'wp_headers',
		static function ( array $headers ): array {
			unset( $headers['X-WooCommerce-Version'] );

			return $headers;
		}
	);

	add_filter(
		'style_loader_src',
		static function ( string $src ): string {
			if ( str_contains( $src, 'ver=' ) && str_contains( $src, 'woocommerce' ) ) {
				$src = remove_query_arg( 'ver', $src );
			}

			return $src;
		},
		10
	);

	add_filter(
		'script_loader_src',
		static function ( string $src ): string {
			if ( str_contains( $src, 'ver=' ) && str_contains( $src, 'woocommerce' ) ) {
				$src = remove_query_arg( 'ver', $src );
			}

			return $src;
		},
		10
	);
}
