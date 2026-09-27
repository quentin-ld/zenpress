<?php
/**
 * Snippet: disable dns prefetch.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'wp_head', 'wp_resource_hints', 2 );
