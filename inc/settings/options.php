<?php
/**
 * Settings: options.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'zenpress_register_snippet_settings' );

/**
 * Registers zenpress_active_snippets and zenpress_admin_bar_enabled, with
 * their REST schemas and sanitize callbacks.
 */
function zenpress_register_snippet_settings(): void {
	register_setting(
		'options',
		'zenpress_active_snippets',
		array(
			'type'              => 'array',
			'default'           => array(),
			'sanitize_callback' => 'zenpress_sanitize_snippets_option',
			'show_in_rest'      => array(
				'schema' => array(
					'type'  => 'array',
					'items' => array( 'type' => 'string' ),
				),
			),
		)
	);

	register_setting(
		'options',
		'zenpress_admin_bar_enabled',
		array(
			'type'              => 'boolean',
			'default'           => false,
			'sanitize_callback' => 'zenpress_sanitize_admin_bar_enabled',
			'show_in_rest'      => array(
				'schema' => array( 'type' => 'boolean' ),
			),
		)
	);
}

/**
 * Sanitizes zenpress_admin_bar_enabled to bool.
 *
 * @param mixed $value The raw value submitted for the option.
 */
function zenpress_sanitize_admin_bar_enabled( mixed $value ): bool {
	return (bool) $value;
}
