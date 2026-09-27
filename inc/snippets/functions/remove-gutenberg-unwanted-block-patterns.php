<?php
/**
 * Snippet: remove gutenberg unwanted block patterns.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'should_load_remote_block_patterns', '__return_false' );

add_action(
	'after_setup_theme',
	static function (): void {
		remove_theme_support( 'core-block-patterns' );
	}
);
