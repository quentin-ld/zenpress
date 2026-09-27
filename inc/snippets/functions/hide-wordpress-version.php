<?php
/**
 * Snippet: hide WordPress version.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'wp_head', 'wp_generator' );

add_filter(
	'the_generator',
	static function (): string {
		return '';
	}
);

add_filter(
	'script_loader_src',
	static function ( string $src ): string {
		if ( str_contains( $src, 'ver=' . get_bloginfo( 'version' ) ) ) {
			$src = remove_query_arg( 'ver', $src );
		}

		return $src;
	}
);

add_filter(
	'style_loader_src',
	static function ( string $src ): string {
		if ( str_contains( $src, 'ver=' . get_bloginfo( 'version' ) ) ) {
			$src = remove_query_arg( 'ver', $src );
		}

		return $src;
	}
);
