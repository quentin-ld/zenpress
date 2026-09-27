<?php
/**
 * Snippet: disable wlw manifest.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'wp_head', 'wlwmanifest_link' );
