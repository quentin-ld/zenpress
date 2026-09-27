<?php
/**
 * Settings: loader.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Includes active snippet files from the given folder. Skips path traversal and disabled-by-constant snippets.
 *
 * @param string $folder Relative path under plugin dir (default: inc/snippets/functions/).
 * @return array<string> Loaded snippet base names.
 */
function zenpress_load_snippets( string $folder = 'inc/snippets/functions/' ): array {
	if ( str_contains( $folder, '..' ) ) {
		return array();
	}

	$path = ZENPRESS_PLUGIN_DIR . rtrim( $folder, '/' ) . '/';

	if ( ! is_dir( $path ) ) {
		return array();
	}

	$snippets = (array) get_option( 'zenpress_active_snippets', array() );
	$loaded   = array();
	foreach ( $snippets as $name ) {
		$name     = sanitize_file_name( $name );
		$file     = $path . $name . '.php';
		$constant = 'ZENPRESS_' . strtoupper( str_replace( array( '-', '_' ), '_', $name ) );
		if ( is_file( $file ) && ( ! defined( $constant ) || constant( $constant ) !== false ) ) {
			try {
				include_once $file;
				$loaded[] = $name;
			} catch ( \Throwable $e ) {
				continue;
			}
		}
	}

	return $loaded;
}

add_action(
	'init',
	static function (): void {
		zenpress_load_snippets();
	}
);
