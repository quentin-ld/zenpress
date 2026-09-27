<?php
/**
 * Admin: enqueue.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_enqueue_scripts', 'zenpress_admin_enqueue_scripts' );

/**
 * Enqueues the built script and style, on the ZenPress settings page only.
 *
 * @param string $admin_page The screen being enqueued for.
 */
function zenpress_admin_enqueue_scripts( string $admin_page ): void {
	if ( 'settings_page_zenpress' !== $admin_page ) {
		return;
	}

	$asset_file = ZENPRESS_PLUGIN_DIR . 'assets/build/index.asset.php';
	if ( ! file_exists( $asset_file ) ) {
		return;
	}

	$asset = include $asset_file;
	if ( ! is_array( $asset ) ) {
		return;
	}

	// The generated asset file carries both, but PHPStan cannot know that from
	// an `include`, and an explicit shape is what the read is for.
	$dependencies = isset( $asset['dependencies'] ) && is_array( $asset['dependencies'] ) ? $asset['dependencies'] : array();
	$version      = isset( $asset['version'] ) && is_string( $asset['version'] ) ? $asset['version'] : '';
	if ( array() === $dependencies || '' === $version ) {
		return;
	}

	wp_enqueue_script(
		'zenpress-scripts',
		plugins_url( 'assets/build/index.js', ZENPRESS_PLUGIN_FILE ),
		$dependencies,
		$version,
		true
	);

	wp_enqueue_style(
		'zenpress-style',
		plugins_url( 'assets/build/index.css', ZENPRESS_PLUGIN_FILE ),
		array_filter(
			$dependencies,
			static function ( string $style ): bool {
				return wp_style_is( $style, 'registered' );
			}
		),
		$version
	);
}

add_action( 'admin_enqueue_scripts', 'zenpress_localize_snippets_meta' );

/**
 * Localizes zenpressSnippetsMeta and zenpressIntegrationsActive, on the
 * ZenPress settings page only.
 *
 * @param string $admin_page The screen being enqueued for.
 */
function zenpress_localize_snippets_meta( string $admin_page ): void {
	if ( 'settings_page_zenpress' !== $admin_page ) {
		return;
	}

	$snippets      = array();
	$snippets_path = ZENPRESS_PLUGIN_DIR . 'inc/snippets/functions/';
	if ( ! is_dir( $snippets_path ) ) {
		return;
	}

	$files = glob( $snippets_path . '*.php' );
	if ( false === $files ) {
		return;
	}
	foreach ( $files as $file ) {
		$basename              = basename( $file, '.php' );
		$snippets[ $basename ] = zenpress_extract_snippet_metadata( $basename );
	}

	wp_localize_script( 'zenpress-scripts', 'zenpressSnippetsMeta', $snippets );
	wp_localize_script( 'zenpress-scripts', 'zenpressIntegrationsActive', ZenPress_Integrations::get_active_integrations_for_ui() );
}
