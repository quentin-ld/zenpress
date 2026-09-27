<?php
/**
 * Snippet: disable application passwords.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'wp_is_application_passwords_available', '__return_false' );
