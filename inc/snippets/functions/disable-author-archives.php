<?php
/**
 * Disables author archives by returning a 404 response for author pages.
 *
 * @since 1.0.0
 *
 * @package zenpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Override the canonical redirect to handle author archives.
remove_filter( 'template_redirect', 'redirect_canonical' );

add_action(
	'template_redirect',
	static function (): void {
		if ( is_author() ) {
			global $wp_query;
			$wp_query->set_404();
			status_header( 404 );
			nocache_headers();
		} else {
			redirect_canonical();
		}
	}
);
