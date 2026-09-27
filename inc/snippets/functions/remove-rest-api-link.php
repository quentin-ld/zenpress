<?php
/**
 * Snippet: remove rest api link.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
