<?php
/**
 * Snippet: remove thanks for using WordPress in footer.
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'admin_footer_text', '__return_empty_string' );
