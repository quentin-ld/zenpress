<?php

/*
Snippet Name: Disable author archives
Version: 1.0.0
Tag(s): Security
Description:
*/

if (!defined('ABSPATH')) die();

remove_filter ( 'template_redirect', 'redirect_canonical' );
add_action ( 'template_redirect', function () {
	if (is_author ()) {
		global $wp_query;
		$wp_query->set_404 ();
		status_header ( 404 );
	} else {
		redirect_canonical ();
	}
} );
