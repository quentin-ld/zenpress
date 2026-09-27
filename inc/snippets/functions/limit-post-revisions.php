<?php
/**
 * Snippet: limit post revisions.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// The filter passes ( $num, $post ); both are ignored, since the answer is the
// same for every post type, so neither is declared.
add_filter(
	'wp_revisions_to_keep',
	static function (): int {
		return 10;
	},
	10,
	1
);
