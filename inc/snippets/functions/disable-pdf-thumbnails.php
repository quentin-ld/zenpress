<?php
/**
 * Snippet: disable pdf thumbnails.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter(
	'fallback_intermediate_image_sizes',
	static function (): array {
		return array();
	}
);
